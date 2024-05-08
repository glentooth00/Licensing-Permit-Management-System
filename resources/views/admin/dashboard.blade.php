@extends('includes.layouts.app')

@section('page-title', 'Dashboard')

@section('content')
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
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
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
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
                            </div>
                        </div>
                        <div class="col-sm-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Business Permit Applications</h5>
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
                                                    <td>
                                                        {{ $businessPermit->first_name }}
                                                        {{ $businessPermit->middle_name }}
                                                        {{ $businessPermit->last_name }}
                                                    </td>
                                                    <td>
                                                        {{ $businessPermit->business_name }}
                                                    </td>

                                                    <td>
                                                        {{ $businessPermit->owners_Tel_No_Mobile }}
                                                    </td>
                                                    <td>
                                                        {{ $businessPermit->created_at }}
                                                    </td>
                                                    <td>
                                                        @php
                                                            if ($businessPermit->status == 'Pending') {
                                                                echo '<span  class="p-2 label label-danger">Pending</span>';
                                                            } else {
                                                                echo '<span  class="label label-success">Approved</span>';
                                                            }
                                                        @endphp
                                                    </td>
                                                    <!-- Add more table cells for other fields -->
                                                    <td>
                                                        <div class="btn-group">
                                                            {{-- Approve Button --}}
                                                            @if ($businessPermit->status == 'Approved')
                                                            @else
                                                                <form
                                                                    action="{{ route('approve.permit', ['id' => $businessPermit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button type="submit"
                                                                        class="btn waves-effect waves-light btn-success btn-outline-info btn-sm btn-round m-1">Approve</button>
                                                                    {{-- Show more details --}}
                                                                    {{-- <a href="{{ route('permit.show', ['id' => $businessPermit->id]) }}"
                                                                        class="btn waves-effect waves-light btn-info btn-outline-info btn-sm btn-round m-1">View
                                                                        More!</a> --}}

                                                                    <a href="#"
                                                                        data-user-id="{{ $businessPermit->id }}"
                                                                        class="btn waves-effect waves-light btn-info btn-outline-info btn-sm btn-round m-1 viewMoreBtn">View
                                                                        More!</a>

                                                                </form>
                                                            @endif
                                                            {{-- Generate Permit Button --}}
                                                            {{-- {{ route('permit.generate', ['id' => $businessPermit->id]) }} --}}

                                                            @if ($businessPermit->status == 'Pending')
                                                            @else
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn waves-effect waves-light btn-primary btn-outline-info btn-sm btn-round m-1">Generate
                                                                        Permit</button>
                                                                </form>
                                                            @endif

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewMoreModal">
        <div class="modal-dialog col-md-8">
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
        <div class="modal-dialog modal-lg col-md-8">
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


@endsection
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
</script>
