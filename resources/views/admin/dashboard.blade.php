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
                    <div class="col-xl-3 col-md-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $approvedCount }}</h3>
                                <p>No. of Registered Member</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                {{-- More info <i class="fas fa-arrow-circle-right"></i> --}}
                            </a>
                        </div>
                        {{-- <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-purple">{{ $approvedCount }}</h4>
                                        <h6 class="text-muted m-b-0">No. of Registered Member</h6>
                                    </div>
                                    <div class="col-4 text-right text-primary">
                                        <i class="fa fa-users f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-purple">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0"></p>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $pendingCount }}</h3>
                                <p>No. of Pending Member</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                {{-- More info <i class="fas fa-arrow-circle-right"></i> --}}
                            </a>
                        </div>
                        {{-- <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-danger">{{ $pendingCount }}</h4>
                                        <h6 class="text-muted m-b-0">No. of Pending Member</h6>
                                    </div>
                                    <div class="col-4 text-right text-danger">
                                        <i class="fa fa-users f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-danger">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0"></p>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                    </div>
                    <div class="col-sm-12 mt-5">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Business Permit Applications</h5>
                                <div class="search-form">
                                    <form method="GET" action="" class="form-inline my-2 my-lg-0">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search by name" value="{{ old('search', $search) }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-block">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>NAME OF BUSINESS</th>
                                            <th>CONTACT No.</th>
                                            <th>APPLIED ON</th>
                                            <th>STATUS</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($businessPermits as $businessPermit)
                                            <tr>
                                                <td>{{ $businessPermit->first_name }} {{ $businessPermit->middle_name }}
                                                    {{ $businessPermit->last_name }}</td>
                                                <td>{{ $businessPermit->business_name }}</td>
                                                <td>{{ $businessPermit->owners_Tel_No_Mobile }}</td>
                                                <td>{{ $businessPermit->created_at }}</td>
                                                <td>
                                                    @if ($businessPermit->status == 'Pending')
                                                        <span class="text-danger">Pending</span>
                                                    @else
                                                        <span class="text-success">Approved</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        @if ($businessPermit->status == 'Approved')
                                                        @else
                                                            <form
                                                                action="{{ route('approve.permit', ['id' => $businessPermit->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit"
                                                                    class="btn btn-outline-success btn-sm btn-round m-1">Approve</button>
                                                                <a href="#" data-user-id="{{ $businessPermit->id }}"
                                                                    class="btn btn-outline-info btn-sm btn-round m-1 viewMoreBtn">View
                                                                    More!</a>
                                                            </form>
                                                        @endif
                                                        @if ($businessPermit->status == 'Pending')
                                                        @else
                                                            <form action="" method="POST">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-outline-info btn-sm btn-round m-1">Generate
                                                                    Permit</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Pagination Links -->
                                <div class="d-flex justify-content-center">
                                    <nav aria-label="Page navigation">
                                        {{ $businessPermits->appends(['search' => $search])->links('pagination::bootstrap-4') }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div><!-- /.container-fluid -->

@endsection
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
    <div class="modal-dialog modal-xl">
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

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
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
            $('#successModal').modal('show');
        });
    </script>
@endif



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

    // Assuming you have a button with class 'approve-permit-btn' for approving permits
    $('.approve-permit-btn').click(function() {
        var permitId = $(this).data('permit-id');

        // Send an AJAX request to approve the permit
        $.ajax({
            url: '/approve-permit/' + permitId,
            type: 'GET',
            success: function(response) {
                // Display the success message in a modal
                $('#successModal .modal-body').text(response.message);
                $('#successModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                console.error(xhr.responseText);
            }
        });
    });
</script>
