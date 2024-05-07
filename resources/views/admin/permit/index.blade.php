@extends('includes.layouts.app')

@section('page-title', 'Dashboard')

@section('content')
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    <h5>New Registered Members</h5>
                                </div>
                                <div class="card-block">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th style="width:5%;text-align:center;">STATUS</th>
                                                <th style="width:10%;text-align:center;">NAME</th>

                                                <th style="width:10%;text-align:center;">NAME OF BUSINESS</th>

                                                <th style="width:5%;text-align:center;">COTANCT No.</th>
                                                <th style="width:5%;text-align:center;">APPLIED ON</th>
                                                <th class="text-center">ACTIONS</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($approved_permits as $approved_permit)
                                                <tr>
                                                    <td style="width:5%;">
                                                        @php
                                                            if ($approved_permit->status == 'Pending') {
                                                                echo '<span class="p-2 text-dark bg-warning">PENDING</span>';
                                                            } else {
                                                                echo '<span class="p-2 text-dark bg-success">Approved</span>';
                                                            }
                                                        @endphp
                                                    </td>
                                                    <td style="width:10%;text-align:center;">
                                                        {{ $approved_permit->first_name }}
                                                        {{ $approved_permit->middle_name }}
                                                        {{ $approved_permit->last_name }}
                                                    </td>
                                                    <td style="width:10%;text-align:center;">
                                                        {{ $approved_permit->business_name }}
                                                    </td>

                                                    <td style="width:5%;text-align:center;">
                                                        {{ $approved_permit->owners_Tel_No_Mobile }}
                                                    </td>
                                                    <td style="width:10%;text-align:center;">
                                                        {{ $approved_permit->created_at }}
                                                    </td>
                                                    <!-- Add more table cells for other fields -->
                                                    <td class="text-center" style="width: 10%;">


                                                        <div class="button-container">
                                                            {{-- Approve Button --}}
                                                            @if ($approved_permit->status == 'Approved')
                                                            @else
                                                                <form
                                                                    action="{{ route('approve.permit', ['id' => $approved_permit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button type="submit"
                                                                        class="btn waves-effect waves-light btn-success btn-outline-info btn-sm btn-round m-1">Approve</button>
                                                                </form>
                                                            @endif


                                                            {{-- More Details Button with ID --}}
                                                            <a href="{{ route('permit.show', ['id' => $approved_permit->id]) }}"
                                                                class="btn waves-effect waves-light btn-info btn-outline-info btn-sm btn-round">More
                                                                Details</a>

                                                            {{-- Generate Permit Button --}}
                                                            {{-- {{ route('permit.generate', ['id' => $businessPermit->id]) }} --}}
                                                            <form action="{{ route('generate.qrcode') }}" method="GET">
                                                                @csrf
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ $approved_permit->id }}">
                                                                <input type="hidden" name="status"
                                                                    value="{{ $approved_permit->status }}">
                                                                <button type="submit"
                                                                    class="btn waves-effect waves-light btn-primary btn-outline-info btn-sm btn-round m-1">Generate
                                                                    Permit</button>
                                                            </form>


                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
