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

    <section class="py-5">
        <div class="container">
            <a href="/" class="btn btn-secondary btn-sm" style="width: 10%;"> Back </a>
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
                                        <li><input type="checkbox" name="classification_cottage" value="1">
                                            Cottage (below 500,000)</li>
                                        <li><input type="checkbox" name="classification_cottage" value="2">
                                            Micro
                                            ( 3,000,000 below)</li>
                                        <li><input type="checkbox" name="classification_cottage" value="3">
                                            Small
                                            (3,000,001 to 15,000,000)</li>
                                        <li><input type="checkbox" name="classification_cottage" value="4">
                                            Medium
                                            (15,000,001 to 100,000,000)</li>
                                        <li><input type="checkbox" name="classification_cottage" value="5">
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
                                        <li><input type="checkbox" name="amendment" value="1">
                                            From Single to
                                            Partnership</li>
                                        <li><input type="checkbox" name="amendment" value="2">
                                            From Single to
                                            Corporation</li>
                                        <li><input type="checkbox" name="amendment" value="3">
                                            From Partnership
                                            to
                                            Single</li>
                                        <li><input type="checkbox" name="amendment" value="4">
                                            From Partnership
                                            to
                                            Corporation</li>
                                        <li><input type="checkbox" name="amendment" value="5">
                                            From Corporaction
                                            to
                                            Single</li>
                                        <li><input type="checkbox" name="amendment" value="6">
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
                                        <td class="p-2"> <label for="date_of_application">Date of
                                                Application:</label>
                                            <input id="date_of_application" name="date_of_application" type="date"
                                                style="width: 70%;">
                                        </td>
                                        <td> DTI/SEC/CDA Registration No. : <input name="DTI_SEC_CDA_registration No"
                                                type="text" style="width: 60%;"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">Date Business Started: <input name="date_business_started"
                                                type="date" style="width: 60%;"></td>
                                        <td> DTI/SEC/CDA Date of Registration: <input
                                                name="DTI_SEC_CDA_date_of_Registration" type="date"
                                                style="width: 55%;"></td>
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
                                            <span>CTC No.: <input name="ctc_no" type="text" style="width: 40%;">
                                                TIN: <input name="TIN" type="text" style="width: 40%;"></span>
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
                                                    style="width: 70%;" required></td>
                                            <td>First Name: <input name="first_name" type="text"
                                                    style="width: 70%;" required></td>
                                            <td>Middle Name: <input name="middle_name" type="text"
                                                    style="width: 70%;" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="p-2">
                                                Business Name: <input name="business_name" type="text" required
                                                    style="width: 80%;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="p-2">
                                                Type of Business: <select name="business_type" type="text" required
                                                    style="width: 80%;">
                                                    <option value ="" hidden>Select Business type</option>
                                                    <option value ="Sari-sari Store">Sari-sari Store</option>
                                                    <option value ="Gasoline Station">Gasoline Station</option>
                                                    <option value ="Hardware">Hardware</option>
                                                    <option value ="Restaurant">Restaurant</option>
                                                    <option value ="Bakery">Bakery</option>
                                                    <option value ="Fish Broker">Fish Broker</option>
                                                    <option value ="Fruit and Vegetable Business">Fruit and Vegetable
                                                        Business</option>
                                                    <option value="Meat Shop">Meat Shop</option>
                                                    <option value="Cake and Pastry Business">Cake and Pastry Business
                                                    </option>
                                                    <option value="Beauty Products Reselling Business">Beauty Products
                                                        Reselling Business</option>
                                                    <option value="Fashion Boutique">Fashion Boutique</option>
                                                    <option value="Hair and Grooming Services">Hair and Grooming
                                                        Services</option>
                                                    <option value="Bicycle Shop Business">Bicycle Shop Business
                                                    </option>
                                                    <option value="Car Wash">Car Wash</option>
                                                    <option value="Food Cart Franchise">Food Cart Franchise</option>
                                                    <option value="Laundry Shop Business">Laundry Shop Business
                                                    </option>
                                                    <option value="Water Refilling Station">Water Refilling Station
                                                    </option>
                                                </select>
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
                                                            name="business_building_name" type="text" required
                                                            style="width: 75%;">
                                                    </td>
                                                    <td class="p-2">Building Name: <input
                                                            name="owners_building_name" type="text" required
                                                            style="width: 75%;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2">Street:
                                                        <select name="business_street" type="text" required
                                                            style="width: 90%;">
                                                            <option value="" hidden>Select Street</option>
                                                            <option value="Aclaro Street">Aclaro Street</option>
                                                            <option value="Bacos Road">Bacos Road
                                                            </option>
                                                            <option value="Bulaqueña-Gogo Road">Bulaqueña-Gogo Road
                                                            </option>
                                                            <option value="Clement Street">Clement Street</option>
                                                            <option value="Cuenca Street">Cuenca Street</option>
                                                            <option value="E. Reyes Avenue">E. Reyes Avenue
                                                            </option>
                                                            <option value="Golingan Street">Golingan Street</option>
                                                            <option value="Iloilo East Coast-Capiz Road">
                                                                Iloilo East Coast-Capiz Road
                                                            </option>
                                                            <option value="Iloilo East Coast-Capiz Road">
                                                                Iloilo East Coast-Capiz Road
                                                            </option>
                                                            <option value="Iloilo East Coast-Estancia Wharf Road">
                                                                Iloilo East Coast-Estancia Wharf Road
                                                            </option>
                                                            <option value="Inventor Street">Inventor
                                                                Street</option>
                                                            <option value="Julian Paraiso Street">Julian
                                                                Paraiso Street
                                                            </option>
                                                            <option value="Paon-Daculan Road">Paon-Daculan Road
                                                            </option>
                                                            <option value="Pio Reyes Street">Pio Reyes
                                                                Street</option>
                                                            <option value="Somes Street">Somes Street
                                                            </option>
                                                            <option value="V. Cudilla, Sr. Avenue">V. Cudilla, Sr.
                                                                Avenue</option>
                                                            <option value="Villa Reyes Road">Villa Reyes Road</option>
                                                            <option value="Zone III Road">Zone III Road</option>
                                                        </select>
                                                    </td>
                                                    <td class="p-2">Street: <select name="business_street"
                                                            type="text" required style="width: 90%;">
                                                            <option value="" hidden>Select Street</option>
                                                            <option value="Aclaro Street">Aclaro Street</option>
                                                            <option value="Bacos Road">Bacos Road
                                                            </option>
                                                            <option value="Bulaqueña-Gogo Road">Bulaqueña-Gogo Road
                                                            </option>
                                                            <option value="Clement Street">Clement Street</option>
                                                            <option value="Cuenca Street">Cuenca Street</option>
                                                            <option value="E. Reyes Avenue">E. Reyes Avenue
                                                            </option>
                                                            <option value="Golingan Street">Golingan Street</option>
                                                            <option value="Iloilo East Coast-Capiz Road">
                                                                Iloilo East Coast-Capiz Road
                                                            </option>
                                                            <option value="Iloilo East Coast-Capiz Road">
                                                                Iloilo East Coast-Capiz Road
                                                            </option>
                                                            <option value="Iloilo East Coast-Estancia Wharf Road">
                                                                Iloilo East Coast-Estancia Wharf Road
                                                            </option>
                                                            <option value="Inventor Street">Inventor
                                                                Street</option>
                                                            <option value="Julian Paraiso Street">Julian
                                                                Paraiso Street
                                                            </option>
                                                            <option value="Paon-Daculan Road">Paon-Daculan Road
                                                            </option>
                                                            <option value="Pio Reyes Street">Pio Reyes
                                                                Street</option>
                                                            <option value="Somes Street">Somes Street
                                                            </option>
                                                            <option value="V. Cudilla, Sr. Avenue">V. Cudilla, Sr.
                                                                Avenue</option>
                                                            <option value="Villa Reyes Road">Villa Reyes Road</option>
                                                            <option value="Zone III Road">Zone III Road</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>Barangay: </b>
                                                        <select name="business_barangay" type="text" required
                                                            style="width: 85%;">
                                                            <option value="" hidden>Select Barangay</option>
                                                            <option value="Brgy Bayas">Bayas</option>
                                                            <option value="Brgy Bayuyan">Bayuyan</option>
                                                            <option value="Brgy Botongon">Botongon</option>
                                                            <option value="Brgy Bulaqueña">Bulaqueña</option>
                                                            <option value="Brgy Calapdan">Calapdan</option>
                                                            <option value="Brgy Cano-an">Cano-an</option>
                                                            <option value="Brgy Daan Banua">Daan Banua</option>
                                                            <option value="Brgy Daculan">Daculan</option>
                                                            <option value="Brgy Gogo">Gogo</option>
                                                            <option value="Brgy Jolog">Jolog</option>
                                                            <option value="Brgy Lumbia (Ana Cuenca)">Lumbia (Ana
                                                                Cuenca)</option>
                                                            <option value="Brgy Malbog">Malbog</option>
                                                            <option value="Brgy Manipulon">Manipulon</option>
                                                            <option value="Brgy Pa-on">Pa-on</option>
                                                            <option value="Brgy San Roque">San Roque</option>
                                                            <option value="Brgy Santa Ana">Santa Ana</option>
                                                            <option value="Brgy Tabu-an">Tabu-an</option>
                                                            <option value="Brgy Tacbuyan">Tacbuyan</option>
                                                            <option value="Brgy Tanza">Tanza</option>
                                                            <option value="Brgy Poblacion Zone II">Poblacion Zone II
                                                            </option>
                                                            <option value="Brgy Poblacion Zone III">Poblacion Zone III
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class="p-2"><b>Barangay: </b> <select
                                                            name="business_barangay" type="text" required
                                                            style="width: 85%;">
                                                            <option value="" hidden>Select Barangay</option>
                                                            <option value="Brgy Bayas">Bayas</option>
                                                            <option value="Brgy Bayuyan">Bayuyan</option>
                                                            <option value="Brgy Botongon">Botongon</option>
                                                            <option value="Brgy Bulaqueña">Bulaqueña</option>
                                                            <option value="Brgy Calapdan">Calapdan</option>
                                                            <option value="Brgy Cano-an">Cano-an</option>
                                                            <option value="Brgy Daan Banua">Daan Banua</option>
                                                            <option value="Brgy Daculan">Daculan</option>
                                                            <option value="Brgy Gogo">Gogo</option>
                                                            <option value="Brgy Jolog">Jolog</option>
                                                            <option value="Brgy Lumbia (Ana Cuenca)">Lumbia (Ana
                                                                Cuenca)</option>
                                                            <option value="Brgy Malbog">Malbog</option>
                                                            <option value="Brgy Manipulon">Manipulon</option>
                                                            <option value="Brgy Pa-on">Pa-on</option>
                                                            <option value="Brgy San Roque">San Roque</option>
                                                            <option value="Brgy Santa Ana">Santa Ana</option>
                                                            <option value="Brgy Tabu-an">Tabu-an</option>
                                                            <option value="Brgy Tacbuyan">Tacbuyan</option>
                                                            <option value="Brgy Tanza">Tanza</option>
                                                            <option value="Brgy Poblacion Zone II">Poblacion Zone II
                                                            </option>
                                                            <option value="Brgy Poblacion Zone III">Poblacion Zone III
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2">City/Municipality: <input
                                                            name="business_city_municipality" type="text"
                                                            value="Estancia" readonly required class="text-dark"
                                                            style="width: 75%;">
                                                    </td>
                                                    <td class="p-2">City/Municipality: <input
                                                            name="owners_city_municipality" value=""
                                                            type="text" required class="text-dark"
                                                            style="width: 75%;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2">Province: <input name="business_province"
                                                            type="text" value="Iloilo" class="text-dark" readonly
                                                            required style="width: 85%;">
                                                    </td>
                                                    <td class="p-2">Province: <input name="owners_province"
                                                            type="text" value="Iloilo" class="text-dark" readonly
                                                            required style="width: 85%;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>Tel. No./Mobile: </b> <input value="+639"
                                                            disabled class="text-dark"
                                                            style="width:55px;margin-right:5px;"><input
                                                            name="business_Tel_No_Mobile" pattern="[0-9]{10}"
                                                            maxlength="10" placeholder="Enter 10-digit number"
                                                            type="number" required style="width: 65%;">
                                                    </td>
                                                    <td class="p-2"><b>Tel. No./Mobile: </b> <input value="+639"
                                                            disabled class="text-dark"
                                                            style="width:55px;margin-right:5px;"> <input
                                                            name="owners_Tel_No_Mobile" class="input-number"
                                                            pattern="[0-9]{10}" maxlength="10"
                                                            placeholder="Enter 10-digit number" type="number"
                                                            required style="width: 65%;">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="bg-dark text-light p-1 pt-2">
                                            <h6>Note: Full Up Only If Business Place is Rented</h6>
                                        </div>
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <td class="p-2"><b>Lessor's Full Name: </b><input
                                                            name="" style="width: 87%;" type="text"
                                                            required>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>Lessor's Full Address: </b><input
                                                            name="" style="width: 80%;" type="text"
                                                            required>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>Lessor's Full Tel/Mobile No.: </b><input
                                                            name="" style="width: 80%;" type="text"
                                                            required>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>Lessor's Email Address: </b><input
                                                            name="" style="width: 80%;" type="text"
                                                            required>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>Monthly Rental: </b><input name=""
                                                            style="width: 87%;" type="text" required>
                                                </tr>
                                                <tr>
                                                    <td class="p-2"><b>BUSINESS ACTIVITY </b><input name=""
                                                            style="width: 87%;" type="text" required>
                                                </tr>
                                            </thead>
                                        </table>
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <td class="bg-dark text-white text-center">Line Of Business</td>
                                                    <td class="text-center">No. Of <br> Units/Rooms</td>
                                                    <td class="text-center"><b>Capitalization</b> <br> (for new
                                                        business)</td>
                                                    <td class="text-center" colspan="2">Gross Sales/Receipts (for
                                                        renewal)</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <ul>
                                                                    <li>
                                                                        <input type="checkbox" name="amendment"
                                                                            value="1">
                                                                        Retail/Wholesale (essential commodities)
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="amendment"
                                                                            value="2">
                                                                        Retail/Wholesale
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="amendment"
                                                                            value="3">
                                                                        Manufacturing
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="amendment"
                                                                            value="4">
                                                                        Conructors
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <li>
                                                                    <input type="checkbox" name="amendment"
                                                                        value="1">
                                                                    Banks/Financial Institution
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" name="amendment"
                                                                        value="2">
                                                                    Dealers/Buy & Sell
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" name="amendment"
                                                                        value="3">
                                                                    Other Business
                                                                    <input type="text" name="amendment">
                                                                </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <p></p>
                                                        <textarea name="" id="" cols="20" rows="6"></textarea>
                                                    </td>
                                                    <td class="text-center">
                                                        <p></p>
                                                        <textarea name="" id="" cols="20" rows="6"></textarea>
                                                    </td>
                                                    <td class="text-center">
                                                        <b>Essential</b>
                                                        <textarea name="" id="" cols="20" rows="6"></textarea>
                                                    </td>
                                                    <td class="text-center">
                                                        <b>Non-Essential</b>
                                                        <textarea name="" id="" cols="20" rows="6"></textarea>
                                                    </td>
                                                    <td>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>
                                        <div class="form-group">
                                            <input type="checkbox" id="agreeCheckbox">
                                            <label for="agreeCheckbox">I hereby declare that the following entered data
                                                is true.</label>
                                        </div>
                                    </div>
                                    {{-- <button class="btn btn-primary" style="float: right;">Submit</button> --}}
                                    <button type="submit" class="btn btn-primary" style="float: right;"
                                        id="submitButton" disabled>Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('agreeCheckbox').addEventListener('change', function() {
            var submitButton = document.getElementById('submitButton');
            submitButton.disabled = !this.checked; // Disable if not checked, enable if checked
        });
    </script>
</body>

</html>
