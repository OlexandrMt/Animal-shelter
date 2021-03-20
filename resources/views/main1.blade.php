<x-fullapp-layout>



    <body>

        <!-- <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5">
                        <div class="logo">
                            <div class="menuHome" >
                                <h1 class="display-4 text-body" >
                                  <a href="{{route('animals.main')}}" >
                                    <div class="inline-block">
                                      <div class="fas float-left"><img src="images/logo 1.png">Animal-shelter</div>
                                    </div>
                                  </a>
                                </h1>
                              </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Bottom Bar End -->

        <!-- Brand Start -->
                <!-- <div class="brand">
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
                </div> -->
                <!-- Brand End -->

        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="product-view-top">
                                    <div id="our-animals-anchor" class="row">
                                        <div name="our-animals" class="col-md-12">
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
                                    <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn-new ">Детальна інформація</a>
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
                        <h2 class="title">Категорії</h2>
                        <nav class="navbarNew bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <form action="{{ route('animals.main').'#our-animals-anchor' }}">
                                      <input type="hidden" name="type" value='кіт'>
                                      <button type="submit"><a><i class="fas fa-cat"></i>Котики</a></button>
                                    </form>
                                </li>
                                <li class="nav-item">
                                  <form action="{{ route('animals.main').'#our-animals-anchor' }}">
                                    <input type="hidden" name="type" value='пес'>
                                    <button type="submit"><a><i class="fas fa-dog"></i>Собачки</a></button>
                                  </form>
                                </li>
                                <li class="nav-item">
                                  <form action="{{ route('animals.main').'#our-animals-anchor' }}">
                                    <input type="hidden" name="type" value='інше'>
                                    <button type="submit"><a><i class="fas fa-dragon"></i>Інші тварини</a></button>
                                  </form>
                                </li>
                                <li class="nav-item">
                                  <form action="{{ route('animals.main').'#our-animals-anchor' }}">
                                    <input type="hidden" name="type" value=''>
                                    <button type="submit"><a><i class="fas fa-paw"></i>Усі</a></button>
                                  </form>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="sidebar-widget widget-slider">
                        <div class="sidebar-slider normal-slider">
                          @foreach($animals as $animal)
                            <div class="product-item pt-5">
                                <div class="product-title">
                                    <a href="{{route('animals.show',[$animal->id])}}">{{$animal->name}}</a>
                                </div>
                                <div class="product-image">
                                    <a href="{{route('animals.show',[$animal->id])}}">
                                        <img src="{{asset("storage/" .$animal->photo) }}" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="{{route('animals.show',[$animal->id])}}"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                          @endforeach
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
