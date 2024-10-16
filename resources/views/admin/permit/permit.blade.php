@extends('includes.layouts.app2')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <button type="button" class="btn btn-sm btn-primary" onclick="printDiv('printableArea')"><i class="fas fa-printer"></i>
        Print</button>
    <div class="" style="width: 100%;">
        <!-- Main content -->
        <div class="content col-lg-12" style="width: 100%;">
            <div class="container-fluid">
                <div class="" style="width: 100%;">
                    <div class="table-responsive">
                        <div id="printableArea">
                            <!-- /.card-header -->
                            <div class="card-body" style="width: 100%;">
                                <div class="text-center"
                                    style="background-image: url('/dist/images/print.png'); height: 340px;">
                                </div>
                                <div>
                                    {{-- Top --}}
                                    <div class="text-center" style="display: flex;">
                                        <div class="mt-5" style="width: 100%;">
                                            <span><B>{{ date('F j, Y') }}</B></span>
                                        </div>

                                        <div class="mt-5" style="width: 100%;">
                                            <span><b>{{ $permit->plate_number }}</b></span>
                                        </div>
                                        <div class="mt-5" style="width: 100%;">
                                            <span><B>{{ date('Y') }}</B></span>
                                        </div>

                                    </div>
                                    {{-- Bottom --}}
                                    <div class="text-center" style="display: flex;">
                                        <div class="" style="border-top: 1px solid gray; width: 100%;">
                                            <span>DATE Issued</span>
                                        </div>

                                        <div class="" style="border-top: 1px solid gray; width: 100%;">
                                            <span>Mayor's Permit No.</span>
                                        </div>
                                        <div class="" style="border-top: 1px solid gray; width: 100%;">
                                            <span>PERMIT Year</span>
                                        </div>

                                    </div>

                                    <div class="text-center" style="display: flex;">
                                        <div class="mt-4" style="width: 100%;">
                                            <span>
                                                <b>{{ \Carbon\Carbon::parse($permit->approved_on)->addYear()->format('F j, Y') }}</b>
                                            </span>
                                        </div>

                                        <div class="mt-4" style="width: 100%;">
                                            <span><b>{{ $permit->plate_number }}</b></span>
                                        </div>
                                        <div class="mt-4" style="width: 100%;">
                                            <span><b>{{ $permit->business_application }}</b></span>
                                        </div>

                                    </div>
                                    <div class="text-center" style="display: flex;">
                                        <div class="" style="border-top: 1px solid gray; width: 100%;">
                                            <span>PERMIT Expires

                                            </span>
                                        </div>

                                        <div class="" style="border-top: 1px solid gray; width: 100%;">
                                            <span>Plate Number</span>
                                        </div>
                                        <div class="" style="border-top: 1px solid gray; width: 100%;">
                                            <span>CLASSIFICATION</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="row">
                                        {{-- <input type="text" value="{{ $permit->status }}"> --}}
                                        <div class="col-lg-12 mt-3" style="border-bottom: 2px solid gray;">
                                            <h5 class="fw-bold">This CERTIFIES that:
                                                <span><b>{{ $permit->owner_first_name }}
                                                        {{ $permit->owner_middle_name }}
                                                        {{ $permit->owner_last_name }}</b></span>
                                            </h5>
                                        </div>
                                        <div class="col-lg-12 mt-3" style="border-bottom: 2px solid gray;">
                                            <h5 class="fw-bold">Nature of Business:
                                                <span><b>{{ $permit->business_name }}</b></span>
                                            </h5>
                                        </div>
                                        <div class="col-lg-12 mt-3" style="border-bottom: 2px solid gray;">
                                            <h5 class="fw-bold">Business Address: <span><b>{{ $permit->_street }}
                                                        {{ $permit->barangay }}
                                                        {{ $permit->city_municipality }}
                                                        {{ $permit->province }}</b></span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <p>
                                        <strong>
                                            has been granted BUSINESS PERMIT to operate the started buiness subject to
                                            existing law,
                                            ordinances, rules and regulations of the Municipality
                                            of Estancia and to pertinent provisions of the Republic act 71600 otherwise
                                            known as the
                                            Local Government Code of 1991 and provided further
                                            that any infraction or violation therefore will be efficient ground for the
                                            revocation
                                            of this PERMIT.
                                        </strong>
                                    </p>
                                </div>
                                <div>
                                    <div class="" style="display: flex; align-items: center;">
                                        <div class="">
                                            <div class=""
                                                style="background-color: rgb(3, 35, 218); width: 500px; color: #fff; margin-right: 50px;  border: 1px solid rgba(33, 33, 34, 0.589);">
                                                <div class=" p-5 text-center">
                                                    <h1> {{ $permit->business_name }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <div class="p-2 text-center" style="width: 500px;">
                                                    <h1>{{ $qrCode }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <div class="" style="display: flex;">
                                        <div class="col-lg-6">
                                            <div class="" style="display: flex;">
                                                <div class="" style="width: 500px;">
                                                    <div class=""
                                                        style="border: 1px solid rgba(33, 33, 34, 0.589); padding: 10px;">
                                                        <div class="">
                                                            <span><b>Paid under the following:</b></span><br>
                                                            <div class="p-2" style="display: flex; align-items: center;">
                                                                <div class="col-md-3" style="display: flex; gap: 15px;">
                                                                    <div>
                                                                        <span>O.R. No.</span><br>
                                                                        <input type="text"
                                                                            style="border: none; outline: none; width: 100px;"><br>
                                                                    </div>
                                                                    <div>
                                                                        <span>O.R. Dates</span><br>
                                                                        <input type="text"
                                                                            style="border: none; outline: none; width: 100px;"><br>
                                                                    </div>
                                                                    <div>
                                                                        <span>O.R. Amount</span><br>
                                                                        <input type="text"
                                                                            style="border: none; outline: none; width: 100px;"><br>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <span class="badge">
                                                                <b>Mode of Payment:</b>
                                                                <input type="checkbox" id="quarterly" name="mode_of_payment"
                                                                    onclick="uncheckOther('quarterly', 'annual')"> Quarterly
                                                                &nbsp;&nbsp;&nbsp;
                                                                <input type="checkbox" id="annual" name="mode_of_payment"
                                                                    onclick="uncheckOther('annual', 'quarterly')"> Annual
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <div class="" style="border: 1px solid rgba(33, 33, 34, 0.589);">
                                                    <div class="card-body text-center">
                                                        <h3 class="text-danger">
                                                            ERASURE AND/OR ALTERATION WILL
                                                            INVALIDATE THIS PERMIT
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="" style="border: 1px solid rgba(33, 33, 34, 0.589);">
                                                <div class="card-body">
                                                    <h4>APPROVED:</h4>
                                                    <br><br><br><br><br><br><br>
                                                    <h4 class="text-center">MAYOR MARY LYNN N. MOSQUEDA</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-lg-12">
                                        <div class="" style="border: 1px solid rgba(33, 33, 34, 0.589);">
                                            <div class="card-body">
                                                <h5>This permit shall be posted consipicously at the place where the
                                                    business is
                                                    being conducted and shall be presented</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            // Get all the input fields and checkboxes within the div
            var inputElements = document.getElementById(divName).getElementsByTagName('input');

            // Loop through each input element and replace them with the corresponding value or checked status
            for (var i = 0; i < inputElements.length; i++) {
                var input = inputElements[i];

                // Check if it's a checkbox
                if (input.type === 'checkbox') {
                    // If the checkbox is checked, show the text '✔', otherwise show empty space
                    var checkedText = input.checked ? '✔' : '';
                    printContents = printContents.replace(input.outerHTML, checkedText);
                } else {
                    // For text inputs, replace with the input value
                    printContents = printContents.replace(input.outerHTML, '<span>' + input.value + '</span>');
                }
            }

            // Set the document body content to the updated print contents
            document.body.innerHTML = printContents;

            window.print();

            // Restore the original page contents after printing
            document.body.innerHTML = originalContents;
        }

        function uncheckOther(checkedId, uncheckedId) {
            var checkedBox = document.getElementById(checkedId);
            var uncheckedBox = document.getElementById(uncheckedId);

            // Only uncheck the other box if the current box is being checked (not unchecking it)
            if (checkedBox.checked) {
                uncheckedBox.checked = false;
            }
        }
    </script>
@endsection
