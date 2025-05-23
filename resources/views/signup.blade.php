@extends('layouts\main_layout')
@yield('login')

@section('main_layout-section')

    <body>
      <div class="bubble-container-fluid"  style="background: #000; ">
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
            <div class="row justify-content-center">
                <div class="col-md-6 m-5">
                    <div class="card ">
                        <div class="wrapper">
                            <div class="card-body">
                                <h3 class="title text-center display-1 py-2">SignUp</h3>
                                <form id="signupForm" method="GET" class="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="name1">Name</label>
                                        <input type="text" class="form-control" id="name1" name="name1"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="email1">Email</label>
                                        <input type="email" class="form-control" id="email1" name="email"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control " id="password"
                                           name="password" placeholder="Enter Your Password">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="dob1">Dob</label>
                                        <input type="date" name="date" id="dob1" class="form-control"
                                            placeholder="Dob">
                                    </div>

                                    <div class="form-group mt-2">
                                        <label for="validationCustom03" class="form-label">City</label>
                                        <select class="form-control" name="city">
                                          <option selected disabled value="">Choose City..</option>

                                            <option value="Mumbai">Mumbai</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Bangalore">Bangalore</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Jaipur">Jaipur</option>
                                            <option value="Lucknow">Lucknow</option>
                                            <option value="Kanpur">Kanpur</option>
                                            <option value="Nagpur">Nagpur</option>
                                            <option value="Visakhapatnam">Visakhapatnam</option>
                                            <option value="Bhopal">Bhopal</option>
                                            <option value="Patna">Patna</option>
                                            <option value="Ludhiana">Ludhiana</option>
                                            <option value="Agra">Agra</option>
                                            <option value="Nashik">Nashik</option>
                                            <option value="Faridabad">Faridabad</option>
                                            <option value="Varanasi">Varanasi</option>

                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-2">
                                            <label for="state1" class="form-label">State</label>
                                            <select class="form-select" id="state1" name="state">
                                                <option selected disabled value="">Choose State...</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label for="validationCustom05" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05"
                                              name="zip"  placeholder="Zip Code.">
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input mt-2" type="checkbox" value=""
                                                id="invalidCheck" required>
                                            <label class="form-check-label " for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit"
                                                    class="btn btn-dark btn-block mt-3 col-6 fw-bold col-4 fs-5">Submit</button>
                                            </div>

                                            <div class="additional-links mt-2 d-flex ">
                                                <div class="m-auto">
                                                    <a href="#" id="forgotPasswordLink">Forgot Password?</a>
                                                </div>
                                                <div class="m-auto">
                                                    <a href="login" id="createAccountLink">Already Account?</a>
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
