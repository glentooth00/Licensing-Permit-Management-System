@extends('includes.layouts.app')

@section('page-title', 'Permits For Renewal')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Permits For Renewal</h1>
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
                                @foreach ($for_renewal_permits as $for_renewal_permit)
                                    <tr>
                                        <td>
                                            {{ $for_renewal_permit->first_name }}
                                            {{ $for_renewal_permit->middle_name }}
                                            {{ $for_renewal_permit->last_name }}
                                        </td>
                                        <td>
                                            {{ $for_renewal_permit->business_name }}
                                        </td>
                                        <td>
                                            {{ $for_renewal_permit->owners_Tel_No_Mobile }}
                                        </td>
                                        <td>
                                            {{ $for_renewal_permit->created_at->format('F j, Y') }}
                                        </td>
                                        <td>
                                            <span class="badge badge-warning p-2">For Renewal</span>
                                        </td>
                                        <td>
                                            <form
                                                action="{{ route('business-permits.approve-renewal', $for_renewal_permit->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="btn btn-outline-success btn-sm btn-round">Approve
                                                    Renewal</button>
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
