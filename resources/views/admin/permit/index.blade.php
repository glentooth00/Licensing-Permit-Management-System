@extends('includes.layouts.app')

@section('page-title', 'Registered Permits')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Registered Permit</h1>
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th class="text-center">NAME OF BUSINESS</th>
                                    <th class="text-center">CONTACT No.</th>
                                    <th class="text-center">APPLIED ON</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">APPROVED ON</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($approved_permits as $approved_permit)
                                    <tr>
                                        <td>
                                            {{ $approved_permit->first_name }}
                                            {{ $approved_permit->middle_name }}
                                            {{ $approved_permit->last_name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $approved_permit->business_name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $approved_permit->owners_Tel_No_Mobile }}
                                        </td>
                                        <td class="text-center">
                                            {{ $approved_permit->created_at->format('F j, Y') }}

                                        </td>
                                        <td class="text-center">
                                            @if ($approved_permit->status == 'Pending')
                                                <span class="badge badge-danger p-2">Pending</span>
                                            @else
                                                <span class="badge badge-success p-2">Approved</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($approved_permit->approved_on)->format('F j, Y') }}
                                        </td>
                                        <td class="text-center">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="d-flex justify-content-center">
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        {{-- More Details Button --}}
                                                        {{-- <a href="{{ route('permit.show', ['id' => $approved_permit->id]) }}"
                                                            class="btn btn-outline-success btn-sm btn-round m-1">
                                                            More Details
                                                        </a> --}}

                                                        {{-- Generate Permit Button --}}
                                                        <a href="#" data-user-id="{{ $approved_permit->id }}"
                                                            class="btn btn-outline-primary btn-sm btn-round m-1 generatePermitBtn">Generate
                                                            Permit</a>

                                                        {{-- Archive Button --}}
                                                        <form
                                                            action="{{ route('business-permits.archive', $approved_permit->id) }}"
                                                            method="POST" class="m-1" style="display: inline;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit"
                                                                class="btn btn-outline-danger btn-sm btn-round"
                                                                name="action" value="archive">
                                                                Archive
                                                            </button>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <div class="modal fade" id="generatePermitModal" tabindex="-1" role="dialog"
        aria-labelledby="generatePermitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="width: 100%;" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <div class="col-lg-6 mt-5">

                    </div>
                    {{-- <h5 class="modal-title text-justify" id="generatePermitModalLabel">Generate Permit</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="generatePermitModalBody">
                    <!-- Content will be dynamically loaded here -->
                </div>
                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-md btn-primary" onclick="printDiv('printableArea')">
                        <i class="fas fa-printer"></i> Print
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>


        <script>
            $(document).ready(function() {
                $(".generatePermitBtn").click(function(e) {
                    e.preventDefault();
                    var userId = $(this).data('user-id');
                    var url = "{{ route('generate.qrcode') }}?user_id=" + userId;
                    $.ajax({
                        url: url,
                        method: "GET",
                        success: function(response) {
                            $("#generatePermitModalBody").html(response);
                            $("#generatePermitModal").modal('show');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });
            });

            //AUTO CHECK 
            setInterval(function() {
                fetch('/check-permits')
                    .then(response => response.text())
                    .then(data => console.log(data)) // Logs response message to the console
                    .catch(error => console.error('Error:', error)); // Logs errors
            }, 60000); // Calls the route every 60,000 milliseconds (1 minute)
        </script>

    @endsection
