@extends('includes.layouts.app')

@section('page-title', 'Dashboard')

@section('content')
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class=""></div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4>More Details</h4>
                                    </div> 
                                    <div class="card-body">
                                        <section class="">
                                            <div class="container">
                                                <a href="/dashboard" class="btn btn-secondary btn-sm" style="width: 10%;"> Back </a>
                                                <div class="card mt-4 p-4">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <h6>Annex 1 (Page 1 of 2): APPLICATION FORM FOR BUSINESS PERMIT</h6>
                                                            <h5>MUNICIPALITY OF ESTANCIA</h5>
                                                            <p>TAX YEAR: ____________________</p>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <h6>INSTRUCTIONS:</h6>
                                                            <ol>
                                                                <li>Provide accurate information and print legibly to avoid delays. Incomplete
                                                                    application
                                                                    will be returned to the applicant.</li>
                                                                <li>Ensure that all documents attached to this form (if any) are complete and properly
                                                                    filled out.</li>
                                                            </ol>
                                                        </div>
                                                        <div class="bg-dark text-light pt-2 px-5 py-1">
                                                            <h6>1. APPLICANT SECTION-BASIC INFORMATION</h6>
                                                        </div>
                                                        <form action="{{ route('business-registration.store') }}" method="POST">
                                                            @csrf
                                                            <div class="mt-3">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li><input type="checkbox" name="business_application" value="New"> New</li>
                                                                            <li><input type="checkbox" name="business_application" value="Renew"> Renew
                                                                            </li>
                                                                            <br>
                                                                            <b>Classification:</b>
                                                                            <li><input type="checkbox" name="classification_cottage"
                                                                                    value=" Cottage (below 500,000)">
                                                                                Cottage (below 500,000)</li>
                                                                            <li><input type="checkbox" name="classification_cottage"
                                                                                    value="Small
                                                                                (500,000 -> 5M)">
                                                                                Small
                                                                                (500,000 -> 5M)</li>
                                                                            <li><input type="checkbox" name="classification_cottage"
                                                                                    value="Medium
                                                                                (5M
                                                                                -> 20M)">
                                                                                Medium
                                                                                (5M
                                                                                -> 20M)</li>
                                                                            <li><input type="checkbox" name="classification_cottage"
                                                                                    value="Large
                                                                                (20M
                                                                                -> Up)">
                                                                                Large
                                                                                (20M
                                                                                -> Up)</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mx-5 mb-2">
                                                                            <b>Amendment:</b>
                                                                        </div>
                                                                        <ul>
                                                                            <li><input type="checkbox" name="amendment"
                                                                                    value="From Single to
                                                                                Partnership">
                                                                                From Single to
                                                                                Partnership</li>
                                                                            <li><input type="checkbox" name="amendment"
                                                                                    value="From Single to
                                                                                Corporation">
                                                                                From Single to
                                                                                Corporation</li>
                                                                            <li><input type="checkbox" name="amendment"
                                                                                    value="From Partnership
                                                                                to
                                                                                Single">
                                                                                From Partnership
                                                                                to
                                                                                Single</li>
                                                                            <li><input type="checkbox" name="amendment"
                                                                                    value="From Partnership
                                                                                to
                                                                                Corporation">
                                                                                From Partnership
                                                                                to
                                                                                Corporation</li>
                                                                            <li><input type="checkbox" name="amendment"
                                                                                    value="From Corporaction
                                                                                to
                                                                                Single">
                                                                                From Corporaction
                                                                                to
                                                                                Single</li>
                                                                            <li><input type="checkbox" name="amendment"
                                                                                    value="From Corporaction
                                                                                to
                                                                                Partnership">
                                                                                From Corporaction
                                                                                to
                                                                                Partnership</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mx-5 mb-2">
                                                                            <b>Mode of Payment:</b>
                                                                        </div>
                                                                        <ul>
                                                                            <li><input type="checkbox" name="mode_of_payment" value="Annually"> Annually
                                                                            </li>
                                                                            <li><input type="checkbox" name="mode_of_payment" value="Bi-Annually">
                                                                                Bi-Annually</li>
                                                                            <li><input type="checkbox" name="mode_of_payment" value="Quarterly"> Quarterly
                                                                            </li>
                                                                            <br>
                                                                            <b>Transfer:</b>
                                                                            <li><input type="checkbox" name="transfer" value="Ownership"> Ownership</li>
                                                                            <li><input type="checkbox" name="transfer" value="Location"> Location</li>
                                                                        </ul>
                                                                    </div>
                                                                    <hr>
                                                                    <table class="table table-bordered table-sm">
                                                                        <tr>
                                                                            <td class="p-2"> Date of Application: <input name="date_of_application"
                                                                                    type="date"></td>
                                                                            <td> DTI/SEC/CDA Registration No.: <input name="DTI_SEC_CDA_registration No"
                                                                                    type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2">Date Business Started: <input name="date_business_started"
                                                                                    type="date"></td>
                                                                            <td> DTI/SEC/CDA Date of Registration: <input
                                                                                    name="DTI_SEC_CDA_date_of_Registration" type="date"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2">
                                                                                Tye of Org:
                                                                                <span><input name="type_of_org" type="checkbox" value="Single">
                                                                                    Single</span> ,
                                                                                <span><input name="type_of_org" type="checkbox" value="Partnership">
                                                                                    Partnership</span>,
                                                                                <span><input name="type_of_org" type="checkbox" value="Corp.">
                                                                                    Corp.</span>,
                                                                                <span><input name="type_of_org" type="checkbox" value="Inc.">
                                                                                    Inc.</span>,
                                                                                <span><input name="type_of_org" type="checkbox" value="Coop">
                                                                                    Coop</span>
                                                                            </td>
                                                                            <td>
                                                                                <span>CTC No.: <input name="ctc_no" type="text"> TIN: <input
                                                                                        name="TIN" type="text"></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <div>
                                                                        <div class="text-center bg-dark text-light p-1 pt-2">
                                                                            <h6>NAME OF TAXPAYER/REGISTRANT</h6>
                                                                        </div>
                                                                        <table class="table table-bordered table-sm">
                                                                            <tr>
                                                                                <td class="p-2">Last Name: <input name="last_name" type="text"
                                                                                        required></td>
                                                                                <td>First Name: <input name="first_name" type="text" required></td>
                                                                                <td>Middle Name: <input name="middle_name" type="text" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3" class="p-2">
                                                                                    Business Name: <input name="business_name" type="text" required
                                                                                        style="width: 80%;">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3" class="p-2">
                                                                                    Trade Name/Franchise: <input name="trade_name_franchise"
                                                                                        type="text" style="width: 76%;">
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <div>
                                                                            <div class="text-center bg-dark text-light p-1 pt-2">
                                                                                <h6>Note: For renewal application, do not fill up this section unless
                                                                                    certain information have changed.</h6>
                                                                            </div>
                                                                            <table class="table table-bordered table-sm">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="text-center">Business Address</th>
                                                                                        <th class="text-center">Owner's Address</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="p-2">Building Name: <input
                                                                                                name="business_building_name" type="text" required>
                                                                                        </td>
                                                                                        <td class="p-2">Building Name: <input
                                                                                                name="owners_building_name" type="text" required>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="p-2">Street: <input name="business_street"
                                                                                                type="text" required>
                                                                                        </td>
                                                                                        <td class="p-2">Street: <input name="owners_street"
                                                                                                type="text" required>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="p-2"><b>Barangay: </b><input
                                                                                                name="business_barangay" type="text" required></td>
                                                                                        <td class="p-2"><b>Barangay: </b><input name="owners_barangay"
                                                                                                type="text" required></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="p-2">City/Municipality: <input
                                                                                                name="business_city_municipality" type="text" required>
                                                                                        </td>
                                                                                        <td class="p-2">City/Municipality: <input
                                                                                                name="owners_city_municipality" type="text" required>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="p-2">Province: <input name="business_province"
                                                                                                type="text" required>
                                                                                        </td>
                                                                                        <td class="p-2">Province: <input name="owners_province"
                                                                                                type="text" required>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="p-2"><b>Tel. No./Mobile: </b><input
                                                                                                name="business_Tel_No_Mobile" type="text" required>
                                                                                        </td>
                                                                                        <td class="p-2"><b>Tel. No./Mobile: </b><input
                                                                                                name="owners_Tel_No_Mobile" type="text" required>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <button class="btn btn-primary">SUBMIT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
