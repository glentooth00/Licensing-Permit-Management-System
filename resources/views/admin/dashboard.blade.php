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
                                            <h4 class="text-c-purple">20</h4>
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
                                            <h4 class="text-danger">20</h4>
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
                                    <h5>New Registered Members</h5>
                                </div>
                                <div class="card-block">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:5%;text-align:center;">STATUS</th>
                                                <th style="width:10%;text-align:center;">NAME</th>
                                                <th style="width:15%;text-align:center;">ADDRESS</th>
                                                <th style="width:10%;text-align:center;">NAME OF BUSINESS</th>
                                                <th>DATE BUSINESS STARTED</th>
                                                <th style="width:5%;text-align:center;">COTANCT No.</th>
                                                <th style="width:5%;text-align:center;">APPLIED ON</th>
                                                <th class="text-center">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($businessPermits as $businessPermit)
                                                <tr>
                                                    <td style="width:5%;">
                                                        @php
                                                            if ($businessPermit->status == 0) {
                                                                echo '<span class="p-2 text-dark bg-warning">PENDING</span>';
                                                            }
                                                        @endphp
                                                    </td>
                                                    <td style="width:10%;text-align:center;">
                                                        {{ $businessPermit->first_name }}
                                                        {{ $businessPermit->middle_name }}
                                                        {{ $businessPermit->last_name }}</td>
                                                    <td style="width:15%;text-align:center;">
                                                        {{ $businessPermit->owners_street }}
                                                        {{ $businessPermit->owners_barangay }}
                                                        {{ $businessPermit->owners_municipality }}
                                                        {{ $businessPermit->owners_province }} </td>

                                                    <td style="width:10%;text-align:center;">
                                                        {{ $businessPermit->business_name }}</td>
                                                    <td style="width:5%;text-align:center;">
                                                        {{ $businessPermit->date_business_started }}</td>
                                                    <td style="width:5%;text-align:center;">
                                                        {{ $businessPermit->owners_Tel_No_Mobile }}</td>
                                                    <td style="width:5%;text-align:center;">
                                                        {{ $businessPermit->created_at }}</td>
                                                    <!-- Add more table cells for other fields -->
                                                    <td class="text-center">
                                                        {{-- {{ route('business_permit_details', $businessPermit->id) }} --}}
                                                        <a href=""
                                                            class="btn waves-effect waves-light btn-info btn-outline-info btn-sm btn-round">More
                                                            Details</a>
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
@endsection
