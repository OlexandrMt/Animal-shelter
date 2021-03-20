<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Animal-shelter</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <link href="{{asset('scripts/libs/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('scripts/libs/slick/slick-theme.css')}}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
          <!-- <script src="/public/lib/slick/slick.min.js"></script>
          <script src="/public/js/main.js"></script> -->

        <!-- Template Stylesheet -->
        <link href="{{asset('css/stylegreen.css')}}" rel="stylesheet">
    </head>

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
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
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
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="logo">
                          <!-- <form action="/">
                    				<button  class="fas fa-paw"><span>Animal-shelter</span></button>
                    			</form> -->
                            <!-- <a href="index.html">
                                <img src="images/logo 1.png" alt="Logo">
                                                            </a> -->
                            <!-- <h3 class="display-4,text-body">  Animal-shelter </h3> -->
                            <div class="menuHome">
                                <h1 class="display-4,text-body">
                                  <a href="index.html">
                                  <div class="fas"> <img src="{{asset('images/logo 1.png')}}" alt="Logo"><span>Animal-shelter</span></div>
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

        <!-- Product Detail Start -->
                <div class="product-detail">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="product-detail-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="product-slider-single normal-slider">

                                                <img src="{{asset("storage/" .$animal->photo) }}" alt="Product Image">

                                                <!-- <img src="img/product-3.jpg" alt="Product Image">
                                                <img src="img/product-5.jpg" alt="Product Image">
                                                <img src="img/product-7.jpg" alt="Product Image">
                                                <img src="img/product-9.jpg" alt="Product Image">
                                                <img src="img/product-10.jpg" alt="Product Image"> -->

                                            </div>
                                            <div class="card-body text-center">
                                              <form action="/notifications/create" method="get">
                                                <input type="hidden" name="animal_id" value='{{$animal->id}}'>
                                                <button type="submit" class="w-75 btn btn-dark mb-1">Хочу собі <i class="fas fa-hands"></i></button>
                                              </form>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="product-content">



                                                <div class="card-body">
                                                  <h2 class="margin"> {{ $animal->name }}</h2>
                                                  <p class="card-text"> Тип:
                                                    @if(is_null($animal->type))
                                                    Не вказано
                                                    @else {{ $animal->type}}
                                                  @endif</p>
                                                  <p class="card-text"> Порода:
                                                    @if(is_null($animal->breed))
                                                    Не вказано
                                                    @else {{ $animal->breed}}
                                                  @endif</p>
                                                  <p class="card-text">Вік:
                                                    @if(is_null($animal->age))
                                                    Не вказано
                                                    @else {{ $animal->age}}
                                                    @endif
                                                  </p>
                                                  <p class="card-text">Стать: @if(is_null($animal->sex))
                                                  Не вказано
                                                  @elseif($animal->sex==1)
                                                  Cамець
                                                  @else
                                                  Самка
                                                  @endif </p>
                                                  <p class="card-text"> Статус: @if(is_null($animal->status))
                                                  Не вказано
                                                  @elseif($animal->status==1)
                                                  Прихищений
                                                  @else
                                                  Вільний
                                                  @endif </p>
                                                  <!-- <p class="card-text">Моя історія:
                                                    @if(is_null($animal->description))
                                                    Не вказано
                                                    @else {{ $animal->description}}
                                                    @endif</p> -->

                                                    <div class="input-group">
                                                        <form action="/animals/{{ $animal->id }}/edit" method="get">
                                                          @csrf
                                                          <!-- <input type="submit" class="btn-success" value=" Редагувати "> -->
                                                          <button type="submit" class="btn btn-dark">Редагувати </i></button>
                                                          @method('GET')
                                                        </form>
                                                    </div>
                                            <br>
                                                    <div class="input-group">

                                                        <form action="/animals/{{ $animal->id }}" method="post">
                                                          @csrf
                                                          <!-- <input type="submit" class="btn-success" value=" Видалити "> -->
                                                          <button type="submit" class="btn btn-dark">Видалити </i></button>
                                                          @method('DELETE')
                                                        </form>

                                                    </div>
                                                   </p>
                                                </div>

                                                <!-- <div class="action">
                                                  @csrf
                                                    <a class="btn" href="/animals/{{ $animal->id }}" method="post">Редагувати</a>
                                                      @method('GET')
                                                        @csrf
                                                    <a class="btn" href="/animals/{{ $animal->id }}"method="get">Видалити</a>
                                                    @method('DELETE')
                                                  </div> -->




                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row product-detail-bottom">
                                    <div class="col-lg-12">
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="#description">Моя історія</a>
                                            </li>


                                        </ul>

                                        <div class="tab-content">
                                            <div id="description" class="container tab-pane active">
                                                <h4>@if(is_null($animal->description))
                                                Не вказано
                                                @else {{ $animal->description}}
                                                @endif </h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                             </div>


                             <!-- Side Bar Start -->
                             <div class="col-xl-4 sidebar">
                                 <div class="sidebar-widget category">
                                     <h2 class="title">Category</h2>
                                     <nav class="navbar bg-light">
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


                             </div>
                             <!-- Side Bar End -->


                        </div>
                    </div>
                </div>
                <!-- Product Detail End -->








        <!-- Brand Start -->
                <div class="brand">
                    <div class="container-fluid">
                        <div class="brand-slider">
                            <div class="brand-item"><img src="{{asset('images/1.png')}}" alt="Logo"></div>
                            <div class="brand-item"><img src="{{asset('images/2.png')}}" alt="Logo"></div>
                            <div class="brand-item"><img src="{{asset('images/3.png')}}" alt="Logo"></div>
                            <div class="brand-item"><img src="{{asset('images/1.png')}}" alt="Logo"></div>
                            <div class="brand-item"><img src="{{asset('images/2.png')}}" alt="Logo"></div>
                            <div class="brand-item"><img src="{{asset('images/3.png')}}" alt="Logo"></div>

                        </div>
                    </div>
                </div>
                <!-- Brand End -->




        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2> Студентський проект</h2>

                            <h2 class="display-4"><i class="fas fa-paw">Animal-shelter</i></h2>
                            <div class="contact-info">
                              <!-- <p><i> </i>Студентський проект</p> -->
                                <p><i class="fa fa-map-marker"></i>IT Academy by Vinnitsya</p>
                                <p><i class="fa fa-envelope"></i>intitavn@gmail.com</p>
                                <p><i class="fa fa-phone"></i>тел. моб: +38 067 431 74 24</p>
				<p><i class="fa fa-phone"></i>тел. моб: +38 073 209 97 43</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('scripts/libs/easing/easing.min.js')}}"></script>
        <script src="{{asset('scripts/libs/slick/slick.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
