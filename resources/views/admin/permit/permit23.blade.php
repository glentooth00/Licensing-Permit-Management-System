@extends('includes.layouts.app2')


@section('content')
    <div class="container">
        <div class="col-lg-6 mt-5">
            <button type="button" class="btn btn-sm btn-primary" onclick="printDiv('printableArea')"><i
                    class="icon-printer"></i> Print</button>
        </div>
        <div class="card mt-5">
            <div class="table">
                <div class="responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Vehicle Name</th>
                                <th>Unit</th>
                                <th>Plate Number</th>
                                <th>MV File No.</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- @forelse($vehicles as $vehicle) -->
                            <tr>
                                <td>{{ $vehicle->name }}</td>
                                <td>{{ $vehicle->unit }}</td>
                                <td>{{ $vehicle->plate_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $vehicle->name }}</td>
                                <td>{{ $vehicle->unit }}</td>
                                <td>{{ $vehicle->plate_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $vehicle->name }}</td>
                                <td>{{ $vehicle->unit }}</td>
                                <td>{{ $vehicle->plate_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $vehicle->name }}</td>
                                <td>{{ $vehicle->unit }}</td>
                                <td>{{ $vehicle->plate_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td>{{ $vehicle->mv_no }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- {{-- Hide on Wide Screen --------- --}} -->
            <div style="display: none;">
                <div id="printableArea">
                    <h6 class="text-center mt-4">Vehicle Reservation And Monitoring System With SMS For NISU Motorpool
                        Office</h6>
                    <div class="responsive mt-5">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Unit</th>
                                    <th>Plate Number</th>
                                    <th>MV File No.</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->unit }}</td>
                                    <td>{{ $vehicle->plate_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->unit }}</td>
                                    <td>{{ $vehicle->plate_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->unit }}</td>
                                    <td>{{ $vehicle->plate_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->unit }}</td>
                                    <td>{{ $vehicle->plate_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td>{{ $vehicle->mv_no }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
