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
                        <div class="col-sm-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    <h5>New Registered Members</h5>
                                </div>
                                <div class="card-block">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>ADDRESS</th>
                                                <th>AGE</th>
                                                <th>GENDER</th>
                                                <th>COTANCT No.</th>
                                                <th class="text-right">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cardo, Dalisay</td>
                                                <td>Balasan, Iloilo</td>
                                                <td>30 year's old</td>
                                                <td>Male</td>
                                                <td>09815123131</td>
                                                <td class="text-right">
                                                    <a
                                                        class="btn waves-effect waves-light btn-info btn-outline-info btn-sm btn-round">More
                                                        Details</a>
                                                </td>
                                            </tr>
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
