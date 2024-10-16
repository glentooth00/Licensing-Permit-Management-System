@extends('includes.layouts.app')

@section('page-title', 'Sent SMS')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">SMS</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <div class="content">

            @if (session('success'))
                <div id="flash-message" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="container-fluid">
                <div class="row">
                    <!-- Form column -->
                    {{-- <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{ route('street.store') }}" method="POST"> 
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Street Name</label>
                                    <input type="text" class="form-control" name="street" id="formGroupExampleInput"
                                        placeholder="street name" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Table column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Client</th>
                                            <th>Phone number</th>
                                            <th>Date/Time Sent</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($smsNotifs as $smsNotif)
                                            <tr>
                                                <td>
                                                    {{ $smsNotif->client_name }}
                                                </td>
                                                <td>
                                                    {{ $smsNotif->phone_number }}
                                                </td>
                                                <td>
                                                    {{ $smsNotif->created_at }}
                                                </td>
                                                <td>
                                                    {{ $smsNotif->message }}
                                                </td>

                                                <td class="text-center">
                                                    {{-- <a type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                        data-target="#userData" data-id="{{ $smsNotif->id }}"
                                                        data-street="{{ $smsNotif->street }}">
                                                        EDIT
                                                    </a> --}}

                                                    <button class="btn bg-danger btn-sm"
                                                        onclick="confirmDelete({{ $smsNotif->id }})">DELETE</button>
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">First name</label>
                            <input type="text" class="form-control" name="firstname" id="formGroupExampleInput"
                                placeholder="First name">
                            <label for="formGroupExampleInput">Middle name</label>
                            <input type="text" class="form-control" name="middlename" id="formGroupExampleInput"
                                placeholder="Middle name">
                            <label for="formGroupExampleInput">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="formGroupExampleInput"
                                placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Gender</label>
                            <select type="text" class="form-control" name="gender" id="formGroupExampleInput"
                                placeholder="First name">
                                <option value="" hidden>Select gender...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" name="email" id="formGroupExampleInput2"
                                placeholder="email">
                            <label for="formGroupExampleInput2">Contact #</label>
                            <input type="text" class="form-control" name="contactno" id="formGroupExampleInput2"
                                placeholder="contact #">
                            <label for="formGroupExampleInput2">Username</label>
                            <input type="text" class="form-control" name="username" id="formGroupExampleInput2"
                                placeholder="username">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="text" class="form-control" name="password" id="formGroupExampleInput2"
                                placeholder="password">
                            <label for="formGroupExampleInput">User role</label>
                            <select type="text" class="form-control" name="role" id="formGroupExampleInput"
                                placeholder="First name">
                                <option value="" hidden>Select Role...</option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create user</button>
                </div>
                </form>
            </div>
        </div>
    </div> --}}


    <!-- USER DATA MODAL -->
    <!-- Modal -->
    <div class="modal fade" id="userData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Street</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editStreetForm" action="" method="POST">
                        @csrf
                        @method('PUT') <!-- Assuming you're using the PUT method for updating -->
                        <div class="form-group">
                            <label for="formGroupExampleInput">Street Name</label>
                            <input type="text" class="form-control" name="street" id="formGroupExampleInput"
                                placeholder="Street name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="editStreetForm">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        // Use jQuery to handle the modal data population
        $('#userData').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var streetId = button.data('id'); // Extract street ID from data-* attributes
            var streetName = button.data('street'); // Extract street name

            var modal = $(this);
            modal.find('.modal-title').text('Edit Street: ' + streetName); // Update modal title

            // Set the form action URL dynamically to match the update route
            modal.find('form#editStreetForm').attr('action', '/streets/' + streetId);

            // Populate the street name input field with the selected street data
            modal.find('input[name="street"]').val(streetName);
        });
    </script>

@endsection
