@extends('layouts\main_layout')
@section('main_layout-section')


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

<div class="container-fluid py-2"
        style="background-image: url('{{ asset('#') }}');"
        class="img-fluid"data-aos="zoom-in-right" data-aos-duration="2000">
    </div>
    <div class="container-fluid">


        <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <div class="col-sm-7 p-3 ">

                <form class="p-5  box mb-5" method="get">
                    <h2 class="fw-bold root py-3 text-light">Send Us Email</h2>
                    <div class="row d-flux justify-content-center">
                        <div class="form-group col-sm-5 mb-4 col-sm-6"><input type="text"
                                class="form-control fs-5 text-center" name="name" placeholder="Enter your name"
                                style="border-radius: 1px; height: 8vh; background: #d9d9d9;"> </div>

                        <div class="form-group col-sm-5 mb-4 col-sm-6"> <input type="email"
                                class="form-control fs-5 text-center" name="email" placeholder="Enter You Email"
                                style="border-radius: 1px; height: 8vh; background: #d9d9d9;"> </div>
                    </div>

                    <div class="row d-flux justify-content-center ">
                        <div class="form-group col-sm-5 mb-4 col-sm-6"><input type="text"
                                class="form-control fs-5 text-center" name="topic" placeholder="Topic"
                                style="border-radius: 1px; height: 8vh; background: #d9d9d9;"> </div>

                        <div class="form-group col-sm-5 mb-4 col-sm-6"> <input type="text"
                                class="form-control fs-5 text-center" name="phone" placeholder="Mobile No."
                                style="border-radius: 1px; height: 8vh; background: #d9d9d9;"> </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-sm-12 ">
                            <textarea name="msg" rows="5" row="100" placeholder="Message" class="form-control mb-3 fs-5 ps-4"
                                style=" background: #d9d9d9;"></textarea>
                        </div>

                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-outline  btn-lg col-sm-5 m-auto text-secondary bg-warning fw-bold"
                            style="border-radius: 1px; height: 8vh; background: #d9d9d9;">Send A Message</button>
                    </div>
                </form>
            </div>



            {{-- div2 --}}
            <div class="col-sm-5 py-5">
                <h2 class="fw-bold root mt-4 text-light">Get in touch with us</h2>
                <p class="fs-5 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis exercitationem ipsam
                    totam nostrum
                    aliquam quam, officia modi, iure architecto dignissimos in? Quo architecto, omnis voluptas inventore
                    numquam nesciunt libero ex?
                </p>

                <div class="mb-2 d-flex ">
                    <span> <x-ionicon-call class="p-3 text-light" height="10vh" width="10vh"
                            style="border-radius:50%; background: orange;" /></span>
                    <p class="fs-5 ps-3"><small>any questions?</small><br>
                        +99-999-999-9999</p>
                </div>

                <div class="mb-2 d-flex">
                    <span> <x-ionicon-mail-open-outline class="p-3 text-light" height="10vh" width="10vh"
                            style="border-radius:50%; background: orange;" /></span>

                    <p class="fs-5 ps-3"><small>Write a mail</small><br>
                        abcd@domainname.com</p>
                </div>

                <div class="mb-2 d-flex">
                    <span> <x-ionicon-location-outline class="p-3 text-light" height="10vh" width="10vh"
                            style="border-radius:50%; background: orange;" /></span>
                    <p class="fs-5 ps-3"><small>Visit any time</small><br>
                        123, Street Name, Location, Landmark, City, Pincode</p>
                </div>

            </div>
        </div>
    </div>







</div>

@endsection
