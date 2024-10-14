@extends('includes.layouts.app2')
@section('page-title', 'Dashboard')
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
                                    <form action="">
                                        <div class="card">
                                            <div class="text-center mt-4">
                                                <span style="font-size: 23px;">MUNICIPAL OF ESTANCIA</span><br>
                                                <span style="font-size: 23px; font-weight: 800;">UNIFIED APPLICATION FORM</span>
                                            </div>
                                            <div class="row mt-2 mt-5">
                                                <div class="col-md-5">
                                                    <table style="width: 70%; margin-left: 80px;" class="table table-bordered mt-4">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" name="type" type="checkbox"
                                                                            value="New" id="flexCheckNew"
                                                                            onclick="toggleCheckbox('flexCheckRenew', this)">
                                                                        <label class="form-check-label" for="flexCheckNew">
                                                                            NEW
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" name="type" type="checkbox"
                                                                            value="Renew" id="flexCheckRenew"
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
                                                                <td rowspan="2" style="width: 40%;">ADDITIONAL/ <br> CHANGE <br> kind/item
                                                                </td>
                                                                <td style="padding-left: 30px;">
                                                                    <input class="form-check-input" name="frequency" type="checkbox"
                                                                        value="Anually" id="flexCheckAnually"
                                                                        onclick="uncheckOthers(['flexCheckBiAnually', 'flexCheckQuarterly'], this)">
                                                                    Anually
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding-left: 30px;">
                                                                    <input class="form-check-input" name="frequency" type="checkbox"
                                                                        value="Bi-Anually" id="flexCheckBiAnually"
                                                                        onclick="uncheckOthers(['flexCheckAnually', 'flexCheckQuarterly'], this)">
                                                                    Bi-annually
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>CHANGE biz address</td>
                                                                <td style="padding-left: 30px;">
                                                                    <input class="form-check-input" name="frequency" type="checkbox"
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
                                                    <div class="text-end" style="right: 0; margin-top: 20px; padding-left: 120px;">
                                                        <span><i>(Do Not Fill-out-For BPLO use)</i></span><br>
                                                        <span>Date of Receipt: <input type="text" style="width: 50% !important;"></span><br>
                                                        <span>Tracking Number:<input type="text" style="width: 45% !important;"></span>
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
                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="flexCheckSoleProprietorship1"
                                                                                onclick="uncheckOthers(['flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCorporation', 'flexCheckCooperative'], this)">
                                                                            <b> Sole Proprietorship</b>&nbsp;&nbsp;&nbsp;

                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="flexCheckSoleProprietorship2"
                                                                                onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckPartnership', 'flexCheckCorporation', 'flexCheckCooperative'], this)">
                                                                            <b> Sole Proprietorship</b>&nbsp;&nbsp;&nbsp;

                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="flexCheckPartnership"
                                                                                onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckCorporation', 'flexCheckCooperative'], this)">
                                                                            <b> Partnership</b>&nbsp;&nbsp;&nbsp;

                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="flexCheckCorporation"
                                                                                onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCooperative'], this)">
                                                                            <b> Corporation</b>&nbsp;&nbsp;&nbsp;

                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="flexCheckCooperative"
                                                                                onclick="uncheckOthers(['flexCheckSoleProprietorship1', 'flexCheckSoleProprietorship2', 'flexCheckPartnership', 'flexCheckCorporation'], this)">
                                                                            <b> Cooperative</b>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered mt-4">
                                                            <tr>
                                                                <td class="text-center">
                                                                    <b>DTI/SEC/CDA Registration Number:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td class="text-center">
                                                                    <b>Tax Identification Number (TIN):</b>
                                                                    <input type="text">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-bordered mt-4">
                                                            <tr>
                                                                <td class="">
                                                                    <b>Business / Trade Name</b>: (For Sole proprietor) or <br>
                                                                    <b>Corporate Name:</b> (For Coop; Corp; Partnership)

                                                                    <input type="text">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Fanchise Name:</b> (If applicable)
                                                                    <input type="text">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td rowspan=2">
                                                                    <b>Name Address/Main Office Address:</b>
                                                                </td>
                                                                <td>
                                                                    <span>Bldg. No. <input type="text"></span>
                                                                </td>
                                                                <td colspan="3">
                                                                    <span>Name of Bldg. <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Lot No. <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Block no. <input type="text"></span>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Street <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Barangay <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Subdivision <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>City/ Municipality <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Province <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Zip Code <input type="text"></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-bordered mt-3">
                                                            <tr>
                                                                <td>
                                                                    <b>Telephone No.:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                <b>Tel. No./Mobile </b><br> <input value="+63"
                                                                                    disabled class="text-dark"
                                                                                    style="width:55px;margin-right:5px; border: none; border-bottom: 1px solid black;"><input
                                                                                    name="business_Tel_No_Mobile" pattern="[0-9]{10}"
                                                                                    placeholder="Enter 10-digit number" type="number"
                                                                                    required"
                                                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                                    type = "number" maxlength = "10"
                                                                                    style=" border: none; border-bottom: 1px solid black; width: 80% !important;">
                                                                </td>
                                                                <td>
                                                                    <b>Email Address</b>
                                                                    <input type="text">
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
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                    <b>First Name:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                    <b>Middle Name:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                    <b>Suffix:</b>
                                                                    <input type="text">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 18%;">
                                                                    <b>Name of Pres./ OIC:</b><br>
                                                                    (For Corporations/ Cooperative/ Partnerships)
                                                                </td>
                                                                <td>
                                                                    <b>Last Name:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                    <b>First Name:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                    <b>Middle Name:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td>
                                                                    <b>Suffix:</b>
                                                                    <input type="text">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="5">
                                                                    <b>For Corporation:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" class="form-check-input"><b>
                                                                        Filipino</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" class="form-check-input"><b> Foreign</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>In case of emergency,</b>
                                                                </td>
                                                                <td colspan="2">
                                                                    <b>Name of Contact Person:</b>
                                                                    <input type="text">
                                                                </td>
                                                                <td colspan="2">
                                                                    <b>Contact No.: </b><br> <input value="+63"
                                                                    disabled class="text-dark"
                                                                    style="width:55px;margin-right:5px; border: none; border-bottom: 1px solid black;"><input
                                                                    name="business_Tel_No_Mobile" pattern="[0-9]{10}"
                                                                    placeholder="Enter 10-digit number" type="number"
                                                                    required"
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
                                                                    <input type="text">
                                                                </td>
                                                                <td colspan="2">
                                                                    <b>Total No. of employees in establishment:</b><br>
                                                                    <span><input type="text" style="width: 20% !important;">Male</span>
                                                                    <span><input type="text" style="width: 20% !important;">Female</span>
                                                                </td>
                                                                <td>
                                                                    <b>No. of Employees residing within Estancia, Iloilo </b>
                                                                    <input type="text">
                                                                </td>
                                                                <td colspan="2">
                                                                    <b>No. of Delivery Vehicles </b>(if applicable) <br>
                                                                    <span><input type="text"
                                                                            style="width: 20% !important;">Van/Truck</span>
                                                                    <span><input type="text"
                                                                            style="width: 20% !important;">Motorcycle</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <span><b><input type="checkbox" class="form-check-input"> Same as Home
                                                                            Address/ Main Office Address.</b>(if same as Home/ Main Office
                                                                        Address, DO NOT FILL-UP bellow)</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2" style="width: 15%;">
                                                                    <b>Business Location Address:</b>
                                                                </td>
                                                                <td>
                                                                    <span>Bldg. No. <input type="text"></span>
                                                                </td>
                                                                <td colspan="3">
                                                                    <span>Name of Bldg. <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Lot No. <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Block no. <input type="text"></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Street <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Barangay <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Subdivision <input type="text"></span>
                                                                </td>
                                                                <td>
                                                                    <span>City/ Municipality <input type="text" value="ESTANCIA"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Province <input type="text" value="ILOILO"></span>
                                                                </td>
                                                                <td>
                                                                    <span>Zip Code <input type="text" value="5017"></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <!-- Yes section -->
                                                                    <span>Business Location, Owned?
                                                                        <input type="checkbox" id="yesBusinessLocation"
                                                                            onclick="toggleTextInputs(this, ['taxDeclarationInput', 'propertyIdInput'], 'noBusinessLocation')">
                                                                        Yes, if Yes, Tax Declaration
                                                                        <input type="text" id="taxDeclarationInput"
                                                                            style="width: 27% !important;" disabled>
                                                                        or Property ID No.
                                                                        <input type="text" id="propertyIdInput"
                                                                            style="width: 27% !important;" disabled>
                                                                    </span>
                                                                    <br>

                                                                    <!-- No section -->
                                                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="noBusinessLocation"
                                                                            onclick="toggleNoOptions(this, 'yesBusinessLocation')"> No, If No
                                                                        please present any of the following:
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <input type="checkbox" class="form-check-input" id="leaseCheckbox"
                                                                            disabled> Contract of lease
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <input type="checkbox" class="form-check-input" id="moaCheckbox"
                                                                            disabled> MOA
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <input type="checkbox" class="form-check-input" id="consentCheckbox"
                                                                            disabled> Written consent of owner
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <span>
                                                                        <b>Do you have tax incentives from any Government Entity?</b>
                                                                        <span>
                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="yesTaxIncentives"
                                                                                onclick="toggleFileInputAndUncheck('certificateFileInput', this, 'noTaxIncentives')">
                                                                            Yes (please attach a softcopy of your Certificate)

                                                                            <input type="file" id="certificateFileInput" disabled>

                                                                            <input type="checkbox" class="form-check-input"
                                                                                id="noTaxIncentives"
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
                                                                    <input type="checkbox" class="form-check-input w-10"
                                                                        id="mainBusinessCheckbox" onclick="checkOnlyOne2(this)"> Main
                                                                    Business/ Office
                                                                </td>
                                                                <td>
                                                                    <input type="checkbox" class="form-check-input" id="branchOfficeCheckbox"
                                                                        onclick="checkOnlyOne2(this)"> Branch Office
                                                                </td>
                                                                <td>
                                                                    <input type="checkbox" class="form-check-input" id="adminOfficeCheckbox"
                                                                        onclick="checkOnlyOne2(this)"> Admin. Office Only
                                                                </td>
                                                                <td>
                                                                    <input type="checkbox" class="form-check-input" id="warehouseCheckbox"
                                                                        onclick="checkOnlyOne2(this)"> Warehouse
                                                                </td>
                                                                <td>
                                                                    <input type="checkbox" class="form-check-input" id="othersCheckbox"
                                                                        onclick="checkOnlyOne2(this)"> Others. Please specify:
                                                                    <br>
                                                                    <input type="text" id="othersText" disabled>
                                                                </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                <th colspan="2">
                                                                    Line of Business
                                                                </th>
                                                                <td colspan="2">
                                                                    Philippines Standard Industrial Code <br>
                                                                    (PSIC), If available
                                                                </td>
                                                                <th colspan="2">
                                                                    Product/ Services
                                                                </th>
                                                                <th>
                                                                    No. of Units
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td>
                                                                    <input type="text" value="test">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td>
                                                                    <input type="text" value="test">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td colspan="2">
                                                                    <input type="text" value="test">
                                                                </td>
                                                                <td>
                                                                    <input type="text" value="test">
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
                                    </form>
                                </div>
                            </section>
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
