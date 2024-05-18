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
                                @foreach ($approved_permits as $approved_permit)
                                    <tr>
                                        <td>
                                            {{ $approved_permit->first_name }}
                                            {{ $approved_permit->middle_name }}
                                            {{ $approved_permit->last_name }}
                                        </td>
                                        <td>
                                            {{ $approved_permit->business_name }}
                                        </td>

                                        <td>
                                            {{ $approved_permit->owners_Tel_No_Mobile }}
                                        </td>
                                        <td>
                                            {{ $approved_permit->created_at }}
                                        </td>
                                        <td>
                                            @php
                                                if ($approved_permit->status == 'Pending') {
                                                    echo '<span class="p-2 text-danger">Pending</span>';
                                                } else {
                                                    echo '<span class=" p-2 label label-success">Approved</span>';
                                                }
                                            @endphp
                                        </td>
                                        <!-- Add more table cells for other fields -->
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    @if ($approved_permit->status == 'Approved')
                                                    @else
                                                        <form
                                                            action="{{ route('approve.permit', ['id' => $approved_permit->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="btn btn-outline-info btn-sm btn-round m-1">Approve</button>
                                                        </form>
                                                    @endif
                                                </div>
                                                <div class="col-4">
                                                    {{-- Approve Button --}}
                                                    {{-- More Details Button with ID --}}
                                                    <a type="button"
                                                        href="{{ route('permit.show', ['id' => $approved_permit->id]) }}"
                                                        class="btn btn-outline-success btn-sm btn-round m-1">More
                                                        Details</a>
                                                </div>

                                                <div class="col-5">
                                                    {{-- Generate Permit Button --}}
                                                    {{-- {{ route('permit.generate', ['id' => $businessPermit->id]) }} --}}
                                                    <form action="{{ route('generate.qrcode') }}" method="GET">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ $approved_permit->id }}">
                                                        <input type="hidden" name="status"
                                                            value="{{ $approved_permit->status }}">
                                                        <button type="submit"
                                                            class="btn btn-outline-info btn-sm btn-round m-1">Generate
                                                            Permit</button>
                                                    </form>
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
    <!-- /.content-wrapper -->

@endsection
