<x-fullapp-layout>


      <x-slot name="title">
        Shelter
      </x-slot>

  <x-slot name="header">

  </x-slot>

  <body>

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
                                  <div class="row">
                                      <div class="col-md-12">
                                        <h2> Діючі притулки </h2>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <!-- <div class="content">
                        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center"> -->
                            @foreach($shelters as $shelter)
                            <!-- <div class="card-group"> -->
                          <div class="col-md-4 col-sm-6">
                            <div class="card-group text-center product-item">
                              <div class="card mb-4 shadow-sm">
                              <div class="card-header text-white bg-dark product-title">
                                <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
                              </div>
                              <div class="card-body d-flex flex-column">
                                <div class="img-round mt-0 mb-3" >
                                  @isset($shelter->logo)
                                    <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
                                  @else
                                    <img src="{{asset('images/default_logo.jpg')}}" alt="" title="">
                                  @endisset
                                </div>
                                <div class="mt-auto">
                                <form  action="/shelters/{{$shelter->id}}" method="get">
                                      <button type="submit" class="w-75 btn btn-new">Детальніше</button>
                                </form>
                              </div>
                              </div>
                            </div>
                            </div>
                          </div>
                          @endforeach


                      <!-- Pagination Start -->
                      <div class="col-sm-12">
                          <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-center">
                                    {{ $shelters->links() }}
                              </ul>
                          </nav>
                      </div>
                      <!-- Pagination Start -->
                  </div>
              </div>

              <!-- Side Bar Start -->
              <div class="col-xl-4 sidebar">
                <div class="col-md-12 text-center">
                    <div class="product-view-top">
                        <div id="our-shelters-anchor" class="row">
                            <div class="col-md-12">
                              <h2> Наші тварини </h2>
                  <!-- <div class="sidebar-widget widget-slider"> -->
                              <div class="sidebar-slider normal-slider ">
                                  @foreach($animals as $animal)
                                    <div class="product-item pt-5">
                                        <div class="product-title">
                                            <a href="{{route('animals.show',[$animal->id])}}">{{$animal->name}}</a>
                                        </div>
                                        <div class="product-image">
                                            <a href="{{route('animals.show',[$animal->id])}}">
                                              @if(is_null($animal->photo))
                                              <img src="{{ asset('images/default_img.jpg') }}" alt="Product Image">
                                              @else
                                              <img src="{{asset("storage/" .$animal->photo) }}" alt="Product Image">
                                              @endif
                                                <!-- <img src="{{asset("storage/" .$animal->photo) }}" alt="Product Image"> -->
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
                </div>
                  <!-- </div> -->
              </div>
              <!-- Side Bar End -->
          </div>
      </div>
      </div>
      <!-- Product List End -->

  <!-- <div class="content">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      @foreach($shelters as $shelter)
          <div class="card-group">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <div class="img-round mt-0 mb-3" >
                @isset($shelter->logo)
                  <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
                @else
                  <img src="{{asset('images/default_logo.jpg')}}" alt="" title="">
                @endisset
              </div>
              <ul class="list-unstyled mt-3 mb-4">
                  <li >&nbsp;{{$shelter->address}}&nbsp;</li>
                  <li>&nbsp;{{$shelter->mail}}&nbsp;</li>
                  <li>&nbsp;{{$shelter->phone}}&nbsp;</li>
              </ul>
              <div class="mt-auto">
              <form  action="/shelters/{{$shelter->id}}" method="get">
                    <button type="submit" class="w-75 btn btn-dark">Детальніше</button>
              </form>
            </div>
            </div>
          </div>
          </div>
      @endforeach
    </div>
  </div> -->


</x-fullapp-layout>
