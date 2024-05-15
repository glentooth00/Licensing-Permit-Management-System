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
                                                echo '<span class="text-danger">Pending</span>';
                                                } else {
                                                echo '<span class="text-success">Approved</span>';
                                                }
                                                @endphp
                                            </td>
                                            <!-- Add more table cells for other fields -->
                                            <td>
                                                <div class="btn-group">
                                                    {{-- Approve Button --}}
                                                    @if ($businessPermit->status == 'Approved')
                                                    @else
                                                    <form action="{{ route('approve.permit', ['id' => $businessPermit->id]) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-outline-success btn-sm btn-round m-1">Approve</button>
                                                        {{-- Show more details --}}
                                                        {{-- <a href="{{ route('permit.show', ['id' => $businessPermit->id]) }}"
                                                        class="btn waves-effect waves-light btn-info btn-outline-info btn-sm btn-round m-1">View
                                                        More!</a> --}}

                                                        <a href="#" data-user-id="{{ $businessPermit->id }}" class="btn btn-outline-info btn-sm btn-round m-1 viewMoreBtn">View
                                                            More!</a>

                                                    </form>
                                                    @endif
                                                    {{-- Generate Permit Button --}}
                                                    {{-- {{ route('permit.generate', ['id' => $businessPermit->id]) }} --}}

                                                    @if ($businessPermit->status == 'Pending')
                                                    @else
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn waves-effect waves-light btn-primary btn-outline-info btn-sm btn-round m-1">Generate
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
