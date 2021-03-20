<x-fullapp-layout>



    <body>

<!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">



                        <nav class="navbarNew bg-light">
                            <ul class="navbar-nav text-success">
                              <li class="nav-item">
                                    <form action="{{ route('animals.index').'#our-animals-anchor' }}">
                                      <input type="hidden" name="type" value='кіт'>
                                      <button type="submit"><a><i class="fas fa-cat"></i>Котики</a></button>
                                    </form>
                                </li>
                                <li class="nav-item">
                                  <form action="{{ route('animals.index').'#our-animals-anchor' }}">
                                    <input type="hidden" name="type" value='пес'>
                                    <button type="submit"><a><i class="fas fa-dog"></i>Собачки</a></button>
                                  </form>
                                </li>
                                <li class="nav-item">
                                  <form action="{{ route('animals.index').'#our-animals-anchor' }}">
                                    <input type="hidden" name="type" value='інше'>
                                    <button type="submit"><a><i class="fas fa-dragon"></i>Інші тварини</a></button>
                                  </form>
                                </li>
                                <li class="nav-item">
                                  <form action="{{ route('animals.index').'#our-animals-anchor' }}">
                                    <input type="hidden" name="type" value=''>
                                    <button type="submit"><a><i class="fas fa-paw"></i>Усі</a></button>
                                  </form>
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
                                <a class="img-text" href="/animals">
                                    <p>Тварини</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="{{asset("images/logo 1.png")}}" />
                                <a class="img-text" href="/shelters">
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
                          <!-- <a class="contactLink" href="/contact/developers">Написати розробникам</a> -->
                            <!-- <input type="email" value="Your email here"> -->
                            <button> <a class="contactLink" href="/contact/developers">Написати розробникам</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter  and-->
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
                                            <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn"><i class="fas fa-hands"></i></a>
                                            <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn">Детальніше</a>
>>>>>>> dev
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                </div>
            </div>
        </div>
        <!-- Featured Product End -->


        <div class="container-fluid">
            <div class="section-header">
                <h1>Наша команда</h1>
            </div>

        </div>

        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
  @foreach($teams as $team)
                  <div class="col-md-6">
                      <div class="review-slider-item">
                            <div class="review-img">
                              <img src={{asset( ($team["ava"])) }} alt="Image">
                          </div>
                          <div class="review-text">
                              <h2>{{ ($team["name"]) }}</h2>
                              <!-- <h3>Profession</h3>
                              <div class="ratting">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div> -->
                              <p>

                              </p>
                          </div>
                      </div>
                  </div>
                  @endforeach

                </div>
            </div>
        </div>
        <!-- Review End -->

    </body>
</x-fullapp-layout>
