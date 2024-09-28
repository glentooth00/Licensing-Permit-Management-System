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
                                    <h3>{{ $pendingCount }}</h3>
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
                                    <h3>{{ $pendingCount }}</h3>
                                    <h4>Number of Archive Members</h4>
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
                    <!-- /.card-header -->
                    <div class="card-header"><h3>Pending Permits</h3></div>
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
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($businessPermits as $businessPermit)
                                    <tr>
                                        <td>
                                            {{ $businessPermit->first_name }}
                                            {{ $businessPermit->middle_name }}
                                            {{ $businessPermit->last_name }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->business_name }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->business_type }}
                                        </td>
                                        <td>
                                            {{ $businessPermit->owners_Tel_No_Mobile }}
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
                                        <td>
                                            <div class="btn-group">
                                                {{-- Approve Button --}}
                                                @if ($businessPermit->status == 'Approved')
                                                @else
                                                    <form action="{{ route('approve.permit', $businessPermit->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" name="action" value="log_approve"
                                                            class="btn btn-outline-success btn-sm btn-round m-1">Approve</button>
                                                        {{-- <button type="submit"
                                                            class="btn btn-outline-success btn-sm btn-round m-1"
                                                            name="action" value="log_approve">Approve</button> --}}
                                                        {{-- Show more details --}}
                                                        {{-- <a href="{{ route('permit.show', ['id' => $businessPermit->id]) }}"
                                                            class="btn waves-effect waves-light btn-info btn-sm btn-round m-1">View
                                                            More!</a> --}}

                                                        <a href="#" data-user-id="{{ $businessPermit->id }}"
                                                            class="btn btn-outline-info btn-sm btn-round m-1 viewMoreBtn">View
                                                            More</a>

                                                    </form>
                                                @endif
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
    <div class="modal fade" id="viewMoreModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Application Details</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body" id="viewMoreModalBody">
                    <!-- Content loaded via AJAX will appear here -->
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Editing -->
    <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-xl col-md-8">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Edit Application</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- This div will be populated with the content of edit.blade.php -->
                    <div id="editModalContent"></div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--approved modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
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
    </div>


    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
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
        $(document).ready(function() {
            $(".viewMoreBtn").click(function(e) {
                e.preventDefault();
                console.log("Button clicked"); // Debug statement
                var userId = $(this).data('user-id');
                console.log("User ID:", userId); // Debug statement
                var url = "{{ route('permit.show', ['id' => ':id']) }}";
                url = url.replace(':id', userId);
                console.log("Request URL:", url); // Debug statement
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function(response) {
                        console.log("AJAX Success"); // Debug statement
                        $("#viewMoreModalBody").html(response);
                        $("#viewMoreModal").modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

        function openEditModal(userId) {
            $('#editModal').modal('show'); // Open the modal

            // AJAX request to fetch the HTML content of the edit view
            $.ajax({
                url: "{{ route('permit.edit', ['businessPermit' => ':id']) }}".replace(':id', userId),
                method: "GET",
                success: function(response) {
                    // Inject the HTML content into the modal body
                    $('#editModal .modal-body').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
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
    </script>

@endsection
