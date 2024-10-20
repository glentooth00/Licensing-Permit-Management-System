<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Licensing Permit </title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

</head>

<body style="background-color: #B9D9EB;">

    <section class="mt-5">
        <div class="container">
            <a href="/" class="btn btn-secondary btn-sm " style="width: 10%;"> Back </a>
            <br> <br>
            <form action="{{ route('business_registration.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="text-center mt-4">
                        <span class="fs-5">MUNICIPAL OF ESTANCIA</span><br>
                        <span class="fw-bold fs-5">UNIFIED APPLICATION FORM</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-5">
                            <table style="width: 50%; margin-left: 80px;" class="table table-bordered mt-4">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" name="business_application"
                                                    type="checkbox" value="New" id="flexCheckNew"
                                                    onclick="toggleCheckbox('flexCheckRenew', this)">
                                                <label class="form-check-label" for="flexCheckNew">
                                                    NEW
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" name="business_application"
                                                    type="checkbox" value="Renew" id="flexCheckRenew"
                                                    onclick="toggleCheckbox('flexCheckNew', this)">
                                                <label class="form-check-label" for="flexCheckRenew">
                                                    RENEW
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            Mode of Payment
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="2" style="width: 2%;">ADDITIONAL/ <br> CHANGE <br> kind/item
                                        </td>
                                        <td>
                                            <input class="form-check-input" name="mode_of_payment" type="checkbox"
                                                value="Anually" id="flexCheckAnually"
                                                onclick="uncheckOthers(['flexCheckBiAnually', 'flexCheckQuarterly'], this)">
                                            Anually
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input" name="mode_of_payment" type="checkbox"
                                                value="Bi-Anually" id="flexCheckBiAnually"
                                                onclick="uncheckOthers(['flexCheckAnually', 'flexCheckQuarterly'], this)">
                                            Bi-annually
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CHANGE biz address</td>
                                        <td>
                                            <input class="form-check-input" name="mode_of_payment" type="checkbox"
                                                value="Quarterly" id="flexCheckQuarterly"
                                                onclick="uncheckOthers(['flexCheckAnually', 'flexCheckBiAnually'], this)">
                                            Quarterly
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="text-end" style="right: 0; margin-top: 20px;">
                                <span><i>(Do Not Fill-out-For BPLO use)</i></span><br>
                                <span>Date of Receipt: <input type="text" style="width: 20% !important;"></span><br>
                                <span>Tracking Number:<input type="text" style="width: 18% !important;"></span>
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
                                                <span class="w-5">
                                                    <input type="checkbox" name="business_type"
                                                        value="Sole Proprietorship" class="form-check-input"
                                                        id="flexCheckSoleProprietorship1"
                                                        onclick="uncheckOthers(['flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCorporation', 'flexCheckCooperative'], this)">
                                                    <b>Sole Proprietorship</b>&nbsp;&nbsp;&nbsp;

                                                    <input type="checkbox" name="business_type" class="form-check-input"
                                                        id="flexCheckSoleProprietorship2" value="One Person Corporation"
                                                        onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckPartnership', 'flexCheckCorporation', 'flexCheckCooperative'], this)">
                                                    <b>One Person Corporation</b>&nbsp;&nbsp;&nbsp;

                                                    <input type="checkbox" name="business_type" class="form-check-input"
                                                        id="flexCheckPartnership" value="Partnership"
                                                        onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckCorporation', 'flexCheckCooperative'], this)">
                                                    <b>Partnership</b>&nbsp;&nbsp;&nbsp;

                                                    <input type="checkbox" name="business_type"
                                                        class="form-check-input" id="flexCheckCorporation"
                                                        value="Corporation"
                                                        onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCooperative'], this)">
                                                    <b>Corporation</b>&nbsp;&nbsp;&nbsp;

                                                    <input type="checkbox" name="business_type"
                                                        class="form-check-input" id="flexCheckCooperative"
                                                        value= "Cooperative"
                                                        onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCorporation'], this)">
                                                    <b>Cooperative</b>
                                                </span>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <td class="text-center">
                                            <b>DTI/SEC/CDA Registration Number:</b>
                                            <input type="text" name="DTI_SEC_CDA_registration_No">
                                        </td>
                                        <td class="text-center">
                                            <b>Tax Identification Number (TIN):</b>
                                            <input type="text" name="TIN">
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <td class="">
                                            <b>Business / Trade Name</b>: (For Sole proprietor) or <br>
                                            <b>Corporate Name:</b> (For Coop; Corp; Partnership)

                                            <input type="text" name="business_name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Fanchise Name:</b> (If applicable)
                                            <input type="text" name="franchise">
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered">
                                    <tr>
                                        <td rowspan=2">
                                            <b>Name Address/Main Office Address:</b>
                                        </td>
                                        <td>
                                            <span>Bldg. No. <input type="text" name="building_no"></span>
                                        </td>
                                        <td colspan="3">
                                            <span>Name of Bldg. <input type="text"
                                                    name="business_building_name"></span>
                                        </td>
                                        <td>
                                            <span>Lot No. <input type="text" name="lot_number"></span>
                                        </td>
                                        <td>
                                            <span>Block no. <input type="text" name="block_no"></span>
                                        </td>

                                    </tr>
                                    <tr>


                                        <td>
                                            <span>
                                                <label for="street">City/Municipality</label>
                                                <select class="form-select" name="city_municipality"
                                                    id="municipality">
                                                    <option value="" hidden>Select Municipality</option>
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
                                                <select class="form-select" name="street" id="street">
                                                    <option value="" hidden>Select Street</option>
                                                    <option value="">None</option> <!-- None option -->
                                                </select>
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <label for="barangay">Select Barangay</label>
                                                <select class="form-select" name="barangay" id="barangay">
                                                    <option value="" hidden>Select Barangay</option>
                                                    <option value="">None</option> <!-- None option -->
                                                </select>
                                        </td>



                                        <td>
                                            <span>Subdivision <input type="text" name="subdivision"></span>
                                        </td>

                                        <td>
                                            <span>Province <input type="text" name="province"></span>
                                        </td>
                                        <td>
                                            <span>Zip Code <input type="text" name="zip_code"></span>
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        <td>
                                            <b>Telephone No.:</b>
                                            <input type="text" name="telephone_no">
                                        </td>
                                        <td>
                                            <b>Mobile no. </b><br> <input value="+63" disabled class="text-dark"
                                                style="width:55px;margin-right:5px; border: none; border-bottom: 1px solid black;"><input
                                                name="mobile_no" pattern="[0-9]{10}"
                                                placeholder="Enter 10-digit number" type="number" required"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                type = "number" maxlength = "10" name="mobile_no"
                                                style=" border: none; border-bottom: 1px solid black; width: 80% !important;">
                                        </td>
                                        <td>
                                            <b>Email Address</b>
                                            <input type="text" name="email_address">
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 18%;">
                                            <b>Name of Owner:</b><br>
                                            (For Sole Proprietorship)
                                        </td>
                                        <td>
                                            <b>Last Name:</b>
                                            <input type="text" name="owner_last_name">
                                        </td>
                                        <td>
                                            <b>First Name:</b>
                                            <input type="text" name="owner_first_name">
                                        </td>
                                        <td>
                                            <b>Middle Name:</b>
                                            <input type="text" name="owner_middle_name">
                                        </td>
                                        <td>
                                            <b>Suffix:</b>
                                            <input type="text" name="owner_suffix">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 18%;">
                                            <b>Name of Pres./ OIC:</b><br>
                                            (For Corporations/ Cooperative/ Partnerships)
                                        </td>
                                        <td>
                                            <b>Last Name:</b>
                                            <input type="text" name="pres_last_name">
                                        </td>
                                        <td>
                                            <b>First Name:</b>
                                            <input type="text" name="pres_first_name">
                                        </td>
                                        <td>
                                            <b>Middle Name:</b>
                                            <input type="text" name="pres_middle_name">
                                        </td>
                                        <td>
                                            <b>Suffix:</b>
                                            <input type="text" name="pres_suffix">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <b>For Corporation:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="corp_type" value="Filipino"
                                                class="form-check-input"><b>
                                                Filipino</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="corp_type" value="Foreign"
                                                class="form-check-input"><b>
                                                Foreign</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>In case of emergency,</b>
                                        </td>
                                        <td colspan="2">
                                            <b>Name of Contact Person:</b>
                                            <input type="text" name="emergency_contact_name">
                                        </td>
                                        <td colspan="2">
                                            <b>Contact No.: </b><br> <input value="+63" disabled class="text-dark"
                                                style="width:55px;margin-right:5px; border: none; border-bottom: 1px solid black;"><input
                                                name="emergency_contact_no" pattern="[0-9]{10}"
                                                placeholder="Enter 10-digit number" type="number"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                type = "number" maxlength = "10"
                                                style=" border: none; border-bottom: 1px solid black; width: 80% !important;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5">
                                            <p><i>***Write OLD address if CHANGE of Business address/ Write old kind/
                                                    item if change of item/ kind:</i></p>
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
                                            <input type="text" name="business_area">
                                        </td>
                                        <td colspan="2">
                                            <b>Total No. of employees in establishment:</b><br>
                                            <span><input type="text" name="total_employees_male"
                                                    style="width: 20% !important;">Male</span>
                                            <span><input type="text" name="total_employees_female"
                                                    style="width: 20% !important;">Female</span>
                                        </td>
                                        <td>
                                            <b>No. of Employees residing within Estancia, Iloilo </b>
                                            <input type="text" name="employees_residing_estancia">
                                        </td>
                                        <td colspan="2">
                                            <b>No. of Delivery Vehicles </b>(if applicable) <br>
                                            <span><input type="text" style="width: 20% !important;"
                                                    name="delivery_vehicles_van_truck">Van/Truck</span>
                                            <span><input type="text" style="width: 20% !important;"
                                                    name="delivery_vehicles_motorcycle">Motorcycle</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <span><b><input type="checkbox" class="form-check-input"> Same
                                                    as Home
                                                    Address/ Main Office Address.</b>(if same as Home/ Main
                                                Office
                                                Address, DO NOT FILL-UP bellow)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" style="width: 15%;">
                                            <b>Business Location Address:</b>
                                        </td>
                                        <td>
                                            <span>Bldg. No. <input type="text" name="building_no2"></span>
                                        </td>
                                        <td colspan="3">
                                            <span>Name of Bldg. <input type="text"
                                                    name="business_building_name2"></span>
                                        </td>
                                        <td>
                                            <span>Lot No. <input type="text" name="lot_number2"></span>
                                        </td>
                                        <td>
                                            <span>Block no. <input type="text" name="block_no2"></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>Street
                                                <select name="street2" id="streetSelect" class="form-select">
                                                    <option value="" hidden>Select Street</option>
                                                    <option value="">None</option>
                                                </select>
                                            </span>
                                        </td>

                                        <td>
                                            <span>Barangay
                                                <select name="barangay2" id="barangaySelect" class="form-select">
                                                    <option value="" hidden>Select Barangay</option>
                                                    <option value="">None</option>
                                                </select>
                                            </span>
                                        </td>
                                        <td>
                                            <span>Subdivision <input type="text" name="subdivision2"></span>
                                        </td>
                                        <td>
                                            <span>City/ Municipality
                                                <input type="text" name="city_municipality2" value="ESTANCIA"
                                                    id="cityMunicipality" readonly>
                                            </span>
                                        </td>
                                        <td>
                                            <span>Province <input type="text" name="province2"
                                                    value="ILOILO"></span>
                                        </td>
                                        <td>
                                            <span>Zip Code <input type="text" name="zip_code2"
                                                    value="5017"></span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="7">
                                            <!-- Yes section -->
                                            <span>
                                                Business Location, Owned?
                                                <input type="checkbox" id="yesBusinessLocation"
                                                    onclick="toggleTextInputs(this, ['taxDeclarationInput', 'propertyIdInput'], 'noBusinessLocation')">
                                                Yes, if Yes, Tax Declaration
                                                <input type="file" id="taxDeclarationInput" name="tax_declaration"
                                                    style="width: 27% !important;" value="tax_declaration.pdf"
                                                    disabled>
                                                <!-- Display file name -->
                                                or Property ID No.
                                                <input type="text" id="propertyIdInput" name="property_id"
                                                    style="width: 27% !important;" disabled>
                                            </span>
                                            <br>

                                            <!-- No section -->
                                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" class="form-check-input"
                                                    id="noBusinessLocation"
                                                    onclick="toggleNoOptions(this, 'yesBusinessLocation')">
                                                No, If No please present any of the following:
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="requirement" value="Contract of lease"
                                                    class="form-check-input" id="leaseCheckbox" disabled> Contract of
                                                lease
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="requirement" value="MOA"
                                                    class="form-check-input" id="moaCheckbox" disabled> MOA
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="requirement"
                                                    value="Written consent of owner" class="form-check-input"
                                                    id="consentCheckbox" disabled> Written consent of owner
                                            </span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="7">
                                            <span>
                                                <b>Do you have tax incentives from any Government
                                                    Entity?&nbsp;&nbsp;&nbsp;&nbsp; </b>
                                                <span>
                                                    <input type="checkbox" class="form-check-input"
                                                        id="yesTaxIncentives"
                                                        onclick="toggleFileInputAndUncheck('certificateFileInput', this, 'noTaxIncentives')">
                                                    Yes (please attach a softcopy of your Certificate)

                                                    <input type="file" id="certificateFileInput"
                                                        name="gov_entity_file" disabled>

                                                    <input type="checkbox" name="gov_entity" value="None"
                                                        class="form-check-input" id="noTaxIncentives"
                                                        onclick="disableFileInputAndUncheck('certificateFileInput', 'yesTaxIncentives')">
                                                    No
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
                                                class="form-check-input w-10" id="mainBusinessCheckbox"
                                                onclick="checkOnlyOne2(this)"
                                                value="Main
                                            Business/ Office">
                                            Main
                                            Business/ Office
                                        </td>
                                        <td>
                                            <input type="checkbox" name="business_activity" class="form-check-input"
                                                id="branchOfficeCheckbox" onclick="checkOnlyOne2(this)"
                                                value="Branch Office">
                                            Branch Office
                                        </td>
                                        <td>
                                            <input type="checkbox" name="business_activity" class="form-check-input"
                                                id="adminOfficeCheckbox" onclick="checkOnlyOne2(this)"
                                                value="Admin. Office">
                                            Admin. Office
                                            Only
                                        </td>
                                        <td>
                                            <input type="checkbox" name="business_activity" class="form-check-input"
                                                id="warehouseCheckbox" onclick="checkOnlyOne2(this)"
                                                value="Warehouse"> Warehouse
                                        </td>
                                        <td>
                                            <input type="checkbox" name="business_activity" class="form-check-input"
                                                id="othersCheckbox" onclick="checkOnlyOne2(this)"> Others. Please
                                            specify:
                                            <br>
                                            <input type="text" id="othersText" name="others" disabled>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <th colspan="2">Line of Business</th>
                                        <td colspan="2">Philippines Standard Industrial Code (PSIC), If
                                            available
                                        </td>
                                        <th colspan="2">Product/ Services</th>
                                        <th>No. of Units</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" name="line_of_business[]">
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="PSIC[]">
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="product_services[]">
                                        </td>
                                        <td>
                                            <input type="text" name="no_of_units[]">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" name="line_of_business[]">
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="PSIC[]">
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="product_services[]">
                                        </td>
                                        <td>
                                            <input type="text" name="no_of_units[]">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" name="line_of_business[]">
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="PSIC[]">
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="product_services[]">
                                        </td>
                                        <td>
                                            <input type="text" name="no_of_units[]">
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
                                <div style="display: flex; align-items: flex-start; margin-bottom: 1rem;">
                                    <!-- Checkbox beside the declaration -->
                                    <input class="form-check-input" type="checkbox" id="agreeCheckbox"
                                        style="margin-right: 10px; width: 20px; height: 20px;"
                                        onclick="toggleSubmitButton()">

                                    <!-- Declaration message -->
                                    <span style="flex: 1;">
                                        <p>
                                            I DECLARE UNDER PENALTY OF PERJURY that all information in this application
                                            is
                                            true and correct based on my personal knowledge and authentic records
                                            submitted
                                            to the Business Permits Licensing Office. Any false or misleading
                                            information
                                            supplied, or production of fake/falsified documents shall be grounds for
                                            appropriate
                                            legal action against me and automatically revoke the permit. I hereby agree
                                            that
                                            all personal data (as defined under the Data Privacy Law and its
                                            Implementing Rules
                                            and Regulations) and account transaction information or records with the
                                            Municipal
                                            Government may be processed, profiled, or shared with requesting parties, or
                                            for the purpose of any court, legal process, examination, inquiry, and audit
                                            or
                                            investigation by any authority.
                                        </p>
                                    </span>
                                </div>

                                <!-- Submit button at the bottom left -->
                                <div style="text-align: left;" class="float-end">
                                    <button type="submit" id="submitButton" class="btn btn-success btn-lg" disabled
                                        onclick="return showSubmissionMessage()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Function to toggle submit button based on checkbox status
    function toggleSubmitButton() {
        const checkbox = document.getElementById('agreeCheckbox');
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = !checkbox.checked; // Enable if checkbox is checked
    }

    // Function to show a message when the submit button is clicked
    function showSubmissionMessage() {
        alert('Form is being submitted. Thank you for agreeing to the declaration!');
        return true; // Allow form submission
    }




    // Uncheck other checkboxes when one is selected
    function uncheckOthers(otherCheckboxIds, currentCheckbox) {
        otherCheckboxIds.forEach(function(otherCheckboxId) {
            var otherCheckbox = document.getElementById(otherCheckboxId);
            if (currentCheckbox.checked) {
                otherCheckbox.checked = false;
            }
        });
    }

    // Toggle the file input based on the "Yes" checkbox and uncheck "No" checkbox
    function toggleFileInputAndUncheck(fileInputId, yesCheckbox, noCheckboxId) {
        var fileInput = document.getElementById(fileInputId);
        var noCheckbox = document.getElementById(noCheckboxId);

        // Enable the file input if "Yes" is checked, disable otherwise
        fileInput.disabled = !yesCheckbox.checked;

        // Uncheck "No" if "Yes" is checked
        if (yesCheckbox.checked) {
            noCheckbox.checked = false;
        }
    }

    // Disable file input and uncheck "Yes" checkbox when "No" checkbox is selected
    function disableFileInputAndUncheck(fileInputId, yesCheckboxId) {
        var fileInput = document.getElementById(fileInputId);
        var yesCheckbox = document.getElementById(yesCheckboxId);

        // Disable the file input and uncheck "Yes"
        fileInput.disabled = true;
        fileInput.value = ''; // Clear the file input
        yesCheckbox.checked = false;
    }

    // Toggle text inputs when "Yes" checkbox is checked and uncheck "No"
    function toggleTextInputs(yesCheckbox, textInputIds, noCheckboxId) {
        var noCheckbox = document.getElementById(noCheckboxId);

        textInputIds.forEach(function(inputId) {
            var textInput = document.getElementById(inputId);
            textInput.disabled = !yesCheckbox.checked; // Enable/Disable text inputs
        });

        // Uncheck "No" checkbox when "Yes" is checked
        if (yesCheckbox.checked) {
            noCheckbox.checked = false;
            disableNoOptions(); // Disable "No" options
        }
    }

    // Toggle "No" options and disable text inputs if "No" is checked
    function toggleNoOptions(noCheckbox, yesCheckboxId) {
        var yesCheckbox = document.getElementById(yesCheckboxId);

        if (noCheckbox.checked) {
            yesCheckbox.checked = false; // Uncheck "Yes"
            disableTextInputs(['taxDeclarationInput', 'propertyIdInput']); // Disable text inputs
            enableNoOptions(); // Enable "No" options
        } else {
            disableNoOptions(); // Disable "No" options
        }
    }

    // Disable a list of text inputs
    function disableTextInputs(textInputIds) {
        textInputIds.forEach(function(inputId) {
            var textInput = document.getElementById(inputId);
            textInput.disabled = true;
        });
    }

    // Enable "No" options like checkboxes
    function enableNoOptions() {
        document.getElementById('leaseCheckbox').disabled = false;
        document.getElementById('moaCheckbox').disabled = false;
        document.getElementById('consentCheckbox').disabled = false;
    }

    // Disable "No" options like checkboxes
    function disableNoOptions() {
        document.getElementById('leaseCheckbox').disabled = true;
        document.getElementById('moaCheckbox').disabled = true;
        document.getElementById('consentCheckbox').disabled = true;
    }

    // Check only one checkbox at a time in the "Business Activity" section
    function checkOnlyOne2(selectedCheckbox) {
        var checkboxes = document.querySelectorAll(
            '#mainBusinessCheckbox, #branchOfficeCheckbox, #adminOfficeCheckbox, #warehouseCheckbox, #othersCheckbox'
        );

        // Uncheck all checkboxes except the one clicked
        checkboxes.forEach(function(checkbox) {
            if (checkbox !== selectedCheckbox) {
                checkbox.checked = false;
            }
        });

        // Special handling for the "Others" checkbox
        var othersText = document.getElementById('othersText');
        if (selectedCheckbox.id === 'othersCheckbox') {
            othersText.disabled = !selectedCheckbox.checked; // Enable/disable text input
            if (!selectedCheckbox.checked) {
                othersText.value = ''; // Clear the text input when unchecked
            }
        } else {
            // Disable and clear the text input if any other checkbox is selected
            othersText.disabled = true;
            othersText.value = '';
        }
    }





    document.getElementById('municipality').addEventListener('change', function() {
        var selectedMunicipality = this.value;

        if (selectedMunicipality) {
            // Send AJAX request
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
                    // Populate streets dropdown
                    var streetSelect = document.getElementById('street');
                    streetSelect.innerHTML = '<option value="" hidden>Select Street</option>';
                    streetSelect.innerHTML += '<option value="">None</option>'; // Add None option
                    data.streets.forEach(function(street) {
                        streetSelect.innerHTML += '<option value="' + street.street + '">' + street
                            .street + '</option>';
                    });

                    // Populate barangays dropdown
                    var barangaySelect = document.getElementById('barangay');
                    barangaySelect.innerHTML = '<option value="" hidden>Select Barangay</option>';
                    barangaySelect.innerHTML += '<option value="">None</option>'; // Add None option
                    data.barangays.forEach(function(barangay) {
                        barangaySelect.innerHTML += '<option value="' + barangay.barangay + '">' +
                            barangay.barangay + '</option>';
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    });


    //estancia default

    $(document).ready(function() {
        // AJAX call to get streets and barangays
        var municipality = $('#cityMunicipality').val();
        $.ajax({
            url: '/get-location-data', // Your route URL
            method: 'GET',
            data: {
                city_municipality: municipality
            },
            success: function(response) {
                var streets = response.streets;
                var barangays = response.barangays;

                // Populate street select options
                $('#streetSelect').empty().append(
                    '<option value="" hidden>Select Street</option><option value="">None</option>'
                );
                $.each(streets, function(key, street) {
                    $('#streetSelect').append('<option value="' + street + '">' + street +
                        '</option>');
                });

                // Populate barangay select options
                $('#barangaySelect').empty().append(
                    '<option value="" hidden>Select Barangay</option><option value="">None</option>'
                );
                $.each(barangays, function(key, barangay) {
                    $('#barangaySelect').append('<option value="' + barangay + '">' +
                        barangay + '</option>');
                });
            },
            error: function() {
                alert('Unable to fetch location data');
            }
        });
    });
</script>
