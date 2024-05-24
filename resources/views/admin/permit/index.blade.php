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
                                    <th>ACTION</th>
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
                                            {{ $approved_permit->created_at->format('F j, Y') }}
                                        </td>
                                        <td>
                                            @if ($approved_permit->status == 'Pending')
                                                <span class="badge badge-danger p-2">Pending</span>
                                            @else
                                                <span class="badge badge-success p-2">Approved</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="d-flex justify-content-start">
                                                        {{-- Approve Button --}}
                                                        @if ($approved_permit->status !== 'Approved')
                                                            <form
                                                                action="{{ route('approve.permit', ['id' => $approved_permit->id]) }}"
                                                                method="POST" class="m-1">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit"
                                                                    class="btn btn-outline-info btn-sm btn-round">Approve</button>
                                                            </form>
                                                        @endif

                                                        {{-- More Details Button with ID --}}
                                                        <a href="{{ route('permit.show', ['id' => $approved_permit->id]) }}"
                                                            class="btn btn-outline-success btn-sm btn-round m-1">
                                                            More Details
                                                        </a>

                                                        {{-- Generate Permit Button --}}
                                                        <form action="{{ route('generate.qrcode') }}" method="GET"
                                                            class="m-1">
                                                            @csrf
                                                            <input type="hidden" name="user_id"
                                                                value="{{ $approved_permit->id }}">
                                                            <input type="hidden" name="status"
                                                                value="{{ $approved_permit->status }}">
                                                            <button type="submit"
                                                                class="btn btn-outline-info btn-sm btn-round">Generate
                                                                Permit</button>
                                                        </form>

                                                        {{-- Archive Button --}}
                                                        <form
                                                            action="{{ route('business-permits.archive', $approved_permit->id) }}"
                                                            method="POST" class="m-1" style="display: inline;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit"
                                                                class="btn btn-outline-danger btn-sm btn-round">Archive</button>
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
    <!-- /.content-wrapper -->

@endsection
