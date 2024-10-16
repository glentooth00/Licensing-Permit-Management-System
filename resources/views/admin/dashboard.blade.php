@extends('includes.layouts.app')

@section('page-title', 'Dashboard')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <a href="{{ route('admin.permit') }}" class="nav-link">
                                <div class="inner">
                                    <h3>{{ $approvedCount }}</h3>
                                    <h4>Number of Approved Permits</h4>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users f-28"></i>
                                </div>
                                <a href="#" class="small-box-footer"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <a href="{{ route('business-permits.for-renewal') }}" class="nav-link">
                                <div class="inner">
                                    <h3>{{ $renewalCount }}</h3>
                                    <h4>Renewal for Business Permits</h4>
                                </div>
                            </a>
                            </a>
                            <div class="icon">
                                <i class="fa fa-user f-28"></i>
                            </div>
                            <a href="#" class="small-box-footer"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <a href="{{ route('business-permits.archived') }}" class="nav-link">
                                <div class="inner">
                                    <h3>{{ $archivedCount }}</h3>
                                    <h4>Number of Archived Members</h4>
                                </div>
                            </a>
                            <div class="icon">
                                <i class="fa fa-user f-28"></i>
                            </div>
                            <a href="#" class="small-box-footer"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $allPermits }}</h3>
                                <h4>Total Number of Permits</h4>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users f-28"></i>
                            </div>
                            <a href="#" class="small-box-footer"></a>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="card">

                    @if (session('successupdate'))
                        <div class="alert alert-success">
                            {{ session('successupdate') }}
                        </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3>Pending Permits</h3>
                    </div>
                    <div class="card-body">
                        {{-- <p>Welcome, {{ $user->firstname }}!</p> --}}
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>NAME OF BUSINESS</th>
                                    <th>BUSINESS TYPE</th>
                                    <th>CONTACT No.</th>
                                    <th>APPLIED ON</th>
                                    <th>STATUS</th>
                                    <th>
                                        <center>ACTIONS</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($businessPermits as $businessPermit)
                                    <tr>
                                        <td>
                                            {{ $businessPermit->owner_first_name }}
                                            {{ $businessPermit->owner_middle_name }}
                                            {{ $businessPermit->owner_last_name }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->business_name }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->business_type }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->telephone_no }} / {{ $businessPermit->mobile_no }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->created_at->format('F j, Y') }}
                                        </td>
                                        <td>
                                            @if ($businessPermit->status == 'Pending')
                                                <span class="badge badge-danger p-2">Pending</span>
                                            @else
                                                <span class="badge badge-success p-2">Approved</span>
                                            @endif
                                        </td>

                                        <!-- Add more table cells for other fields -->
                                        <td class="d-flex justify-content-center">
                                            <div class="btn-group">
                                                {{-- Approve Button --}}
                                                {{--  @if ($businessPermit->status == 'Approved')
                                                @else
                                                    <form action="{{ route('approve.permit', $businessPermit->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" name="action" value="log_approve"
                                                            class="btn btn-outline-success btn-sm btn-round m-1">Approve</button>
                                                        <button type="submit"
                                                            class="btn btn-outline-success btn-sm btn-round m-1"
                                                            name="action" value="log_approve">Approve</button> --}}
                                                {{-- Show more details --}}
                                                {{-- <a href="{{ route('permit.show', ['id' => $businessPermit->id]) }}"
                                                            class="btn waves-effect waves-light btn-info btn-sm btn-round m-1">View
                                                            More!</a> 



                                                    </form>
                                                @endif --}}

                                                <button
                                                    class="btn btn-outline-primary btn-sm btn-rounded m-1 view-permit-details"
                                                    data-id="{{ $businessPermit->id }}">
                                                    View Permit
                                                </button>

                                                {{-- Generate Permit Button --}}
                                                {{-- {{ route('permit.generate', ['id' => $businessPermit->id]) }} --}}

                                                {{-- @if ($businessPermit->status == 'Pending')
                                                @else
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-outline-primary btn-sm btn-round m-1">Generate
                                                            Permit</button>
                                                    </form>
                                                @endif --}}

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
    <!-- /.content-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Business Permit Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="yourModalBody">
                    <!-- AJAX content will be injected here -->
                </div>
                <div class="modal-footer">


                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Permit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- This will be populated by the AJAX request -->
                </div>
                <div class="modal-footer">

                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                </div>
            </div>
        </div>
    </div>




    <!--approved modal -->
    {{-- <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog col-md-8">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Permit has been approved!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Business permit updated successfully.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- @if (session('update'))
        <script>
            $(document).ready(function() {
                $('#confirmationModal').modal('show');
            });
        </script>
    @endif --}}

    <!-- Confirmation Modal -->
    {{-- <div class="modal fade" id="confirmationModal2" tabindex="-1" role="dialog"
        aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Permit approved successfully.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            $(document).ready(function() {
                $('#confirmationModal2').modal('show');
            });
        </script>
    @endif --}}



    <style>
        .button-container {
            display: flex;
            /* Use flexbox to align buttons horizontally */
            justify-content: center;
            /* Space buttons evenly within the container */

        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).on('click', '.view-permit-details', function() {
            var permitId = $(this).data('id'); // Assuming you pass the permit ID using a data attribute

            $.ajax({
                url: "{{ route('permit.show', ':id') }}".replace(':id',
                    permitId), // Use Laravel route helper to dynamically insert ID
                type: "GET",
                success: function(response) {
                    if (response.html) {
                        // Display the fetched content inside the modal
                        $('#yourModalBody').html(response.html);
                        $('#yourModal').modal('show'); // Show the modal
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while fetching permit details.');
                }
            });
        });



        function openEditModal(userId) {
            $('#editModal').modal('show'); // Open the modal

            // Build the correct URL
            var ajaxUrl = "{{ url('admin/admin/permit') }}/" + userId + "/edit";

            // Debugging: log the URL to ensure it's correct
            console.log("AJAX URL:", ajaxUrl);

            // AJAX request to fetch the HTML content of the edit view
            $.ajax({
                url: ajaxUrl,
                method: "GET",
                success: function(response) {
                    // Inject the HTML content into the modal body
                    $('#editModal .modal-body').html(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error loading form:", xhr.responseText);
                    // Handle error - optional, show a user-friendly error message
                    $('#editModal .modal-body').html(
                        '<p>An error occurred while loading the form. Please try again later.</p>');
                }
            });
        }










        $(document).ready(function() {
            @if (session('success'))
                $('#successModal').modal('show');
            @endif
        });

        $(document).ready(function() {
            @if (session('update'))
                $('#confirmationModal').modal('show');
            @endif
        });

        $(document).ready(function() {
            $('#yourFormId').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#confirmationModal').modal('show');
                        }
                    },
                    error: function(xhr) {
                        // handle error
                        console.log(xhr.responseText);
                    }
                });
            });
        });



        //edit
        // $(document).ready(function() {
        //     // Event listener for the edit button click
        //     $('.open-edit-modal').on('click', function(e) {
        //         e.preventDefault(); // Prevent the default link behavior

        //         // Get the permit ID from the data attribute
        //         var permitId = $(this).data('id');
        //         console.log(permitId);
        //         // Send an Ajax request to load the edit form
        //         $.ajax({
        //             url: '/permit/edit/' + permitId, // Update this URL if needed
        //             method: 'GET',
        //             success: function(response) {
        //                 // Populate the modal content with the response (edit.blade.php)
        //                 $('#editModalContent').html(response);

        //                 // Show the modal
        //                 $('#editModal').modal('show');
        //             },
        //             error: function(xhr) {
        //                 alert('An error occurred while loading the form.'); // Handle error
        //             }
        //         });
        //     });
        // });
    </script>

@endsection
