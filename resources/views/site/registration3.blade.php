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
            <a href="/" class="btn btn-secondary btn-sm" style="width: 10%;"> Back </a>
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            NEW
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            RENEW
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="width: 2%;">ADDITIONAL/ <br> CHANGE <br> kind/item</td>
                                <td>Anually</td>
                            </tr>
                            <tr>
                                <td>Bi-annually</td>
                            </tr>
                            </tr>
                            <tr>
                                <td>
                                    CHANGE biz address
                                </td>
                                 <td>
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
                        <span>Date of Receipt:_______________</span><br>
                        <span>Tracking Number:_____________</span>
                    </div>
                </div>
                </div>
                <div class="card-header bg-dark text-light"><span>A. BUSINESS INFORMATION AND REGISTRATION</span></div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>
                                                <span class="px-5">please Choose one </span>
                                                <span>
                                                    <input type="checkbox" class="form-check-input"><b> Sole Proprietorship</b>&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-check-input"><b> Sole Proprietorship</b>&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-check-input"><b> Partnership</b>&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-check-input"><b> Corporation</b>&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-check-input"><b> Cooperative</b>
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
                                <table class="table">
                                    <tr>
                                        <td rowspan="2">
                                            <b>Name Address/Main Office Address:</b>
                                        </td>
                                        <td>
                                            <span>Bldg. No. <input type="text"></span>
                                        </td>
                                        <td>
                                            <span>Name of Bldg. <input type="text"></span>
                                        </td>
                                        <td>
                                            <span>Lot No. <input type="text"></span>
                                        </td>
                                        <td>
                                            <span>Block no. <input type="text"></span>
                                        </td>
                                        <td>
                                            {{-- <span>Block no. <input type="text"></span> --}}
                                        </td>
                                        <td>
                                            {{-- <span>Block no. <input type="text"></span> --}}
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
                                            <span>Province  <input type="text"></span>
                                        </td>
                                        <td>
                                            <span>Zip Code  <input type="text"></span>
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
                                            <input type="checkbox" class="form-check-input"><b> Filipino</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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