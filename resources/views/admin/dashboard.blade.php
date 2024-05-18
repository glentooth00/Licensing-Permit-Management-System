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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <tr>
                                    <th>NAME</th>
                                    <th>NAME OF BUSINESS</th>
                                    <th>COTANCT No.</th>
                                    <th>APPLIED ON</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
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

                                                        <a href="#" data-user-id="{{ $businessPermit->id }}"
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
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
