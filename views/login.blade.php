@extends('base')

        @section('browsertitle')
            Acme: Login
        @stop

        @section('content')
        <div class="row align-items-center">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <h1>Log In</h1>
                <hr>

                <form action="">
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="username" name="username" placeholder="user@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-2">

            </div>
        </div>
        @stop