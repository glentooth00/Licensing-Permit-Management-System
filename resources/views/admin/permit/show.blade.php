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


                                            {{-- <a href="{{ route('permit.edit', ['businessPermit' => $businessPermit->id]) }}"
                                                class="btn btn-primary btn-sm" style="width: 10%;">EDIT</a> --}}
                                            <a href="#" onclick="openEditModal({{ $businessPermit->id }})"
                                                class="btn btn-primary btn-sm" style="width: 10%;">EDIT</a>



                                            </a>
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
                                                    <form action="{{ route('business-registration.store') }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="mt-3">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <ul>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="business_application" value="New"
                                                                                @if ($businessPermit->business_application == 'New') checked @endif
                                                                                disabled disabled>
                                                                            New
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="business_application" value="Renew"
                                                                                @if ($businessPermit->business_application == 'Renew') checked @endif
                                                                                disabled disabled>
                                                                            Renew
                                                                        </li>

                                                                        <br>
                                                                        <b>Classification:</b>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="classification_cottage[]"
                                                                                value="1"
                                                                                @if (in_array('1', explode(',', $businessPermit->classification_cottage))) checked @endif
                                                                                disabled disabled>
                                                                            Cottage (below 500,000)
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="classification_cottage[]"
                                                                                value="2"
                                                                                @if (in_array('2', explode(',', $businessPermit->classification_cottage))) checked @endif
                                                                                disabled disabled>
                                                                            Small (500,000 -> 5M)
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="classification_cottage[]"
                                                                                value="3"
                                                                                @if (in_array('3', explode(',', $businessPermit->classification_cottage))) checked @endif
                                                                                disabled disabled>
                                                                            Medium (5M -> 20M)
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox"
                                                                                name="classification_cottage[]"
                                                                                value="4"
                                                                                @if (in_array('4', explode(',', $businessPermit->classification_cottage))) checked @endif
                                                                                disabled disabled>
                                                                            Large (20M -> Up)
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mx-5 mb-2">
                                                                        <b>Amendment:</b>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <input type="checkbox" name="amendment[]"
                                                                                value="1"
                                                                                @if (in_array('1', explode(',', $businessPermit->amendment))) checked @endif
                                                                                disabled disabled>
                                                                            From Single to Partnership
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="amendment[]"
                                                                                value="2"
                                                                                @if (in_array('2', explode(',', $businessPermit->amendment))) checked @endif
                                                                                disabled disabled>
                                                                            From Single to Corporation
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="amendment[]"
                                                                                value="3"
                                                                                @if (in_array('3', explode(',', $businessPermit->amendment))) checked @endif
                                                                                disabled disabled>
                                                                            From Partnership to Single
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="amendment[]"
                                                                                value="4"
                                                                                @if (in_array('4', explode(',', $businessPermit->amendment))) checked @endif
                                                                                disabled disabled>
                                                                            From Partnership to Corporation
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="amendment[]"
                                                                                value="5"
                                                                                @if (in_array('5', explode(',', $businessPermit->amendment))) checked @endif
                                                                                disabled disabled>
                                                                            From Corporation to Single
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="amendment[]"
                                                                                value="6"
                                                                                @if (in_array('6', explode(',', $businessPermit->amendment))) checked @endif
                                                                                disabled>
                                                                            From Corporation to Partnership
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mx-5 mb-2">
                                                                        <b>Mode of Payment:</b>
                                                                    </div>
                                                                    <ul>
                                                                        <li><input type="checkbox" name="mode_of_payment[]"
                                                                                value="Annually"
                                                                                @if (in_array('Annually', explode(',', $businessPermit->mode_of_payment))) checked @endif
                                                                                disabled disabled>
                                                                            Annually</li>
                                                                        <li><input type="checkbox" name="mode_of_payment[]"
                                                                                value="Bi-Annually"
                                                                                @if (in_array('Bi-Annually', explode(',', $businessPermit->mode_of_payment))) checked @endif
                                                                                disabled disabled>
                                                                            Bi-Annually</li>
                                                                        <li><input type="checkbox" name="mode_of_payment[]"
                                                                                value="Quarterly"
                                                                                @if (in_array('Quarterly', explode(',', $businessPermit->mode_of_payment))) checked @endif
                                                                                disabled disabled>
                                                                            Quarterly</li>

                                                                        <br>
                                                                        <b>Transfer:</b>
                                                                        <li><input type="checkbox" name="transfer[]"
                                                                                value="Ownership"
                                                                                @if (in_array('Ownership', explode(',', $businessPermit->transfer))) checked @endif
                                                                                disabled disabled>
                                                                            Ownership</li>
                                                                        <li><input type="checkbox" name="transfer[]"
                                                                                value="Location"
                                                                                @if (in_array('Location', explode(',', $businessPermit->transfer))) checked @endif
                                                                                disabled disabled>
                                                                            Location</li>

                                                                    </ul>
                                                                </div>
                                                                <hr>
                                                                <table class="table table-bordered table-sm">
                                                                    <tr>
                                                                    <tr>
                                                                        <td class="p-2"> Date of Application: <input
                                                                                value="{{ $businessPermit->date_of_application }}"
                                                                                name="date_of_application" type="date"
                                                                                disabled>
                                                                        </td>
                                                                        <td> DTI/SEC/CDA Registration No.: <input
                                                                                value="{{ $businessPermit->DTI_SEC_CDA_registration_No }}"
                                                                                name="DTI_SEC_CDA_registration_no"
                                                                                type="text" disabled></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-2">Date Business Started: <input
                                                                                value="{{ $businessPermit->date_business_started }}"
                                                                                name="date_business_started" type="date"
                                                                                disabled>
                                                                        </td>
                                                                        <td> DTI/SEC/CDA Date of Registration: <input
                                                                                value="{{ $businessPermit->DTI_SEC_CDA_date_of_Registration }}"
                                                                                name="DTI_SEC_CDA_date_of_registration"
                                                                                type="date" disabled>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="p-2">
                                                                            Type of Org:
                                                                            <span><input name="type_of_org[]"
                                                                                    type="checkbox" value="Single"
                                                                                    @if ($businessPermit->type_of_org == 'Single') checked @endif
                                                                                    disabled>
                                                                                Single</span>,
                                                                            <span><input name="type_of_org[]"
                                                                                    type="checkbox" value="Partnership"
                                                                                    @if ($businessPermit->type_of_org == 'Partnership') checked @endif
                                                                                    disabled>
                                                                                Partnership</span>,
                                                                            <span><input name="type_of_org[]"
                                                                                    type="checkbox" value="Corp."
                                                                                    @if ($businessPermit->type_of_org == 'Corp.') checked @endif
                                                                                    disabled>
                                                                                Corp.</span>,
                                                                            <span><input name="type_of_org[]"
                                                                                    type="checkbox" value="Inc."
                                                                                    @if ($businessPermit->type_of_org == 'Inc.') checked @endif
                                                                                    disabled>
                                                                                Inc.</span>,
                                                                            <span><input name="type_of_org[]"
                                                                                    type="checkbox" value="Coop"
                                                                                    @if ($businessPermit->type_of_org == 'Coop') checked @endif
                                                                                    disabled>
                                                                                Coop</span>
                                                                        </td>

                                                                        <td>
                                                                            <span>CTC No.: <input name="ctc_no"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->ctc_no }}"
                                                                                    disabled></span>
                                                                            <span>TIN: <input name="TIN"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->TIN }}"
                                                                                    disabled></span>

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
                                                                                    required disabled></td>
                                                                            <td>First Name: <input name="first_name"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->first_name }}"
                                                                                    required disabled></td>
                                                                            <td>Middle Name: <input name="middle_name"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->middle_name }}"
                                                                                    required disabled></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3" class="p-2">
                                                                                Business Name: <input name="business_name"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->business_name }}"
                                                                                    required style="width: 80%;" disabled>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3" class="p-2">
                                                                                Trade Name/Franchise: <input
                                                                                    name="trade_name_franchise"
                                                                                    type="text"
                                                                                    value="{{ $businessPermit->trade_name_franchise }}"
                                                                                    style="width: 76%;" disabled>
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
                                                                                            required disabled>
                                                                                    </td>
                                                                                    <td class="p-2">Building Name:
                                                                                        <input name="owners_building_name"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_building_name }}"
                                                                                            required disabled>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2">Street: <input
                                                                                            name="business_street"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_street }}"
                                                                                            required disabled></td>
                                                                                    <td class="p-2">Street: <input
                                                                                            name="owners_street"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_street }}"
                                                                                            required disabled></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2"><b>Barangay:</b>
                                                                                        <input name="business_barangay"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_barangay }}"
                                                                                            required disabled>
                                                                                    </td>
                                                                                    <td class="p-2"><b>Barangay:</b>
                                                                                        <input name="owners_barangay"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_barangay }}"
                                                                                            required disabled>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2">City/Municipality:
                                                                                        <input
                                                                                            name="business_city_municipality"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_city_municipality }}"
                                                                                            required disabled>
                                                                                    </td>
                                                                                    <td class="p-2">City/Municipality:
                                                                                        <input
                                                                                            name="owners_city_municipality"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_city_municipality }}"
                                                                                            required disabled>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2">Province: <input
                                                                                            name="business_province"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_province }}"
                                                                                            required disabled></td>
                                                                                    <td class="p-2">Province: <input
                                                                                            name="owners_province"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_province }}"
                                                                                            required disabled></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="p-2"><b>Tel.
                                                                                            No./Mobile:</b> <input
                                                                                            name="business_Tel_No_Mobile"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->business_Tel_No_Mobile }}"
                                                                                            required disabled></td>
                                                                                    <td class="p-2"><b>Tel.
                                                                                            No./Mobile:</b> <input
                                                                                            name="owners_Tel_No_Mobile"
                                                                                            type="text"
                                                                                            value="{{ $businessPermit->owners_Tel_No_Mobile }}"
                                                                                            required disabled> </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
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
<style>
    /* Style for disabled checkboxes */
    input[type="checkbox"][disabled] {
        -webkit-appearance: none;
        /* Remove default appearance */
        -moz-appearance: none;
        appearance: none;
        width: 16px;
        /* Set custom width and height for checkbox */
        height: 16px;
        border: 2px solid #3498db;
        /* Set border color to blue */
        border-radius: 4px;
        /* Optional: Rounded corners */
        background-color: white;
        /* Set background color to white */
        cursor: not-allowed;
        /* Change cursor to indicate disabled state */
        display: inline-block;
        /* Ensure checkboxes are displayed inline */
        vertical-align: middle;
        /* Align checkboxes vertically */
    }

    /* Style for checked disabled checkboxes */
    input[type="checkbox"][disabled]:checked {
        background-color: #3498db;
        /* Change background color to blue when checked */
    }

    /* Style for disabled checkboxes */
    input[type="checkbox"][disabled] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 16px;
        height: 16px;
        border: 2px solid #3498db;
        border-radius: 4px;
        background-color: white;
        cursor: not-allowed;
        display: inline-block;
        vertical-align: middle;
    }

    /* Style for checked disabled checkboxes */
    input[type="checkbox"][disabled]:checked {
        background-color: #3498db;
    }
</style>
