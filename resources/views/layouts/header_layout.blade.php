{{-- header --}}
<header style="background: ">
    <div class="container-fluid" style=" background:#fbd871 ;">
        <div class="row py-3 border-bottom">

            <div
                class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
                <div class="d-flex align-items-center my-3 my-sm-0">
                    <a href="index.html">
                        <img src="images/logo.svg" alt="logo" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#menu"></use>
                    </svg>
                </button>
            </div>
            {{-- drop down category --}}
            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
                <div class="search-bar row bg-light p-2 rounded-4">
                    <div class="col-md-4 d-none d-md-block p-1">
                        <select class="form-select border-0 bg-transparent">
                            <option>All Categories</option>
                            <option>Groceries</option>
                            <option>Drinks</option>
                            <option>Chocolates</option>
                        </select>
                    </div>
                    {{-- Search --}}
                    <div class="col-10 col-md-7">
                        <form id="search-form" class="text-center" action="index" method="post"
                            onsubmit="return performSearch();">
                            <input type="text" id="search-input" class="form-control border-0 bg-transparent "
                                placeholder="Search for more than 20,000 products">
                        </form>
                    </div>


                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                        </svg>
                    </div>
                </div>
            </div>

            {{-- start nav --}}
            <div class="col-lg-4 ">
                <ul
                    class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold  text-dark">
                    <li class="nav-item active">
                        <a href="{{ asset('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ asset('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ asset('contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown"
                            aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu border-0 p-3 rounded-0 shadow " aria-labelledby="pages"
                            style="opacity:.9">
                            <li><a href="/" class="dropdown-item">Shop </a></li>
                            <li><a href="#" class="dropdown-item">Single Product </a></li>
                            <li><a href="#" class="dropdown-item">Cart </a></li>
                            <li><a href="#" class="dropdown-item">Checkout </a></li>
                            <li><a href="#" class="dropdown-item">Blog </a></li>
                            <li><a href="#" class="dropdown-item">Single Post </a></li>
                            <li><a href="#" class="dropdown-item">Styles </a></li>
                            <li><a href="#" class="dropdown-item">Thank You </a></li>
                            <li><a href="#" class="dropdown-item">My Account </a></li>
                            <li><a href="#" class="dropdown-item">404 Error </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            {{-- end nav --}}

            {{-- icons  header --}}
            <div
                class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
                <ul class="d-flex justify-content-end list-unstyled m-0 m-auto">
                    {{-- user login --}}
                    <li>
                        <!-- Button trigger modal -->
                        <a href="login" class="p-2 mx-1" data-bs-toggle="modal" data-bs-target="#welcomeModal">
                            <svg width="24" height="24">
                                <use xlink:href="#user"></use>
                            </svg>
                        </a>
                    </li>
                    {{-- wishlist --}}
                    <li>
                        <a href="#" class="p-2 mx-1">
                            <svg width="24" height="24">
                                <use xlink:href="#wishlist"></use>
                            </svg>
                        </a>
                    </li>
                    {{-- cart --}}
                    <li>
                        <a href="#" class="p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                            aria-controls="offcanvasCart">
                            <svg width="24" height="24">
                                <use xlink:href="#shopping-bag"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>


    {{-- Login Modal Form --}}
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="welcomeModal">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content card p-1">

                    <!-- Modal Body -->
                    <div class="modal-body"
                        style="background-image: url('{{ asset('images/banner-ad-1.jpg') }}'); border-radius: 30px;"
                        class="img-fluid ">
                        <h4 class="modal-title display-4 text-center fw-bold m-auto text-warning">Welcome Back!</h4>
                        <p class="fs-2 text-light text-center">Join my Organic Foods at your Doorsteps step by step
                            through
                            engaging,
                            real-world
                            lessons!</p>
                        <div><img src="images/line.png" alt="line" height="5px" width="100%"></div>
                        <div class="row justify-content-center d-flex">
                            <div class="col">
                                <h5 class="fw-bold fs-3  mt-2 text-light ms-5">Existing account?</h5>
                                <a href="{{ asset('login') }}"><button
                                        class="btn btn-warning btn-lg col-sm-4 fw-bold text-dark mt-3 ms-5"
                                        data-bs-toggle="modal" data-bs-target="#LoginModal" type="button">
                                        LogIn</button></a>
                            </div>
                            <div class="col">
                                <h5 class="fw-bold fs-3 mt-2 text-light ms-5">No account yet?</h5>
                                <a href="{{ asset('signupform') }}"> <button
                                        class="btn btn-warning btn-lg col-sm-4 fw-bold text-dark mt-3 ms-5">Sign
                                        Up</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>




</header>
