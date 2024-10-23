@extends('includes.layouts.app')

@section('page-title', 'Registered Permits')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Management</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <div class="content">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('user.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">First name</label>
                                        <input type="text" class="form-control" name="firstname"
                                            id="formGroupExampleInput" placeholder="First name">
                                        <label for="formGroupExampleInput">Middle name</label>
                                        <input type="text" class="form-control" name="middlename"
                                            id="formGroupExampleInput" placeholder="Middle name">
                                        <label for="formGroupExampleInput">Last name</label>
                                        <input type="text" class="form-control" name="lastname"
                                            id="formGroupExampleInput" placeholder="Last name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Gender</label>
                                        <select type="text" class="form-control" name="gender"
                                            id="formGroupExampleInput" placeholder="First name">
                                            <option value="" hidden>Select gender...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            id="formGroupExampleInput2" placeholder="email" required>
                                        <label for="formGroupExampleInput2">Contact #</label>
                                        <input type="text" class="form-control" name="contactno"
                                            id="formGroupExampleInput2" placeholder="contact #">
                                        <label for="formGroupExampleInput2">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            id="formGroupExampleInput2" placeholder="username" required>
                                        <label for="formGroupExampleInput2">Password</label>
                                        <input type="text" class="form-control" name="password"
                                            id="formGroupExampleInput2" placeholder="password" required>
                                        <label for="formGroupExampleInput">User role</label>
                                        <select type="text" class="form-control" name="role"
                                            id="formGroupExampleInput" placeholder="First name">
                                            <option value="" hidden>Select Role...</option>
                                            <option value="User">User</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                <button type="submit" class="btn btn-primary">Create user</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- table example 1 has import options -->
                                {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Add user
                            </button> --}}
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th class="text-center">CONTACT No.</th>
                                            <th class="text-center">USERNAME</th>
                                            <th class="text-center">STATUS</th>
                                            <th class="text-center">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->firstname }}
                                                    {{ $user->middlename }}
                                                    {{ $user->lastname }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $user->contactno }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $user->username }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $user->role }}
                                                </td>
                                                <td class="text-center">
                                                    <a type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                        data-target="#userData" data-id="{{ $user->id }}">EDIT</a>





                                                    <button class="btn bg-danger btn-sm"
                                                        onclick="confirmDelete({{ $user->id }})">DELETE</button>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.content -->
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


    <div class="modal" id="userData" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="updateUserForm">
                        @csrf
                        @method('PUT') <!-- Spoof the PUT method for updating -->

                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"
                                placeholder="First name">

                            <label for="middlename">Middle name</label>
                            <input type="text" class="form-control" name="middlename" id="middlename"
                                placeholder="Middle name">

                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                placeholder="Last name">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="" hidden>Select gender...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email">

                            <label for="contactno">Contact #</label>
                            <input type="text" class="form-control" name="contactno" id="contactno"
                                placeholder="Contact #">

                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Username" required>

                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password (optional)">

                            <label for="role">User role</label>
                            <select class="form-control" name="role" id="role">
                                <option value="" hidden>Select Role...</option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>





    <script>
        $(document).ready(function() {
            $(".generatePermitBtn").click(function(e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                var url = "{{ route('generate.qrcode') }}?user_id=" + userId;
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function(response) {
                        $("#generatePermitModalBody").html(response);
                        $("#generatePermitModal").modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Select the flash message element
            var flashMessage = document.getElementById('flash-message');

            // If the flash message exists, set a timeout to remove it after 5 seconds (5000 ms)
            if (flashMessage) {
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 5000); // 5000 ms = 5 seconds
            }
        });

        $('#userData').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var userId = button.data('id'); // Extract user ID from data-* attributes

            var modal = $(this);
            $.ajax({
                url: '/admin/admin/user/' + userId, // Fetch user data
                method: 'GET',
                success: function(data) {
                    // Populate the form with user data
                    modal.find('#firstname').val(data.firstname);
                    modal.find('#middlename').val(data.middlename);
                    modal.find('#lastname').val(data.lastname);
                    modal.find('#gender').val(data.gender);
                    modal.find('#email').val(data.email);
                    modal.find('#contactno').val(data.contactno);
                    modal.find('#username').val(data.username);
                    modal.find('#role').val(data.role);

                    // Dynamically update the form action URL with the user ID
                    $('#updateUserForm').attr('action', '/admin/admin/admin/user/' + userId);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to fetch user data: ', xhr.responseText);
                    alert('Failed to fetch user data.');
                }
            });
        });


        $('#updateUserForm').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        window.location.reload(); // Reload the page to show flash message
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(xhr) {
                    console.error('Update failed: ', xhr.responseText);
                    alert('Failed to update user.');
                }
            });
        });


        function confirmDelete(userId) {
            if (confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    url: '/admin/admin/admin/user/' + userId, // Your delete route
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}' // Laravel CSRF token
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            window.location.reload(); // Reload the page or remove the user from the list
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        console.error('Delete failed: ', xhr.responseText);
                        alert('Failed to delete user.');
                    }
                });
            }
        }
    </script>

@endsection
