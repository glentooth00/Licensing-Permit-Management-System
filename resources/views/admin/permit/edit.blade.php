@extends('includes.layouts.app2')
@section('page-title', 'Dashboard')
<link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@section('content')
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="container">
                        <section class="mt-5">
                            <div class="container">
                                <a href="/admin/permit" class="btn btn-secondary btn-sm mb-4">Back</a>
                                <form action="{{ route('business_registration.update', $businessPermit->id) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card">
                                        <div class="text-center mt-4">
                                            <span style="font-size: 23px;">MUNICIPAL OF ESTANCIA</span><br>
                                            <span style="font-size: 23px; font-weight: 800;">UNIFIED APPLICATION FORM</span>
                                        </div>
                                        <div class="row mt-2 mt-5">
                                            <div class="col-md-5">
                                                <table style="width: 70%; margin-left: 80px;"
                                                    class="table table-bordered mt-4">
                                                    <tbody>
                                                        <tr>
                                                            <!-- New Application Checkbox -->
                                                            <!-- New Application Checkbox -->
                                                            <!-- New Application Checkbox -->
                                                            <!-- New Application Radio Button -->
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        name="business_application" type="radio"
                                                                        value="New" id="flexCheckNew"
                                                                        {{ $businessPermit->business_application == 'New' ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="flexCheckNew">NEW</label>
                                                                </div>
                                                            </td>

                                                            <!-- Renew Application Radio Button -->
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        name="business_application" type="radio"
                                                                        value="Renew" id="flexCheckRenew"
                                                                        {{ $businessPermit->business_application == 'Renew' ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="flexCheckRenew">RENEW</label>
                                                                </div>
                                                            </td>




                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                Mode of Payment
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td rowspan="2" style="width: 40%;">ADDITIONAL/ <br> CHANGE
                                                                <br> kind/item
                                                            </td>
                                                            <td style="padding-left: 30px;">
                                                                <input class="form-check-input" name="mode_of_payment"
                                                                    type="radio" value="Anually" id="flexCheckAnually"
                                                                    onclick="uncheckOthers(['flexCheckBiAnually', 'flexCheckQuarterly'], this)"
                                                                    {{ $businessPermit->mode_of_payment == 'Anually' ? 'checked' : '' }}>
                                                                Anually
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-left: 30px;">
                                                                <input class="form-check-input" name="mode_of_payment"
                                                                    type="radio" value="Bi-Anually"
                                                                    id="flexCheckBiAnually"
                                                                    onclick="uncheckOthers(['flexCheckAnually', 'flexCheckQuarterly'], this)"
                                                                    {{ $businessPermit->mode_of_payment == 'Bi-Anually' ? 'checked' : '' }}>
                                                                Bi-Anually
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>CHANGE biz address</td>
                                                            <td style="padding-left: 30px;">
                                                                <input class="form-check-input" name="mode_of_payment"
                                                                    type="radio" value="Quarterly" id="flexCheckQuarterly"
                                                                    onclick="uncheckOthers(['flexCheckAnually', 'flexCheckBiAnually'], this)"
                                                                    {{ $businessPermit->mode_of_payment == 'Quarterly' ? 'checked' : '' }}>
                                                                Quarterly
                                                            </td>
                                                        </tr>




                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <div class="text-end"
                                                    style="right: 0; margin-top: 20px; padding-left: 120px;">
                                                    <span><i>(Do Not Fill-out-For BPLO use)</i></span><br>
                                                    <span>Date of Receipt: <input type="text"
                                                            style="width: 50% !important;"></span><br>
                                                    <span>Tracking Number:<input type="text"
                                                            style="width: 45% !important;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header bg-dark text-light">
                                            <span>A. BUSINESS INFORMATION AND REGISTRATION</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <span class="px-5">Please Choose one </span>
                                                                    <span>
                                                                        <input type="radio" name="business_type"
                                                                            value="Sole Proprietorship"
                                                                            class="form-check-input"
                                                                            id="flexCheckSoleProprietorship1"
                                                                            onclick="uncheckOthers(['flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCorporation', 'flexCheckCooperative'], this)"
                                                                            {{ $businessPermit->business_type == 'Sole Proprietorship' ? 'checked' : '' }}>
                                                                        <b> Sole
                                                                            Proprietorship&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                        <input type="radio" name="business_type"
                                                                            value="One Person Corporation"
                                                                            class="form-check-input"
                                                                            id="flexCheckSoleProprietorship2"
                                                                            onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckPartnership', 'flexCheckCorporation', 'flexCheckCooperative'], this)"
                                                                            {{ $businessPermit->business_type == 'One Person Corporation' ? 'checked' : '' }}>
                                                                        <b> One Person
                                                                            Corporation&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                        <input type="radio" name="business_type"
                                                                            value="Partnership" class="form-check-input"
                                                                            id="flexCheckPartnership"
                                                                            onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckCorporation', 'flexCheckCooperative'], this)"
                                                                            {{ $businessPermit->business_type == 'Partnership' ? 'checked' : '' }}>
                                                                        <b>
                                                                            Partnership&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                        <input type="radio" name="business_type"
                                                                            value="Corporation" class="form-check-input"
                                                                            id="flexCheckCorporation"
                                                                            onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCooperative'], this)"
                                                                            {{ $businessPermit->business_type == 'Corporation' ? 'checked' : '' }}>
                                                                        <b>
                                                                            Corporation&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                        <input type="radio" name="business_type"
                                                                            value="Cooperative" class="form-check-input"
                                                                            id="flexCheckCooperative"
                                                                            onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCorporation'], this)"
                                                                            {{ $businessPermit->business_type == 'Cooperative' ? 'checked' : '' }}>
                                                                        <b> Cooperative</b>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                    <table class="table table-bordered mt-4">
                                                        <tr>
                                                            <td class="text-center" style="text-align: center;">
                                                                <b>DTI/SEC/CDA Registration Number:</b><br>
                                                                <input type="text" name="DTI_SEC_CDA_registration_No"
                                                                    value="{{ old('DTI_SEC_CDA_registration_No', $businessPermit->DTI_SEC_CDA_registration_No) }}"
                                                                    style="text-align: center;">
                                                            </td>
                                                            <td class="text-center" style="text-align: center;">
                                                                <b>Tax Identification Number (TIN):</b><br>
                                                                <input type="text" name="TIN"
                                                                    value="{{ old('TIN', $businessPermit->TIN) }}"
                                                                    style="text-align: center;">
                                                            </td>
                                                        </tr>


                                                    </table>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td rowspan="2">
                                                                <b>Name Address/Main Office Address:</b>
                                                            </td>
                                                            <td>
                                                                <span>Bldg. No. <input type="text" name="building_no"
                                                                        value="{{ $businessPermit->building_no }}"></span>
                                                            </td>
                                                            <td colspan="3">
                                                                <span>Name of Bldg. <input type="text"
                                                                        name="business_building_name"
                                                                        value="{{ $businessPermit->business_building_name }}"></span>
                                                            </td>
                                                            <td>
                                                                <span>Lot No. <input type="text" name="lot_number"
                                                                        value="{{ $businessPermit->lot_number }}"></span>
                                                            </td>
                                                            <td>
                                                                <span>Block No. <input type="text" name="block_no"
                                                                        value="{{ $businessPermit->block_no }}"></span>
                                                            </td>
                                                        </tr>


                                                        <td>
                                                            <span>
                                                                <label for="street">City/Municipality</label>
                                                                <select class="form-select" name="city_municipality"
                                                                    id="municipality">
                                                                    <option value="" hidden>Select Municipality
                                                                    </option>
                                                                    @foreach ($municipalities as $municipality)
                                                                        <option value="{{ $municipality->municipality }}">
                                                                            {{ $municipality->municipality }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </span>
                                                        </td>


                                                        <td>
                                                            <span>
                                                                <label for="street">Select Street</label>
                                                                <select class="form-select" name="street"
                                                                    id="street">
                                                                    <option value="" hidden>Select Street</option>
                                                                    <option value="">None</option>
                                                                    <!-- None option -->
                                                                </select>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <label for="barangay">Select Barangay</label>
                                                                <select class="form-select" name="barangay"
                                                                    id="barangay">
                                                                    <option value="" hidden>Select Barangay</option>
                                                                    <option value="">None</option>
                                                                    <!-- None option -->
                                                                </select>
                                                        </td>

                                                        {{-- <tr>
                                                            <td>
                                                                <span>Street
                                                                    <select name="street" class="form-select">
                                                                        <option value="">Select St...</option>
                                                                        @foreach ($streets as $street)
                                                                            <option value="{{ $street->street }}"
                                                                                {{ $street->street == $businessPermit->street ? 'selected' : '' }}>
                                                                                {{ $street->street }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>Barangay
                                                                    <select name="barangay" class="form-select">
                                                                        <option value="">Select Brgy...</option>
                                                                        @foreach ($barangays as $barangay)
                                                                            <option value="{{ $barangay->barangay }}"
                                                                                {{ $barangay->barangay == $businessPermit->barangay ? 'selected' : '' }}>
                                                                                {{ $barangay->barangay }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </td> --}}


                                                        <td>
                                                            <span>Subdivision <input type="text" name="subdivision"
                                                                    value="{{ $businessPermit->subdivision }}"></span>
                                                        </td>
                                                        {{-- <td>
                                                                <span>City/ Municipality <input type="text"
                                                                        name="city_municipality"
                                                                        value="{{ $businessPermit->city_municipality }}"></span>
                                                            </td> --}}
                                                        <td>
                                                            <span>Province <input type="text" name="province"
                                                                    value="{{ $businessPermit->province }}"></span>
                                                        </td>
                                                        <td>
                                                            <span>Zip Code <input type="text" name="zip_code"
                                                                    value="{{ $businessPermit->zip_code }}"></span>
                                                        </td>
                                                        </tr>
                                                    </table>
                                                    <table class="table table-bordered mt-3">
                                                        <tr>
                                                            <td>
                                                                <b>Telephone No.:</b>
                                                                <input type="text" name="telephone_no"
                                                                    value="{{ $businessPermit->telephone_no }}">
                                                            </td>
                                                            <td>
                                                                <b>Mobile no.</b><br>
                                                                <input value="+63" disabled class="text-dark"
                                                                    style="width:55px; margin-right:5px; border: none; border-bottom: 1px solid black;">
                                                                <input name="mobile_no" pattern="[0-9]{10}"
                                                                    placeholder="Enter 10-digit number" type="number"
                                                                    required
                                                                    oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                    maxlength="10"
                                                                    value="{{ substr($businessPermit->mobile_no, 3) }}"
                                                                    style="border: none; border-bottom: 1px solid black; width: 80% !important;">
                                                            </td>

                                                            <td>
                                                                <b>Email Address</b>
                                                                <input type="text" name="email_address"
                                                                    value="{{ $businessPermit->email_address }}">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table class="table table-bordered mt-3">
                                                        <tr>
                                                            <td style="width: 18%;">
                                                                <b>Name of Owner:</b><br>
                                                                (For Sole Proprietorship)
                                                            </td>
                                                            <td>
                                                                <b>Last Name:</b>
                                                                <input type="text" name="owner_last_name"
                                                                    value="{{ $businessPermit->owner_last_name }}">
                                                            </td>
                                                            <td>
                                                                <b>First Name:</b>
                                                                <input type="text" name="owner_first_name"
                                                                    value="{{ $businessPermit->owner_first_name }}">
                                                            </td>
                                                            <td>
                                                                <b>Middle Name:</b>
                                                                <input type="text" name="owner_middle_name"
                                                                    value="{{ $businessPermit->owner_middle_name }}">
                                                            </td>
                                                            <td>
                                                                <b>Suffix:</b>
                                                                <input type="text" name="owner_suffix"
                                                                    value="{{ $businessPermit->owner_suffix }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 18%;">
                                                                <b>Name of Pres./ OIC:</b><br>
                                                                (For Corporations/ Cooperative/ Partnerships)
                                                            </td>
                                                            <td>
                                                                <b>Last Name:</b>
                                                                <input type="text" name="pres_last_name"
                                                                    value="{{ $businessPermit->pres_last_name }}">
                                                            </td>
                                                            <td>
                                                                <b>First Name:</b>
                                                                <input type="text" name="pres_first_name"
                                                                    value="{{ $businessPermit->pres_first_name }}">
                                                            </td>
                                                            <td>
                                                                <b>Middle Name:</b>
                                                                <input type="text" name="pres_middle_name"
                                                                    value="{{ $businessPermit->pres_middle_name }}">
                                                            </td>
                                                            <td>
                                                                <b>Suffix:</b>
                                                                <input type="text" name="pres_suffix"
                                                                    value="{{ $businessPermit->pres_suffix }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5">
                                                                <b>For Corporation:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input type="checkbox" name="corp_type" value="Filipino"
                                                                    class="form-check-input"
                                                                    {{ $businessPermit->corp_type == 'Filipino' ? 'checked' : '' }}><b>
                                                                    Filipino</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input type="checkbox" name="corp_type" value="Foreign"
                                                                    class="form-check-input"
                                                                    {{ $businessPermit->corp_type == 'Foreign' ? 'checked' : '' }}><b>
                                                                    Foreign</b>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <b>In case of emergency,</b>
                                                            </td>
                                                            <td colspan="2">
                                                                <b>Name of Contact Person:</b>
                                                                <input type="text" name="emergency_contact_name"
                                                                    value="{{ $businessPermit->emergency_contact_name }}">
                                                            </td>
                                                            <td colspan="2">
                                                                <b>Contact No.: </b><br>
                                                                <input value="+63" disabled class="text-dark"
                                                                    style="width:55px;margin-right:5px; border: none; border-bottom: 1px solid black;">
                                                                <input name="emergency_contact_no" pattern="[0-9]{10}"
                                                                    placeholder="Enter 10-digit number" type="number"
                                                                    required
                                                                    oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                    maxlength="10"
                                                                    value="{{ substr($businessPermit->emergency_contact_no, 3) }}"
                                                                    style="border: none; border-bottom: 1px solid black; width: 80% !important;">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="5">
                                                                <p><i>***Write OLD address if CHANGE of Business address/
                                                                        Write old kind/ item if change of item/ kind:</i>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="card-header bg-dark text-light">
                                                <span>B. BUSINESS OPERATION</span>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td colspan="2">
                                                                <b>Business Area</b>(in sq.m);
                                                                <input type="text" name="business_area"
                                                                    value="{{ $businessPermit->business_area }}">
                                                            </td>
                                                            <td colspan="2">
                                                                <b>Total No. of employees in establishment:</b><br>
                                                                <span><input type="text"
                                                                        value="{{ $businessPermit->total_employees_male }}"
                                                                        name="total_employees_male"
                                                                        style="width: 20% !important;">Male</span>
                                                                <span><input type="text" name="total_employees_female"
                                                                        value="{{ $businessPermit->total_employees_female }}"
                                                                        style="width: 20% !important;">Female</span>
                                                            </td>
                                                            <td>
                                                                <b>No. of Employees residing within Estancia, Iloilo </b>
                                                                <input type="text"
                                                                    value="{{ $businessPermit->employees_residing_estancia }}"
                                                                    name="employees_residing_estancia">
                                                            </td>
                                                            <td colspan="2">
                                                                <b>No. of Delivery Vehicles </b>(if applicable) <br>
                                                                <span><input type="text" style="width: 20% !important;"
                                                                        value="{{ $businessPermit->delivery_vehicles_van_truck }}"
                                                                        name="delivery_vehicles_van_truck">Van/Truck</span>
                                                                <span><input type="text" style="width: 20% !important;"
                                                                        value="{{ $businessPermit->delivery_vehicles_motorcycle }}"
                                                                        name="delivery_vehicles_motorcycle">Motorcycle</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">
                                                                <span><b><input type="checkbox" class="form-check-input">
                                                                        Same as Home
                                                                        Address/ Main Office Address.</b>(if same as Home/
                                                                    Main Office
                                                                    Address, DO NOT FILL-UP bellow)</span>
                                                            </td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td rowspan="2" style="width: 15%;">
                                                                <b>Business Location Address:</b>
                                                            </td>
                                                            <td>
                                                                <span>Bldg. No. <input type="text"
                                                                        name="building_no2"></span>
                                                            </td>
                                                            <td colspan="3">
                                                                <span>Name of Bldg. <input type="text"
                                                                        name="business_building_name2"></span>
                                                            </td>
                                                            <td>
                                                                <span>Lot No. <input type="text"
                                                                        name="lot_number2"></span>
                                                            </td>
                                                            <td>
                                                                <span>Block no. <input type="text"
                                                                        name="block_no2"></span>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td colspan="7">
                                                                <span>
                                                                    <b><input type="checkbox" class="form-check-input">
                                                                        Same as Home Address/ Main Office Address.</b> (if
                                                                    same as Home/ Main Office Address, DO NOT FILL-UP below)
                                                                </span>
                                                            </td>
                                                        </tr> --}}
                                                        {{-- <tr>
                                                            <td rowspan="2" style="width: 15%;">
                                                                <b>Business Location Address:</b>
                                                            </td>
                                                            <td>
                                                                <span>Bldg. No. <input type="text"
                                                                        name="building_no2"></span>
                                                            </td>
                                                            <td colspan="3">
                                                                <span>Name of Bldg. <input type="text"
                                                                        name="business_building_name2"></span>
                                                            </td>
                                                            <td>
                                                                <span>Lot No. <input type="text"
                                                                        name="lot_number2"></span>
                                                            </td>
                                                            <td>
                                                                <span>Block No. <input type="text"
                                                                        name="block_no2"></span>
                                                            </td>
                                                        </tr> --}}
                                                        {{-- <tr>
                                                            <td>
                                                                <span>Street
                                                                    <select name="street2" class="form-select">
                                                                        <option value="">Select St...</option>
                                                                        @foreach ($streets as $street)
                                                                            <option value="{{ $street->street }}"
                                                                                {{ $businessPermit->street2 == $street->street ? 'selected' : '' }}>
                                                                                {{ $street->street }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>Barangay <select name="barangay2"
                                                                        class="form-select">
                                                                        <option value="">Select Brgy...</option>
                                                                        @foreach ($barangays as $barangay)
                                                                            <option value="{{ $barangay->barangay }}"
                                                                                {{ $businessPermit->barangay2 == $barangay->barangay ? 'selected' : '' }}>
                                                                                {{ $barangay->barangay }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </td> --}}
                                                        {{-- <td>
                                                            <span>Subdivision <input type="text" name="subdivision2"
                                                                    value="{{ $businessPermit->subdivision2 }}"></span>
                                                        </td>
                                                        <td>
                                                            <span>City/ Municipality <input type="text"
                                                                    name="city_municipality2"
                                                                    value="{{ $businessPermit->city_municipality2 }}"></span>
                                                        </td>
                                                        <td>
                                                            <span>Province <input type="text" name="province2"
                                                                    value="{{ $businessPermit->province2 }}"></span>
                                                        </td>
                                                        <td>
                                                            <span>Zip Code <input type="text" name="zip_code2"
                                                                    value="{{ $businessPermit->zip_code2 }}"></span>
                                                        </td>
                                                        </tr> --}}


                                                        <tr>
                                                            <td rowspan="2" style="width: 15%;">
                                                                <b>Business Location Address:</b>
                                                            </td>
                                                            <td>
                                                                <span>Bldg. No. <input type="text" name="building_no2"
                                                                        value="{{ $businessPermit->building_no2 }}"></span>
                                                            </td>
                                                            <td colspan="3">
                                                                <span>Name of Bldg. <input type="text"
                                                                        name="business_building_name2"
                                                                        value="{{ $businessPermit->business_building_name2 }}"></span>
                                                            </td>
                                                            <td>
                                                                <span>Lot No. <input type="text" name="lot_number2"
                                                                        value="{{ $businessPermit->lot_number2 }}"></span>
                                                            </td>
                                                            <td>
                                                                <span>Block no. <input type="text" name="block_no2"
                                                                        value="{{ $businessPermit->block_no2 }}"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <!-- Street Dropdown -->
                                                            <td>
                                                                <span>Street
                                                                    <select name="street2" id="streetSelect"
                                                                        class="form-select">
                                                                        <option value="">Select St...</option>
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>Barangay
                                                                    <select name="barangay2" id="barangaySelect"
                                                                        class="form-select">
                                                                        <option value="">Select Brgy...</option>
                                                                    </select>
                                                                </span>
                                                            </td>

                                                            <td>
                                                                <span>Subdivision <input type="text"
                                                                        name="subdivision2"
                                                                        value="{{ $businessPermit->subdivision2 }}"></span>
                                                            </td>
                                                            <td>
                                                                <span>City/ Municipality
                                                                    <input type="text" name="city_municipality2"
                                                                        value="ESTANCIA" readonly>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>Province <input type="text" name="province2"
                                                                        value="ILOILO" readonly></span>
                                                            </td>
                                                            <td>
                                                                <span>Zip Code <input type="text" name="zip_code2"
                                                                        value="5017" readonly></span>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td colspan="7">
                                                                <span>
                                                                    Business Location, Owned?
                                                                    <input type="file" id="taxDeclarationInput"
                                                                        name="tax_declaration"
                                                                        style="width: 27% !important;"
                                                                        onchange="displayFileName(this)">
                                                                    or Property ID No.
                                                                    <input type="text" id="propertyIdInput"
                                                                        value="{{ $businessPermit->property_id }}"
                                                                        name="property_id" style="width: 27% !important;"
                                                                        disabled>

                                                                    {{-- @if (empty($businessPermit->tax_declaration))
                                                                        no document
                                                                    @else
                                                                        <a href="#" id="viewDocumentLink"
                                                                            style="margin-left: 10px;"
                                                                            onclick="openModal(event, '{{ $businessPermit->tax_declaration }}')">View
                                                                            Document</a>

                                                                        or Property ID No.
                                                                        <input type="text" id="propertyIdInput"
                                                                            value="{{ $businessPermit->property_id }}"
                                                                            name="property_id"
                                                                            style="width: 27% !important;" disabled>
                                                                    @endif --}}

                                                                    {{-- <input type="file" id="taxDeclarationInput"
                                                                        name="tax_declaration"
                                                                        style="width: 27% !important;"
                                                                        onchange="displayFileName(this)">
                                                                    or Property ID No.
                                                                    <input type="text" id="propertyIdInput"
                                                                        value="{{ $businessPermit->property_id }}"
                                                                        name="property_id" style="width: 27% !important;"
                                                                        disabled> --}}

                                                                </span>
                                                                <br>

                                                                <!-- No section -->
                                                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="noBusinessLocation"
                                                                        onclick="toggleNoOptions(this, 'yesBusinessLocation')">
                                                                    No, If No please present any of the following:
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" name="requirement"
                                                                        value="Contract of lease" class="form-check-input"
                                                                        id="leaseCheckbox"> Contract of lease
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" name="requirement"
                                                                        value="MOA" class="form-check-input"
                                                                        id="moaCheckbox"> MOA
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" name="requirement"
                                                                        value="Written consent of owner"
                                                                        class="form-check-input" id="consentCheckbox">
                                                                    Written consent of owner
                                                                </span>
                                                            </td>
                                                        </tr>



                                                        <tr>
                                                            <td colspan="7">
                                                                {{-- <span>
                                                                    <b>Do you have tax incentives from any Government
                                                                        Entity?</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <span>
                                                                        {{ $businessPermit->gov_entity }}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="yesTaxIncentives"
                                                                            onclick="toggleFileInputAndUncheck('certificateFileInput', this, 'noTaxIncentives')">
                                                                        Yes (please attach a softcopy of your Certificate)

                                                                        <input type="file" id="certificateFileInput"
                                                                            disabled>

                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="noTaxIncentives"
                                                                            onclick="disableFileInputAndUncheck('certificateFileInput', 'yesTaxIncentives')">
                                                                        No
                                                                    </span>
                                                                </span> --}}

                                                                <span>
                                                                    <b>Do you have tax incentives from any Government
                                                                        Entity?</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <span>
                                                                        @if (empty($businessPermit->gov_entity))
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="yesTaxIncentives"
                                                                                onclick="toggleFileInputAndUncheck('certificateFileInput', this, 'noTaxIncentives')">
                                                                            Yes (please attach a softcopy of your
                                                                            Certificate)

                                                                            <input type="file"
                                                                                id="certificateFileInput"
                                                                                value="$businessPermit->gov_entity"
                                                                                disabled>

                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="noTaxIncentives"
                                                                                onclick="disableFileInputAndUncheck('certificateFileInput', 'yesTaxIncentives')">
                                                                            No
                                                                        @else
                                                                            <a href="#"
                                                                                id="viewGovEntityDocumentLink"
                                                                                style="margin-left: 10px;"
                                                                                onclick="openModal(event, '{{ $businessPermit->gov_entity }}')">View
                                                                                Government Entity Document</a>
                                                                        @endif


                                                                    </span>
                                                                </span>



                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">
                                                                <b>Business Activity</b>(Please check one):
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="business_activity"
                                                                    class="form-check-input w-10 "
                                                                    id="mainBusinessCheckbox"
                                                                    onclick="checkOnlyOne2(this)"
                                                                    value="Main
                                                                Business/ Office">
                                                                Main
                                                                Business/ Office
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="business_activity"
                                                                    class="form-check-input" id="branchOfficeCheckbox"
                                                                    onclick="checkOnlyOne2(this)" value="Branch Office">
                                                                Branch Office
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="business_activity"
                                                                    class="form-check-input" id="adminOfficeCheckbox"
                                                                    onclick="checkOnlyOne2(this)" value="Admin. Office">
                                                                Admin. Office
                                                                Only
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="business_activity"
                                                                    class="form-check-input" id="warehouseCheckbox"
                                                                    onclick="checkOnlyOne2(this)" value="Warehouse">
                                                                Warehouse
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="business_activity"
                                                                    class="form-check-input" id="othersCheckbox"
                                                                    onclick="toggleOthersText(this)">
                                                                Others. Please specify:
                                                                <br>
                                                                <input type="text" id="othersText" name="others">
                                                            </td>
                                                        </tr>



                                                        <tr class="text-center">
                                                            <th colspan="2">Line of Business</th>
                                                            <td colspan="2">Philippines Standard Industrial Code (PSIC),
                                                                If available</td>
                                                            <th colspan="2">Product/ Services</th>
                                                            <th>No. of Units</th>
                                                        </tr>

                                                        @for ($i = 0; $i < max(count($lineOfBusiness), count($psic), count($productServices), count($noOfUnits)); $i++)
                                                            <tr>
                                                                <td colspan="2">
                                                                    <input type="text" name="line_of_business[]"
                                                                        value="{{ $lineOfBusiness[$i] ?? '' }}">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" name="PSIC[]"
                                                                        value="{{ $psic[$i] ?? '' }}">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" name="product_services[]"
                                                                        value="{{ $productServices[$i] ?? '' }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="no_of_units[]"
                                                                        value="{{ $noOfUnits[$i] ?? '' }}">
                                                                </td>
                                                            </tr>
                                                        @endfor

                                                        <!-- Add an extra row for adding new entries -->
                                                        <tr>
                                                            <td colspan="2">
                                                                <input type="text" name="line_of_business[]"
                                                                    placeholder="New Line of Business">
                                                            </td>
                                                            <td colspan="2">
                                                                <input type="text" name="PSIC[]"
                                                                    placeholder="New PSIC">
                                                            </td>
                                                            <td colspan="2">
                                                                <input type="text" name="product_services[]"
                                                                    placeholder="New Product/Services">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="no_of_units[]"
                                                                    placeholder="New No. of Units">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-center">
                                                                <span>
                                                                    <b>Capitalization</b><br>
                                                                    (For New Application)
                                                                </span>
                                                            </td>
                                                            <td class="text-center pt-5" colspan="3">
                                                                <input type="text">
                                                            </td>
                                                            <td class="text-center">
                                                                <span>
                                                                    <b>Last Year's Gross <br> Sales/ Receipt</b><br>
                                                                    (For Renewal)
                                                                </span>
                                                            </td>
                                                            <td class="text-center pt-5" colspan="3">
                                                                <input type="text">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-md bg-primary">Update</button>
                                    </div>


                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Modal for Document Preview -->
<div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable vh-100">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="documentModalLabel">Document Preview</h5>

            </div>
            <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                <iframe id="documentIframe" style="width: 100%; height: 100vh;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>


<!-- Modal for displaying the gov_entity document -->
<div class="modal fade" id="govEntityDocumentModal" tabindex="-1" role="dialog"
    aria-labelledby="govEntityDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="govEntityDocumentModalLabel">Tax Incentives Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed id="govEntityDocumentEmbed" src="" width="100%" height="500px"
                    type="application/pdf">
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
<script>
    function toggleCheckbox(otherCheckboxId, currentCheckbox) {
        const otherCheckbox = document.getElementById(otherCheckboxId);
        if (currentCheckbox.checked) {
            otherCheckbox.checked = false;
        }
    }

    function uncheckOthers(otherCheckboxIds, currentCheckbox) {
        otherCheckboxIds.forEach((checkboxId) => {
            document.getElementById(checkboxId).checked = false;
        });
    }

    function toggleNoOptions(noCheckbox, yesCheckboxId) {
        const yesCheckbox = document.getElementById(yesCheckboxId);
        if (noCheckbox.checked) {
            yesCheckbox.checked = false;
            disableTextInputs(['taxDeclarationInput', 'propertyIdInput']);
            enableNoOptions();
        } else {
            disableNoOptions();
        }
    }

    function toggleOthersText(checkbox) {
        const othersTextInput = document.getElementById('othersText');
        othersTextInput.disabled = !checkbox.checked;
    }

    function openModal(event, filePath) {
        event.preventDefault();
        const fullFilePath = `storage/${filePath}`;
        document.getElementById('documentIframe').src = fullFilePath;
        const modal = new bootstrap.Modal(document.getElementById('documentModal'));
        modal.show();
    }

    function toggleFileInputAndUncheck(fileInputId, checkbox, otherCheckboxId) {
        const fileInput = document.getElementById(fileInputId);
        const otherCheckbox = document.getElementById(otherCheckboxId);
        fileInput.disabled = !checkbox.checked;
        if (checkbox.checked) {
            otherCheckbox.checked = false;
        }
    }

    function checkOnlyOne(selectedCheckbox) {
        const checkboxes = document.querySelectorAll('input[name="business_activity"]');
        checkboxes.forEach((checkbox) => {
            if (checkbox !== selectedCheckbox) {
                checkbox.checked = false;
            }
        });
        const othersCheckbox = document.getElementById('othersCheckbox');
        const othersText = document.getElementById('othersText');
        othersText.disabled = !othersCheckbox.checked;
    }



    document.getElementById('municipality').addEventListener('change', function() {
        const selectedMunicipality = this.value;
        if (selectedMunicipality) {
            fetch('{{ route('getDataByMunicipality') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        municipality: selectedMunicipality
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const streetSelect = document.getElementById('street');
                    streetSelect.innerHTML = '<option value="" hidden>Select Street</option>';
                    streetSelect.innerHTML += '<option value="">None</option>';
                    data.streets.forEach(street => {
                        streetSelect.innerHTML +=
                            `<option value="${street.street}">${street.street}</option>`;
                    });

                    const barangaySelect = document.getElementById('barangay');
                    barangaySelect.innerHTML = '<option value="" hidden>Select Barangay</option>';
                    barangaySelect.innerHTML += '<option value="">None</option>';
                    data.barangays.forEach(barangay => {
                        barangaySelect.innerHTML +=
                            `<option value="${barangay.barangay}">${barangay.barangay}</option>`;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    });




    //estancia default
    fetch("{{ route('getStreetsAndBarangays') }}")
        .then(response => {
            if (!response.ok) {
                alert('Network response was not ok: ' + response.statusText);
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Populate streets dropdown
            const streetSelect = document.getElementById('streetSelect');
            data.streets.forEach(street => {
                const option = document.createElement('option');
                option.value = street.street;
                option.textContent = street.street;
                streetSelect.appendChild(option);
            });

            // Populate barangays dropdown
            const barangaySelect = document.getElementById('barangaySelect');
            data.barangays.forEach(barangay => {
                const option = document.createElement('option');
                option.value = barangay.barangay;
                option.textContent = barangay.barangay;
                barangaySelect.appendChild(option);
            });
        })
        .catch(error => {
            alert('Error fetching data: ' + error.message);
            console.error('Error fetching data:', error);
        });
</script>
