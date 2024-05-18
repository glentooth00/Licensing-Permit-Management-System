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
                            <div class="inner">
                                <h3>{{ $approvedCount }}</h3>
                                <h4>No. of Registered Member</h4>
                            </div>
                            <div class="icon">
                            <i class="fa fa-users f-28"></i>
                            </div>
                            <a href="#" class="small-box-footer"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $pendingCount }}</h3>
                                <h4>No. of Pending Member</h4>
                            </div>
                            <div class="icon">
                            <i class="fa fa-user f-28"></i>
                            </div>
                            <a href="#" class="small-box-footer"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $pendingCount }}</h3>
                                <h4>Overall</h4>
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
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
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
                                                            class="btn btn-outline-success btn-sm btn-round m-1">Approve</button>
                                                        {{-- Show more details --}}
                                                        {{-- <a href="{{ route('permit.show', ['id' => $businessPermit->id]) }}"
                                                            class="btn waves-effect waves-light btn-info btn-sm btn-round m-1">View
                                                            More!</a> --}}

                                                        <a href="#"
                                                            data-user-id="{{ $businessPermit->id }}"
                                                            class="btn btn-outline-info btn-sm btn-round m-1 viewMoreBtn">View
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
                                                            class="btn btn-outline-primary btn-sm btn-round m-1">Generate
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
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@push('styles')
<style>
    .button-container {
        display: flex;
        /* Use flexbox to align buttons horizontally */
        justify-content: center;
        /* Space buttons evenly within the container */

    }
</style>
@endpush

@push('scripts')
    
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

@endpush
