<x-fullapp-layout>



    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        intitavn@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +38 067 431 74 24
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->

        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbarNew navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5">
                        <div class="logo">
                            <div class="menuHome" >
                                <h1 class="display-4 text-body" >
                                  <a href="index.html" >
                                    <div class="inline-block">
                                      <div class="fas float-left"><img src="images/logo 1.png">Animal-shelter</div>
                                    </div>
                                  </a>
                                    <!-- <div  class="fas fa-paw"><span>Animal-shelter</span></div> -->
                                </h1>
                              </div>

                        </div>
                    </div>

                    <div class="col-md-3">

                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">



                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/shelters">Притулки</a></li>
                    <li class="breadcrumb-item"><a href="/team">Наша команда</a></li>
                    <!-- <li class="breadcrumb-item active">Product List</li> -->
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Brand Start -->

                <div class="brand">
                    <div class="container-fluid">
                        <div class="brand-slider">
                            <div class="brand-item"><img src="images/1.png" alt="Logo"></div>
                            <div class="brand-item"><img src="images/2.png" alt="Logo"></div>
                            <div class="brand-item"><img src="images/3.png" alt="Logo"></div>
                            <div class="brand-item"><img src="images/1.png" alt="Logo"></div>
                            <div class="brand-item"><img src="images/2.png" alt="Logo"></div>
                            <div class="brand-item"><img src="images/3.png" alt="Logo"></div>
                        </div>
                    </div>
                </div>
                <!-- Brand End -->

        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-12">
                                          <h2> Наші тварини </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- <div class="content">
                          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center"> -->
                              @foreach($animals as $animal)
                              <!-- <div class="card-group"> -->
                            <div class="col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-title">
                                      <a href="{{action('AnimalController@show',['animal'=>$animal])}}">{{ $animal->name }}</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="{{action('AnimalController@show',['animal'=>$animal])}}"> <!--// can be redirected on image itself"{{asset("storage/" .$animal->photo) }}"-->
                                            <img src="{{asset("storage/" .$animal->photo) }}" alt="Product Image">
                                        </a>
                                    </div>
                                  <div class="product-price">
                                    <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn btn-dark">Детальна інформація</a>
                                        <!-- <a class="btn" href="">Детальна інформація</a> -->
                                     </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            @endforeach


                        <!-- Pagination Start -->
                        <div class="col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                      {{ $animals->links() }}
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>
                </div>

                <!-- Side Bar Start -->
                <div class="col-xl-4 sidebar">
                    <div class="sidebar-widget category">
                        <h2 class="title">Category</h2>
                        <nav class="navbarNew bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fac fa-cat"></i>Котики</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fal fa-dog"></i>Собачки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fac fa-dragon"></i>Інші тварини</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="sidebar-widget widget-slider">
                        <div class="sidebar-slider normal-slider">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Animal name 1</a>

                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="images/unnamed.jpg" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Animal name 2</a>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="images/unnamed.jpg" alt="Product Image">
                                    </a>

                                </div>

                            </div>
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Product Name</a>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="images/unnamed.jpg" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <!-- Side Bar End -->
            </div>
        </div>
        </div>
        <!-- Product List End -->


    </body>
</x-fullapp-layout>
