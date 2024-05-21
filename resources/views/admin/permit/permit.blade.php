<!DOCTYPE html>
<html>

<head>
    <title>Permit Details</title>
</head>

<body>
    <h1>Permit Details</h1>

    {{ $qrCode }}

    <h2>Permit Information</h2>
    <p>Permit ID: {{ $permit->status }}</p>
    <p>Status: {{ $permit->status }}</p>
    <p>Business name: {{ $permit->business_name }}</p>
    <p>Owner name: {{ $permit->first_name }} {{ $permit->middle_name }} {{ $permit->last_name }}</p>
    <!-- Add more details as needed -->
</body>

</html>

{{-- @extends('includes.layouts.app')

@section('page-title', 'Dashboard')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Permit</h1>
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
                        <div class="text-center">
                            <span>Republic of the Philippines</span><br>
                            <span>Province of Iloilo</span>
                            <h4>MUNICIPALITY OF ESTANCIA</h4>
                            <span>National Highway cor. V Cudilla Ave. Estancia, Iloilo</span> <br>
                            <span>Te. No. (033) 397-0232/Telefax (033) 397-0231</span>
                            <h4>OFFICE OF THE MUNICIPAL MAYOR</h4>
                            <h1>MAYOR'S BUSINESS PERMIT</h1>
                        </div>
                        <hr>
                        <div>
                            <div class="row text-center">
                                <div class="col-lg-4 mt-5" style="border-top: 1px solid gray;">
                                    <span>DATE Issued</span>
                                </div>
                                <div class="col-lg-4 mt-5" style="border-top: 1px solid gray;">
                                    <span>Mayo's Permit No.</span>
                                </div>
                                <div class="col-lg-4 mt-5" style="border-top: 1px solid gray;">
                                    <span>PERMIT Year</span>
                                </div>

                                <div class="col-lg-4 mt-5" style="border-top: 1px solid gray;">
                                    <span>PERMIT Expires</span>
                                </div>
                                <div class="col-lg-4 mt-5" style="border-top: 1px solid gray;">
                                    <span>Plate Number</span>
                                </div>
                                <div class="col-lg-4 mt-5" style="border-top: 1px solid gray;">
                                    <span>CLASSIFICATION</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-lg-12 mt-3" style="border-bottom: 2px solid gray;">
                                    <h5 class="fw-bold">This CERTIFIES that <span><b>TEST</b></span></h5>
                                </div>
                                <div class="col-lg-12 mt-3" style="border-bottom: 2px solid gray;">
                                    <h5 class="fw-bold">Nature of Business <span><b>TEST</b></span></h5>
                                </div>
                                <div class="col-lg-12 mt-3" style="border-bottom: 2px solid gray;">
                                    <h5 class="fw-bold">Business Address <span><b>TEST</b></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>
                                <strong>
                                    has been granted BUSINESS PERMIT to operate the started buiness subject to existing law,
                                    ordinances, rules and regulations of the Municipality
                                    of Estancia and to pertinent provisions of the Republic act 71600 otherwise known as the
                                    Local Government Code of 1991 and provided further
                                    that any infraction or violation therefore will be efficient ground for the revocation
                                    of this PERMIT.
                                </strong>
                            </p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card bg-secondary">
                                        <div class="card-body p-5 text-center">
                                            <h1> S AND T <br> BUILDING</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card bg-success">
                                        <div class="card-body p-5 text-center">
                                            <h1> {{ $qrCode }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <span><b>Paid under the following:</b></span> <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span>O.R. No.</span><br>
                                                            <span><b>9403650</b></span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span>O.R. Dates</span><br>
                                                            <span><b>01-19-2024</b></span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span>O.R. Amount</span><br>
                                                            <span><b>15,700.00</b></span>
                                                        </div>
                                                    </div>
                                                    <br><br><br>
                                                    <span><b>Mode of Payment:</b> <input type="checkbox" name="">
                                                        Quarterly &nbsp;&nbsp;&nbsp; <input type="checkbox" name="">
                                                        Annual</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h3 class="text-danger">
                                                        ERASURE AND/OR ALTERATION WILL
                                                        INVALIDATE THIS PERMIT
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>APPROVED: </h4>
                                            <br><br><br><br><br><br><br><br><br>
                                            <h4 class="text-center">MAYOR MARY LYNN N. MOSQUEDA</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>This permit shall be posted consipicously at the place where the business is
                                                being conducted and shall be presented</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection --}}
