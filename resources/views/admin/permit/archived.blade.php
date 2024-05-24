@extends('includes.layouts.app')

@section('page-title', 'Archived Permits')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Archived Permits</h1>
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
                                @foreach ($archived_permits as $archived_permit)
                                    <tr>
                                        <td>
                                            {{ $archived_permit->first_name }}
                                            {{ $archived_permit->middle_name }}
                                            {{ $archived_permit->last_name }}
                                        </td>
                                        <td>
                                            {{ $archived_permit->business_name }}
                                        </td>
                                        <td>
                                            {{ $archived_permit->owners_Tel_No_Mobile }}
                                        </td>
                                        <td>
                                            {{ $archived_permit->created_at->format('F j, Y') }}
                                        </td>
                                        <td>
                                            <span class="badge badge-warning p-2">Archived</span>
                                        </td>
                                        <td>
                                            <form action="{{ route('business-permits.renew', $archived_permit->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="btn btn-outline-success btn-sm btn-round">Renew</button>
                                            </form>
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
