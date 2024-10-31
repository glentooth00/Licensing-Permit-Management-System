@extends('includes.layouts.app')

@section('page-title', 'Reports')

@section('content')
    <style>
        /* Add a spinner style for loading feedback */
        .spinner-border {
            width: 3rem;
            height: 3rem;
            display: none;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #exampleModal,
            #exampleModal * {
                visibility: visible;
            }

            #exampleModal {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                /* Optional: set max height for modal content */
                max-height: 100vh;
                overflow-y: auto;
                /* Allow scrolling if content is too long */
            }

            .modal-footer {
                display: none;
            }
        }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Reports</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('generate.permit') }}" method="post">
                            @csrf
                            <button class="btn btn-primary btn-sm pt-2 pb-2 mb-2">Generate Report</button>
                        </form>

                        <!-- Table to display reports -->
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Report Month</th>
                                    <th class="text-center">Generated Time and Date</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                    <tr>
                                        <td>{{ $report->month }}</td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($report->created_at)->format('M-d-Y h:i A') }}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-success view-report"
                                                data-url="{{ route('show.monthly.permit', $report->id) }}"
                                                data-applied="{{ $report->permits_applied }}"
                                                data-approved="{{ $report->permits_approved }}"
                                                data-archived="{{ $report->permits_archived }}"
                                                data-renewed="{{ $report->permits_renewed }}"
                                                data-pending="{{ $report->permits_pending }}">
                                                View Report
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-2 float-right">
                            {{ $reports->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Monthly Report</h2>
                </div>
                <div class="modal-body">
                    <div class="container d-flex justify-content-center align-items-center my-auto" id="content">
                        <div class="row w-100">
                            <div class="col-md-7 d-flex justify-content-center">
                                <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                            <div class="col-md-5 d-flex justify-content-center" style="margin-top: 25px;">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">Report Details</div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label class="badge text-dark">Report Month:</label>
                                            <span id="report-month"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="badge text-dark">New Applied Permits:</label>
                                            <span id="new-applied-permits"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="badge text-dark">Pending Permits:</label>
                                            <span id="pending-permits"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="badge text-dark">Approved Permits:</label>
                                            <span id="approved-permits"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="badge text-dark">Permits for Renewal:</label>
                                            <span id="renewal-permits"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="badge text-dark">Archived Permits:</label>
                                            <span id="archived-permits"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="spinner-border text-primary" role="status" id="loading-spinner">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="print-report" type="button" class="btn btn-primary">Download PDF</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


    <script>
        $(document).ready(function() {
            // Event listener for the View Report button
            $('.view-report').on('click', function(e) {
                e.preventDefault();
                // Retrieve data attributes from the clicked button
                var url = $(this).data('url');
                var applied = $(this).data('applied');
                var approved = $(this).data('approved');
                var archived = $(this).data('archived');
                var renewed = $(this).data('renewed');
                var pending = $(this).data('pending');
                var cancelled = $(this).data('cancelled'); // New data for cancelled
                var expired = $(this).data('expired'); // New data for expired

                if (!url) {
                    alert("No report URL found!");
                    return;
                }

                // Show the spinner while loading
                $('#loading-spinner').show();

                // Make an AJAX request to fetch the report content
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        if (response.error) {
                            alert(response.error);
                            $('#loading-spinner').hide(); // Hide spinner on error
                            return;
                        }

                        // Populate the report details in the modal
                        $('#report-month').text(response.report_month);
                        $('#new-applied-permits').text(applied);
                        $('#pending-permits').text(pending);
                        $('#approved-permits').text(approved);
                        $('#renewal-permits').text(renewed);
                        $('#archived-permits').text(archived);
                        $('#cancelled-permits').text(cancelled); // Display cancelled data
                        $('#expired-permits').text(expired); // Display expired data

                        // Hide the spinner once data is loaded
                        $('#loading-spinner').hide();
                        $('#exampleModal').modal('show');

                        // Initialize the chart after the modal is shown
                        $('#exampleModal').on('shown.bs.modal', function() {
                            const ctx = document.getElementById('myChart');
                            if (ctx) {
                                if (ctx.chart) {
                                    ctx.chart.destroy();
                                }

                                ctx.chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: [
                                            'Newly Applied Permits',
                                            'Approved',
                                            'Pending',
                                            'Archived',
                                            'Renewal',
                                        ],
                                        datasets: [{
                                            label: 'Business Permit Report',

                                            data: [applied, approved,
                                                pending, archived,
                                                renewed,
                                            ], // Added new data
                                            backgroundColor: [
                                                'rgba(54, 162, 235, 0.6)', // Newly Applied Permits - blue
                                                'rgba(255, 99, 132, 0.6)', // Approved - red
                                                'rgba(255, 206, 86, 0.6)', // Pending - yellow
                                                'rgba(75, 192, 192, 0.6)', // Archived - teal
                                                'rgba(153, 102, 255, 0.6)', // Renewal - purple
                                                'rgba(255, 159, 64, 0.6)', // Cancelled - orange
                                                'rgba(201, 203, 207, 0.6)' // Expired - grey
                                            ],
                                            borderColor: [
                                                'rgba(54, 162, 235, 1)', // Newly Applied Permits - blue
                                                'rgba(255, 99, 132, 1)', // Approved - red
                                                'rgba(255, 206, 86, 1)', // Pending - yellow
                                                'rgba(75, 192, 192, 1)', // Archived - teal
                                                'rgba(153, 102, 255, 1)', // Renewal - purple
                                                'rgba(255, 159, 64, 1)', // Cancelled - orange
                                                'rgba(201, 203, 207, 1)' // Expired - grey
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        plugins: {
                                            legend: {
                                                position: 'top'
                                            },
                                            tooltip: {
                                                callbacks: {
                                                    label: function(context) {
                                                        let label = context
                                                            .label || '';
                                                        if (context.parsed >
                                                            0) {
                                                            label += ': ' +
                                                                context
                                                                .parsed;
                                                        }
                                                        return label;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    },
                    error: function() {
                        alert('An error occurred while fetching the report.');
                        $('#loading-spinner').hide(); // Hide spinner on error
                    }
                });
            });






        });

        $('#print-report').on('click', function() {
            const modalElement = document.getElementById('content');

            if (!modalElement || !$('#exampleModal').is(':visible')) {
                console.error('Modal not found or not visible.');
                return;
            }

            // Get the current month and year
            const currentDate = new Date();
            const options = {
                year: 'numeric',
                month: 'long'
            }; // Format as "October 2024"
            const reportTitle = `Report for ${currentDate.toLocaleDateString('en-US', options)}`;

            html2canvas(modalElement, {
                scale: 2,
                useCORS: true
            }).then(function(canvas) {
                const imgData = canvas.toDataURL('image/png');

                const {
                    jsPDF
                } = window.jspdf;
                const pdf = new jsPDF({
                    orientation: 'landscape', // Set landscape orientation
                    unit: 'px',
                    format: 'a4' // A4 size for better scaling
                });

                // Calculate the aspect ratio for the chart to fit nicely on the PDF in landscape
                const pageWidth = pdf.internal.pageSize.getWidth();
                const pageHeight = pdf.internal.pageSize.getHeight();
                const imgWidth = pageWidth * 0.9; // Scale the image to 90% of the page width
                const imgHeight = (canvas.height * imgWidth) / canvas.width; // Maintain aspect ratio

                const xOffset = (pageWidth - imgWidth) / 2; // Center the image horizontally
                const yOffset = (pageHeight - imgHeight) / 2 + 30; // Offset to make space for the title

                // Add the title at the top of the PDF
                pdf.setFontSize(22); // Set font size for the title
                pdf.text(reportTitle, pageWidth / 2, 40, {
                    align: 'center'
                }); // Title at the top center of the page

                // Add the image to the PDF with scaling
                pdf.addImage(imgData, 'PNG', xOffset, yOffset, imgWidth, imgHeight);

                pdf.save('monthly-report.pdf');
            }).catch(function(error) {
                console.error('Error capturing modal as PDF:', error);
            });
        });
    </script>
@endsection
