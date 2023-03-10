<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Rentsng - Rentsng.com</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />

      <link href="home/css/search.css" rel="stylesheet" />
      <link href="home/css/searchListingPage.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->

         @include('home.search')










     <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>

        <div class="h-line bg-dark"></div>

      </div>
<section class="sidebarListing">

<div class="container-sm listing-container">
 <div class="row">



    <div class="col-lg-4" style="background-color: #00BFFF">
        <div class="card" >
            <div class="row">
                <div class="container">
                    <div class="col-lg-8">
                        <h4 class="header-text">Facilities Needed</h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            10,000 - 20,000
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            30,000 - 40,000
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            50,000 - 60,000
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            70,000 - 80,000
                           </label>


                    </div>

                    <div class="col-lg-8">
                        <h4 class="header-text">Star Rating</h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            1k - 3k Likes
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            3k - 5k Likes
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            5k - 8k Likes
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            8k  - 10k Likes
                           </label>


                    </div>

                    <div class="col-lg-8">
                        <h4 class="header-text">Property Accessibility </h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            Shower
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Raised toilet
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Toilet with grab rails
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Entire unit wheelchair accessible
                           </label>


                    </div>

                    <div class="col-lg-8">
                        <h4 class="header-text">Neighborhood </h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            Lekki Phase 1
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Victoria Island
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Ikoyi
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Lagos Mainland
                           </label>


                    </div>
                </div>

            </div>





        </div>
  </div>



      <div class="col-lg-8  px-2" >
        @foreach ($data as $product)
        <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center" >
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="product/{{$product->images[0]->image}}" style="height:300px; width:350px !important" alt="">
            </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3"> {{$product->title}} </h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">${{$product->price}} per night </h6>
            <a href="{{url('/property',$product->id)}}" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
          </div>
        </div>


        </div>


        @endforeach
        <div class="d-flex justify-content-center">
            {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
       </div>

        </div>
      </div>



</div>

</section>




      <!-- footer start -->
      @include('home.footer');
      <!-- footer end -->

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
