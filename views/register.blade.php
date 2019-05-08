@extends('base')

    @section('browsertitle')
        Acme: Register
    @stop 

        @section('content')
        <div class="row align-items-center">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <h1>Register</h1>

                <hr>

                <form action="/register" id="registerform" method="post">
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control required" id="first_name" name="first_name" placeholder="First name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control required" id="last_name" name="last_name" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control required" id="email" name="email" placeholder="user@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="verify_email" class="col-sm-2 col-form-label">Verify Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="verify_email" name="verify_email" placeholder="user@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control required" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="verify_password" class="col-sm-2 col-form-label">Verify Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Verify Password">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>

                <div class="col-md-2">

                </div>

            </div>
            @stop

    @section('bottomjs')
    <script>
        $(document).ready(function() {
            $('#registerform').validate({
                rules: {
                    verify_email: {
                    required: true,
                    email: true,
                    equalTo: '#email'
                    },
                    verify_password: {
                        required: true,
                        equalTo: '#password'
                    }
                }
            });
        });
    </script>
    @stop