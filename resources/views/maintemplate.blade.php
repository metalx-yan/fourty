<!DOCTYPE html>
<html lang="en">
@include('templates._head')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        @include('templates._navbar')

        <div class="site-section" id="beranda">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h1 class="text-white serif text-uppercase mb-4"><br></h1>
                        <p class="text-white mb-5"><br></p>
                        <p><a href="#" class="btn btn-white px-4 py-3"></a></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-10">
                        {{-- <img src="{{ asset('images/book_1.png') }}" alt="Image" class="img-fluid"> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light" id="design">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h2 class="heading">Design Interior</h2>
                        {{-- <p>PT. Anugrah Distributor Indonesia adalah sebuah perusahaan care car dan cat semprot yang berlokasi di Jalan Prabu Kian Santang, Tangerang. Perusahaan ini memberikan penyediaan solusi dan layanan perangkat keras serta perangkat lunak tingkat operator yang inovatif. Yang membantu bisnis sepenuhnya mewujudkan janji teknologi dan membantu memaksimalkan nilai teknologi yang Anda butuhkan.</p> --}}
                    </div>
                </div>
                <div class="row">
                    @foreach (App\Product::where('category_id', 1)->get() as $item)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <center><h5 class="card-title">{{ $item->header }}</h5></center>
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="site-section" id="product">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h2 class="heading">Products</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, harum repudiandae provident
                            neque voluptas odio nostrum officiis debitis et vitae, dolorem placeat fugiat recusandae
                            aperiam aspernatur expedita alias, officia. Suscipit!</p>
                        <p class="mb-3">
                            <a href="#" class="customNextBtn">Prev</a>
                            <span class="mx-2">/</span>
                            <a href="#" class="customPrevBtn">Next</a>
                        </p> --}}
                    </div>
                </div>

                <div class="row">
                    @foreach (App\Product::where('category_id', 2)->get() as $item)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <center><h5 class="card-title">{{ $item->header }}</h5></center>
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                    {{-- <a href="#" class="btn btn-primary stretched-link">Go somewhere</a> --}}
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="site-section" id="furniture">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h2 class="heading">Furniture</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, harum repudiandae provident
                            neque voluptas odio nostrum officiis debitis et vitae, dolorem placeat fugiat recusandae
                            aperiam aspernatur expedita alias, officia. Suscipit!</p>
                        <p class="mb-3">
                            <a href="#" class="customNextBtn">Prev</a>
                            <span class="mx-2">/</span>
                            <a href="#" class="customPrevBtn">Next</a>
                        </p> --}}
                    </div>
                </div>

                <div class="row">
                    @foreach (App\Product::where('category_id', 3)->get() as $item)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <center><h5 class="card-title">{{ $item->header }}</h5></center>
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="site-section bg-light" id="jadwal-test">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="heading">Video Product</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-4">
                        <iframe width="650" height="315"
                            src="https://www.youtube.com/watch?v=zyd5kRisWfc&ab_channel=BrocoHomeFurnishing">
                        </iframe>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section py-5 bg-primary">
            <div class="container">
                <h3 class="text-white h4 mb-3 ml-3">Subscribe For The New Updates</h3>
                <div class="d-flex">
                    <input type="text" class="form-control mr-4 px-4" placeholder="Enter your email address...">
                    <input type="submit" class="btn btn-white px-4" value="Send Email">
                </div>
            </div>
        </div>

        @include('templates._footer')
        @include('templates._javascript')


    </div>

</body>

</html>
