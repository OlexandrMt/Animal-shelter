<x-fullapp-layout>

  <x-slot name="head">
    <x-head.head>
      <x-slot name="headCommon">
        <x-head.headCommon title="Shelter"/>
      </x-slot>
    </x-head.head>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </x-slot>



  <x-slot name="header">
    <x-header.header-combined  />
    <!-- :loginClass="$loginClass" :loginBtnText="$loginBtnText" -->
  </x-slot>




  <div class="content">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      @foreach($shelters as $shelter)
          <div class="col">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
            </div>
            <div class="card-body">
              <div class="img-round">
                @if($shelter->logo==NULL) @php $shelter->logo = "images/shalter_logos/defaultimg.jpg" @endphp  @endif
                <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
              </div>

              <ul class="list-unstyled mt-3 mb-4">
                <li>&nbsp;{{$shelter->address}}&nbsp;</li>
                <li>&nbsp;{{$shelter->mail}}&nbsp;</li>
                <li>&nbsp;{{$shelter->phone}}&nbsp;</li>
              </ul>
              <form action="shelters/{{$shelter->id}}" method="get">
                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Look closer</button>
              </form>
            </div>
          </div>
          </div>
      @endforeach
    </div>
  </div>


  <x-slot name="auth">
    <x-auth.auth hidden="hidden" active="">
      <x-slot name="closeBtn">
        <x-auth.closeBtn/>
      </x-slot>
    </x-auth.auth>
  </x-slot>

  <x-slot name="scripts">
    <x-scripts.scripts/>
  </x-slot>

</x-fullapp-layout>
