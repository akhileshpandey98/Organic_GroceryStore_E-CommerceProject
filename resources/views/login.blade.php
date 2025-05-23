@extends('layouts\main_layout')
@yield('login')

@section('main_layout-section')

    <body>

        <div class="bubble-container-fluid" style="background: #000; ">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>

            <div class="container">
                <div class="row justify-content-center"  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="col-md-6 m-5">
                        <div class="card ">
                            <div class="wrapper">
                                <div class="card-body">
                                    <h3 class="title text-center display-1">Login</h3>
                                    <form id="loginForm">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Enter Your Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Enter Your Password">
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit"
                                                class="btn btn-dark btn-block mt-3 fw-bold col-4 fs-5">Login</button>
                                        </div>

                                        <div class="additional-links mt-2 d-flex ">
                                            <div class="m-auto">
                                                <a href="#" id="forgotPasswordLink">Forgot Password?</a>
                                            </div>
                                            <div class="m-auto">
                                                <a href="signupform" id="createAccountLink">Create New Account?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    @endsection
