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

                          <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/animals" class="nav-item nav-link">Тварини</a>
                            <a href="/shelters" class="nav-item nav-link active">Притулки</a>
                            <a href="/team" class="nav-item nav-link">Наша команда</a>
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

                    <!-- <div class="col-md-3">

                    </div> -->
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->

        <!-- Breadcrumb Start  -->
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
        <!-- Breadcrumb End-->

<!-- 111111111111- -->

<!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">



                        <nav class="navbar bg-light">
                            <ul class="navbar-nav" style="text-success">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Котики</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Собачки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Інші тварини</a>
                                </li>

                            </ul>
                        </nav>
                    </div>



                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="{{asset("images/photo1.jpg")}}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Ви можете обрати собі друга із наявних тварин на сайті</p>

                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="{{asset("images/photo4.jpg")}}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Зареєструйтесь для створення власного притулку</p>

                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="{{asset("images/photo5.jpg")}}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Дадайте тварину у притулок, вказавши повну інформацію про неї</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{asset("images/unnamed.jpg")}}" />
                                <a class="img-text" href="/main">
                                    <p>Тварини</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="{{asset("images/logo 1.png")}}" />
                                <a class="img-text" href="/animals">
                                    <p>Притулки</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->

        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <!-- <div class="brand-item"><img src="img/brand-1.png" alt=""></div> -->
                    <!-- <h2>Наша головна ціль - допомогти тварині знайти турботливу та люблячу сім'ю</h2> -->
                    <div class="brand-item"><h2>Наша </h2></div>
                    <div class="brand-item"><h2>головна </h2></div>
                    <div class="brand-item"><h2>ціль </h2></div>
                    <div class="brand-item"><h2>- </h2></div>
                    <div class="brand-item"><h2>допомогти </h2></div>
                    <div class="brand-item"><h2>тварині </h2></div>
                    <div class="brand-item"><h2>знайти </h2></div>
                    <div class="brand-item"><h2>турботливу </h2></div>
                    <div class="brand-item"><h2>та </h2></div>
                    <div class="brand-item"><h2>люблячу </h2></div>
                    <div class="brand-item"><h2>сім'ю </h2></div>
                  </div>
            </div>
        </div>
        <!-- Brand End -->
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Зв'яжіться з нами</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->
        <!-- Feature Start-->
        <!-- <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">

                            <h2>Будь милосердним</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">

                            <h2>Прихисти тварину з притулка</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">

                            <h2></h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                                  <h2></h2>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End-->

        <!-- Category Start-->
        <!-- <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Category End-->

        <!-- Call to Action Start -->
        <!-- <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Call to Action End -->

        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Наші тварини</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

                  @foreach($animals as $animal)
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="{{action('AnimalController@show',['animal'=>$animal])}}">{{ $animal->name }}</a>
                                            <div class="ratting">

                                            </div>
                                        </div>
                                        <div class="product-image">
                                          <a href="{{action('AnimalController@show',['animal'=>$animal])}}"> <!--// can be redirected on image itself"{{asset("storage/" .$animal->photo) }}"-->
                                              <img src="{{asset("storage/" .$animal->photo) }}" alt="Product Image">
                                          </a>
                                        </div>
                                        <div class="product-price">
                                            <h3><span></span></h3>
                                            <!-- <a class="btn" href="">Детально</a> -->
                                            <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn"><i class="fas fa-hands" style="color: white"></i></a>


                                            <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn" style="color: white">Детальніше</a>
                                        </div>
                                    </div>
                                </div>

                                @endforeach




                </div>
            </div>
        </div>
        <!-- Featured Product End -->

        <!-- Newsletter Start -->
        <!-- <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->


        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">

                  <div class="col-md-6">
                      <div class="review-slider-item">
                          <div class="review-img">
                              <img src="img/review-2.jpg" alt="Image">
                          </div>
                          <div class="review-text">
                              <h2>Customer Name</h2>
                              <h3>Profession</h3>
                              <div class="ratting">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                              </p>
                          </div>
                      </div>
                  </div>

                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Review End -->



  <!-- 11111111111       -->

    </body>
</x-fullapp-layout>
