@extends('includes.layouts.app2')

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
                                {{-- <div class="card-header text-center">
                                    <h4>More Details</h4>
                                </div> --}}
                                <div class="card-body">
                                    <section class="">
                                        <div class="container">

                                            {{-- <a href="/dashboard" class="btn btn-danger btn-sm" style="width: 10%;">CANCEL
                                            </a> --}}

                                            <div class="card mt-4 p-4">

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

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
                                                            <li>Provide accurate information and print legibly to avoid
                                                                delays. Incomplete
                                                                application
                                                                will be returned to the applicant.</li>
                                                            <li>Ensure that all documents attached to this form (if any) are
                                                                complete and properly
                                                                filled out.</li>
                                                        </ol>
                                                    </div>
                                                    <div class="bg-dark text-light pt-2 px-5 py-1">
                                                        <h6>1. APPLICANT SECTION-BASIC INFORMATION</h6>

                                                    </div>
                                                    <form
                                                        action="{{ route('business-registration.update', ['businessPermit' => $businessPermit->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mt-3">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <input type="text" name="status"
                                                                        value="{{ $businessPermit->status }}" hidden>
                                                                    <ul>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="business_application" value="New"
                                                                                @if ($businessPermit->business_application == 'New') checked @endif>
                                                                            New
                                                                            {{-- {{ $businessPermit->business_application }} --}}
                                                                            <!-- Debugging output -->
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="business_application" value="Renew"
                                                                                @if ($businessPermit->business_application == 'Renew') checked @endif>
                                                                            Renew
                                                                            {{-- {{ $businessPermit->business_application }} --}}
                                                                            <!-- Debugging output -->
                                                                        </li>
                                                                        <br>
                                                                        <b>Classification:</b>
                                                                        <li><input type="checkbox"
                                                                                name="classification_cottage" value="1"
                                                                                @if (in_array('1', explode(',', $businessPermit->classification_cottage))) checked @endif>
                                                                            Cottage (below 500,000)</li>
                                                                        <li><input type="checkbox"
                                                                                name="classification_cottage" value="2"
                                                                                @if (in_array('2', explode(',', $businessPermit->classification_cottage))) checked @endif>
                                                                            Small (500,000 -> 5M)</li>
                                                                        <li><input type="checkbox"
                                                                                name="classification_cottage" value="3"
                                                                                @if (in_array('3', explode(',', $businessPermit->classification_cottage))) checked @endif>
                                                                            Medium (5M -> 20M)</li>
                                                                        <li><input type="checkbox"
                                                                                name="classification_cottage" value="4"
                                                                                @if (in_array('4', explode(',', $businessPermit->classification_cottage))) checked @endif>
                                                                            Large (20M -> Up)</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mx-5 mb-2">
                                                                        <b>Amendment:</b>
                                                                    </div>
                                                                    <ul>
                                                                        <li><input type="checkbox" name="amendment"
                                                                                value="1"
                                                                                @if (in_array('1', explode(',', $businessPermit->amendment))) checked @endif>
                                                                            From Single to
                                                                            Partnership</li>
                                                                        <li><input type="checkbox" name="amendment"
                                                                                value="2"
                                                                                @if (in_array('2', explode(',', $businessPermit->amendment))) checked @endif>
                                                                            From Single to
                                                                            Corporation</li>
                                                                        <li><input type="checkbox" name="amendment"
                                                                                value="3"
                                                                                @if (in_array('3', explode(',', $businessPermit->amendment))) checked @endif>
                                                                            From Partnership to
                                                                            Single</li>
                                                                        <li><input type="checkbox" name="amendment"
                                                                                value="4"
                                                                                @if (in_array('4', explode(',', $businessPermit->amendment))) checked @endif>
                                                                            From Partnership to
                                                                            Corporation</li>
                                                                        <li><input type="checkbox" name="amendment"
                                                                                value="5"
                                                                                @if (in_array('5', explode(',', $businessPermit->amendment))) checked @endif>
                                                                            From Corporation to
                                                                            Single</li>
                                                                        <li><input type="checkbox" name="amendment"
                                                                                value="6"
                                                                                @if (in_array('6', explode(',', $businessPermit->amendment))) checked @endif>
                                                                            From Corporation to
                                                                            Partnership</li>

                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mx-5 mb-2">
                                                                        <b>Mode of Payment:</b>
                                                                    </div>
                                                                    <ul>
                                                                        <li><input type="checkbox" name="mode_of_payment"
                                                                                value="Annually"
                                                                                @if (in_array('Annually', explode(',', $businessPermit->mode_of_payment))) checked @endif>
                                                                            Annually</li>
                                                                        <li><input type="checkbox" name="mode_of_payment"
                                                                                value="Bi-Annually"
                                                                                @if (in_array('Bi-Annually', explode(',', $businessPermit->mode_of_payment))) checked @endif>
                                                                            Bi-Annually</li>
                                                                        <li><input type="checkbox" name="mode_of_payment"
                                                                                value="Quarterly"
                                                                                @if (in_array('Quarterly', explode(',', $businessPermit->mode_of_payment))) checked @endif>
                                                                            Quarterly</li>

                                                                        <br>
                                                                        <b>Transfer:</b>
                                                                        <li><input type="checkbox" name="transfer"
                                                                                value="Ownership"
                                                                                @if (in_array('Ownership', explode(',', $businessPermit->transfer))) checked @endif>
                                                                            Ownership</li>
                                                                        <li><input type="checkbox" name="transfe"
                                                                                value="Location"
                                                                                @if (in_array('Location', explode(',', $businessPermit->transfer))) checked @endif>
                                                                            Location</li>

                                                                    </ul>
                                                                </div>
                                                                <hr>
                                                                <table class="table table-bordered table-sm">
                                                                    <tr>
                                                                    <tr>
                                                                        <td class="p-2"> Date of Application: <input
                                                                                value="{{ $businessPermit->date_of_application }}"
                                                                                name="date_of_application" type="date">
                                                                        </td>
                                                                        <td> DTI/SEC/CDA Registration No.: <input
                                                                                value="{{ $businessPermit->DTI_SEC_CDA_registration_No }}"
                                                                                name="DTI_SEC_CDA_registration No"
                                                                                type="text"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-2">Date Business Started: <input
                                                                                value="{{ $businessPermit->date_business_started }}"
                                                                                name="date_business_started" type="date">
                                                                        </td>
                                                                        <td> DTI/SEC/CDA Date of Registration: <input
                                                                                value="{{ $businessPermit->DTI_SEC_CDA_date_of_Registration }}"
                                                                                name="DTI_SEC_CDA_date_of_Registration"
                                                                                type="date">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="p-2">
                                                                            Type of Org:
                                                                            <span><input name="type_of_org" type="checkbox"
                                                                                    value="Single"
                                                                                    @if ($businessPermit->type_of_org == 'Single') checked @endif>
                                                                                Single</span>,
                                                                            <span><input name="type_of_org" type="checkbox"
                                                                                    value="Partnership"
                                                                                    @if ($businessPermit->type_of_org == 'Partnership') checked @endif>
                                                                                Partnership</span>,
                                                                            <span><input name="type_of_org"
                                                                                    type="checkbox" value="Corp."
                                                                                    @if ($businessPermit->type_of_org == 'Corp.') checked @endif>
                                                                                Corp.</span>,
                                                                            <span><input name="type_of_org"
                                                                                    type="checkbox" value="Inc."
                                                                                    @if ($businessPermit->type_of_org == 'Inc.') checked @endif>
                                                                                Inc.</span>,
                                                                            <span><input name="type_of_org"
                                                                                    type="checkbox" value="Coop"
                                                                                    @if ($businessPermit->type_of_org == 'Coop') checked @endif>
                                                                                Coop</span>
                                                                        </td>

                                                                        <td>
                                                                            <span>CTC No.: <input name="ctc_no"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->ctc_no }}"></span>
                                                                            <span>TIN: <input name="TIN"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->TIN }}"></span>

                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <div>
                                                                    <div class="text-center bg-dark text-light p-1 pt-2">
                                                                        <h6>NAME OF TAXPAYER/REGISTRANT</h6>
                                                                    </div>
                                                                    <table class="table table-bordered table-sm">
                                                                        <tr>
                                                                            <td class="p-2">Last Name: <input
                                                                                    name="last_name" type="text"
                                                                                    value="{{ $businessPermit->last_name }}"
                                                                                    required></td>
                                                                            <td>First Name: <input name="first_name"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->first_name }}"
                                                                                    required></td>
                                                                            <td>Middle Name: <input name="middle_name"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->middle_name }}"
                                                                                    required></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3" class="p-2">
                                                                                Business Name: <input name="business_name"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->business_name }}"
                                                                                    required style="width: 80%;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3" class="p-2">
                                                                                Trade Name/Franchise: <input
                                                                                    name="trade_name_franchise"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->trade_name_franchise }}"
                                                                                    style="width: 76%;">
                                                                            </td>
                                                                        </tr>

                                                                    </table>
                                                                    <div>
                                                                        <div
                                                                            class="text-center bg-dark text-light p-1 pt-2">
                                                                            <h6>Note: For renewal application, do not fill
                                                                                up this section unless
                                                                                certain information have changed.</h6>
                                                                        </div>
                                                                        <table class="table table-bordered table-sm">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center">Business
                                                                                        Address</th>
                                                                                    <th class="text-center">Owner's Address
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="p-2">Building Name:
                                                                                        <input
                                                                                            name="business_building_name"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_building_name }}"
                                                                                            required>
                                                                                    </td>
                                                                                    <td class="p-2">Building Name:
                                                                                        <input name="owners_building_name"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_building_name }}"
                                                                                            required>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2">Street: <input
                                                                                            name="business_street"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_street }}"
                                                                                            required></td>
                                                                                    <td class="p-2">Street: <input
                                                                                            name="owners_street"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_street }}"
                                                                                            required></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2"><b>Barangay:</b>
                                                                                        <input name="business_barangay"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_barangay }}"
                                                                                            required>
                                                                                    </td>
                                                                                    <td class="p-2"><b>Barangay:</b>
                                                                                        <input name="owners_barangay"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_barangay }}"
                                                                                            required>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2">City/Municipality:
                                                                                        <input
                                                                                            name="business_city_municipality"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_city_municipality }}"
                                                                                            required>
                                                                                    </td>
                                                                                    <td class="p-2">City/Municipality:
                                                                                        <input
                                                                                            name="owners_city_municipality"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_city_municipality }}"
                                                                                            required>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2">Province: <input
                                                                                            name="business_province"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_province }}"
                                                                                            required></td>
                                                                                    <td class="p-2">Province: <input
                                                                                            name="owners_province"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_province }}"
                                                                                            required></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2"><b>Tel.
                                                                                            No./Mobile:</b> <input
                                                                                            name="business_Tel_No_Mobile"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_Tel_No_Mobile }}"
                                                                                            required></td>
                                                                                    <td class="p-2"><b>Tel.
                                                                                            No./Mobile:</b> <input
                                                                                            name="owners_Tel_No_Mobile"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_Tel_No_Mobile }}"
                                                                                            required></td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <button class="btn btn-success"
                                                                            type="submit">Update</button>
                                                                    </div>
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
