<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Licensing Permit </title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>

<body style="background-color: #B9D9EB;">

    <section class="mt-5">
        <div class="container">
            <a href="/" class="btn btn-secondary btn-sm " style="width: 10%;"> Back </a>
            <br> <br>
            <form action="">
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
                                        <td rowspan="2" style="width: 2%;">ADDITIONAL/ <br> CHANGE <br> kind/item
                                        </td>
                                        <td>
                                            <input class="form-check-input" name="frequency" type="checkbox"
                                                value="Anually" id="flexCheckAnually"
                                                onclick="uncheckOthers(['flexCheckBiAnually', 'flexCheckQuarterly'], this)">
                                            Anually
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input" name="frequency" type="checkbox"
                                                value="Bi-Anually" id="flexCheckBiAnually"
                                                onclick="uncheckOthers(['flexCheckAnually', 'flexCheckQuarterly'], this)">
                                            Bi-annually
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CHANGE biz address</td>
                                        <td>
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
                                            <b>Mobile No.:</b>
                                            <input type="text">
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
                                            <b>Contact No.:</b>
                                            <input type="text">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
<script>
    function uncheckOthers(otherCheckboxIds, currentCheckbox) {
        otherCheckboxIds.forEach(function(otherCheckboxId) {
            var otherCheckbox = document.getElementById(otherCheckboxId);
            if (currentCheckbox.checked) {
                otherCheckbox.checked = false;
            }
        });
    }

    function toggleCheckbox(otherCheckboxId, currentCheckbox) {
        var otherCheckbox = document.getElementById(otherCheckboxId);

        if (currentCheckbox.checked) {
            otherCheckbox.checked = false;
        }
    }

    function uncheckOthers(otherCheckboxIds, currentCheckbox) {
        otherCheckboxIds.forEach(function(otherCheckboxId) {
            var otherCheckbox = document.getElementById(otherCheckboxId);
            if (currentCheckbox.checked) {
                otherCheckbox.checked = false;
            }
        });
    }

    function toggleFileInputAndUncheck(fileInputId, yesCheckbox, noCheckboxId) {
        var fileInput = document.getElementById(fileInputId);
        var noCheckbox = document.getElementById(noCheckboxId);

        // Enable the file input if the "Yes" checkbox is checked, disable it if unchecked
        fileInput.disabled = !yesCheckbox.checked;

        // Uncheck the "No" checkbox if "Yes" is checked
        if (yesCheckbox.checked) {
            noCheckbox.checked = false;
        }
    }

    function disableFileInputAndUncheck(fileInputId, yesCheckboxId) {
        var fileInput = document.getElementById(fileInputId);
        var yesCheckbox = document.getElementById(yesCheckboxId);

        // Disable the file input
        fileInput.disabled = true;

        // Uncheck the "Yes" checkbox when "No" is checked
        yesCheckbox.checked = false;
    }

    function toggleTextInputs(yesCheckbox, textInputIds, noCheckboxId) {
        var noCheckbox = document.getElementById(noCheckboxId);

        // Enable or disable text inputs based on "Yes" checkbox status
        textInputIds.forEach(function(inputId) {
            var textInput = document.getElementById(inputId);
            textInput.disabled = !yesCheckbox.checked;
        });

        // If "Yes" is checked, uncheck the "No" checkbox and disable the related options
        if (yesCheckbox.checked) {
            noCheckbox.checked = false;
            disableNoOptions();
        }
    }

    function toggleNoOptions(noCheckbox, yesCheckboxId) {
        var yesCheckbox = document.getElementById(yesCheckboxId);

        // If "No" is checked, uncheck "Yes" and enable the related options
        if (noCheckbox.checked) {
            yesCheckbox.checked = false;
            disableTextInputs(['taxDeclarationInput', 'propertyIdInput']);
            enableNoOptions();
        } else {
            disableNoOptions();
        }
    }

    function disableTextInputs(textInputIds) {
        textInputIds.forEach(function(inputId) {
            var textInput = document.getElementById(inputId);
            textInput.disabled = true;
        });
    }

    function enableNoOptions() {
        document.getElementById('leaseCheckbox').disabled = false;
        document.getElementById('moaCheckbox').disabled = false;
        document.getElementById('consentCheckbox').disabled = false;
    }

    function disableNoOptions() {
        document.getElementById('leaseCheckbox').disabled = true;
        document.getElementById('moaCheckbox').disabled = true;
        document.getElementById('consentCheckbox').disabled = true;
    }

    function checkOnlyOne2(selectedCheckbox) {
        // Get all checkboxes
        var checkboxes = document.querySelectorAll('.form-check-input');

        // Loop through and uncheck others
        checkboxes.forEach(function(checkbox) {
            if (checkbox !== selectedCheckbox) {
                checkbox.checked = false;
            }
        });

        // Enable or disable the text input if "Others" is checked
        var othersText = document.getElementById('othersText');
        if (document.getElementById('othersCheckbox').checked) {
            othersText.disabled = false;
        } else {
            othersText.disabled = true;
            othersText.value = ''; // Clear text input if unchecked
        }
    }

    function checkOnlyOne2(checkbox) {
        // Get all checkboxes in the "Business Activity" section
        var checkboxes = document.querySelectorAll(
            '#mainBusinessCheckbox, #branchOfficeCheckbox, #adminOfficeCheckbox, #warehouseCheckbox, #othersCheckbox'
        );

        // Uncheck all checkboxes except the one clicked
        checkboxes.forEach(function(item) {
            if (item !== checkbox) {
                item.checked = false;
            }
        });

        // Special handling for the "Others" checkbox
        var othersText = document.getElementById('othersText');
        if (checkbox.id === 'othersCheckbox') {
            othersText.disabled = !checkbox.checked; // Enable/disable text input
            if (!checkbox.checked) {
                othersText.value = ''; // Clear the text input when unchecked
            }
        } else {
            // Disable and clear the text input when any other checkbox is selected
            othersText.disabled = true;
            othersText.value = '';
        }
    }
</script>
