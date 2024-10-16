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
                    {{-- <div class="text-center">
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
                    </div> --}}
                    <form method="POST" action="/submit-form">
                        @csrf
                        <h2>MUNICIPALITY OF ESTANCIA</h2>
                        <h3>UNIFIED APPLICATION FORM</h3>

                        <!-- Section A: Business Information and Registration -->
                        <h4>A. BUSINESS INFORMATION AND REGISTRATION</h4>
                        <div>
                            <label>DTI/SEC/CDA Registration Number:</label>
                            <input type="text" name="registration_number">
                        </div>
                        <div>
                            <label>Date of Registration:</label>
                            <input type="date" name="date_of_registration">
                        </div>
                        <div>
                            <label>Business / Trade Name:</label>
                            <input type="text" name="trade_name">
                        </div>
                        <div>
                            <label>Corporate Name:</label>
                            <input type="text" name="corporate_name">
                        </div>
                        <div>
                            <label>Franchise Name (if applicable):</label>
                            <input type="text" name="franchise_name">
                        </div>
                        <div>
                            <label>Tax Identification Number (TIN):</label>
                            <input type="text" name="tin">
                        </div>

                        <h4>Owner Information</h4>
                        <div>
                            <label>Name of Owner (Sole Proprietor):</label>
                            <input type="text" name="owner_last_name" placeholder="Last Name">
                            <input type="text" name="owner_first_name" placeholder="First Name">
                            <input type="text" name="owner_middle_name" placeholder="Middle Name">
                            <input type="text" name="owner_suffix" placeholder="Suffix">
                        </div>
                        <div>
                            <label>Mobile No:</label>
                            <input type="text" name="mobile_number">
                        </div>
                        <div>
                            <label>Email Address:</label>
                            <input type="email" name="email">
                        </div>

                        <!-- Business Operation -->
                        <h4>B. BUSINESS OPERATION</h4>
                        <div>
                            <label>Business Area (in sq. m.):</label>
                            <input type="text" name="business_area">
                        </div>
                        <div>
                            <label>Total No. of Employees in Establishment:</label>
                            <input type="number" name="total_employees">
                        </div>
                        <div>
                            <label>No. of Employees Residing Within Estancia:</label>
                            <input type="number" name="employees_in_estancia">
                        </div>
                        <div>
                            <label>No. of Delivery Vehicles (if applicable):</label>
                            <input type="number" name="delivery_vehicles">
                        </div>

                        <div>
                            <label>Business Location Address:</label>
                            <input type="text" name="business_location_address"
                                placeholder="House/Bldg. No, Name of Bldg.">
                            <input type="text" name="business_street" placeholder="Street">
                            <input type="text" name="business_barangay" placeholder="Barangay">
                            <input type="text" name="business_municipality" placeholder="Municipality"
                                value="Estancia">
                            <input type="text" name="business_province" placeholder="Province" value="Iloilo">
                            <input type="text" name="business_zipcode" placeholder="Zip Code" value="5017">
                        </div>

                        <!-- Rent Information -->
                        <h4>Note: Fill out only if place is rented</h4>
                        <div>
                            <label>Lessor's Full Name:</label>
                            <input type="text" name="lessor_full_name">
                        </div>
                        <div>
                            <label>Lessor's Full Address:</label>
                            <input type="text" name="lessor_full_address">
                        </div>
                        <div>
                            <label>Monthly Rental:</label>
                            <input type="number" name="monthly_rental">
                        </div>
                        <div>
                            <label>Contact Number:</label>
                            <input type="text" name="lessor_contact_number">
                        </div>

                        <!-- Business Activity -->
                        <h4>Business Activity</h4>
                        <div>
                            <label>Main Business/Office</label>
                            <input type="radio" name="business_activity" value="main">
                            <label>Branch Office</label>
                            <input type="radio" name="business_activity" value="branch">
                            <label>Warehouse</label>
                            <input type="radio" name="business_activity" value="warehouse">
                        </div>

                        <div>
                            <label>Philippine Standard Industrial Code (PSIC):</label>
                            <input type="text" name="psic">
                        </div>
                        <div>
                            <label>Line of Business:</label>
                            <input type="text" name="line_of_business">
                        </div>

                        <div>
                            <label>Product/Services:</label>
                            <input type="text" name="products_services">
                        </div>

                        <!-- Declaration Section -->
                        <h4>Declaration</h4>
                        <div>
                            <label>I declare under penalty of perjury...</label>
                            <textarea name="declaration" rows="4"></textarea>
                        </div>

                        <!-- Signature and Submission -->
                        <div>
                            <label>Signature of Applicant/Owner:</label>
                            <input type="text" name="signature">
                        </div>
                        <div>
                            <label>Designation/Position:</label>
                            <input type="text" name="designation">
                        </div>

                        <button type="submit">Submit Application</button>
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
