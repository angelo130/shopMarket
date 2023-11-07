<!DOCTYPE html>
<html lang="it">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{  asset('images/fevicon.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AnnaShop</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{  asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{  asset('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{  asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{  asset('css/responsive.css') }}" rel="stylesheet" />
  @livewireStyles
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : annashopstore1@gmail.com
                </span>
              </a>
            </div>
            <livewire:search /> 
            <div class="user_option_box">
              <div class="cart cart box_1"> 
                <form action="#" method="post" class="last"> 
                  <input type="hidden" name="cmd" value="_cart" />
                  <input type="hidden" name="display" value="1" />
                  <button class="cart-link" type="submit" name="submit" value=""><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>
                      Cart
                    </span></button>
                </form>   
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ route('index') }}">
              <span>
                AnnaShop
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('index') }}">Casa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}"> Di</a>
                </li>
                <li class="nav-item dropdown active">
                  <a href="#" class="nav-link" >Prodotti</a>
                  <div class="dropdown-content">
                    <div>
                      <a href="{{ route('electronique') }}">Elettronica</a>
                      <a href="{{ route('vetement') }}">vestiti</a>
                      <a href="{{ route('chaussure') }}">Scarpe</a>
                      <a href="{{ route('montre') }}">Orologi</a>
                    </div>
                </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('why') }}">Perché noi</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>    
          Vestiti
        </h2>
      </div>
      <div class="row">
        @foreach ($allproduct as $produit)
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="{{  asset('images/'.$produit['imageLink'].'') }}" alt="">
              </div>
              <div class="detail-box">
                <div class="price-fa">
                  <h5 class="pruductName">
                    {{ $produit['name'] }}
                  </h5>
                  @if ($produit['numbStar'] == 5)

                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                    
                  @elseif($produit['numbStar'] == 4.5)

                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                  </div>
                    
                  @elseif ($produit['numbStar'] == 4)

                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </div>

                  @endif
                  
                </div>
                <div class="product_info">
                    <div class="allprice">
                      <h5 class="h51">
                        <span>€</span> {{ $produit['price'] }}
                      </h5>
                      <h5 class="h52">
                        <span>€</span> {{ $produit['price'] - ((10*$produit['price'])/100) }}
                      </h5>
                    </div>
                  <button class="view-more" data-toggle="modal" data-target="#myModal1" data-product="{{ json_encode($produit) }}">Vedi altro</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach


    <div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
      <div class="modal-dialog modal-lg" role="document" style="margin-top: 6rem">
        <div class="modal-content">
          <div class="modal-header" style="border: none; min-height: 2.5em; padding: 0em 1em 0; margin-top: 5px;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: 0;"><span aria-hidden="true">&times;</span></button>						
          </div>
          <section style="padding-top: 0px;" class="sessionModal">
            <div class="img col-md-5 sessionModal-div1">
              <div class="img-box" style="
              background-color: #f8f8f8; display: flex; justify-content: center; align-items: center;width: 100%; height: 321px;">
                <img src="" alt="Product Image" id="modalProductImage" style="height: 175px;
                max-width: 100%;">
              </div>
            </div>
            <div class="left col-md-7 sessionModal-div2">
              <h2 id="modalProductName">Name of product</h2>
              <p id="modalProductDescription">description Lorem ipsum...</p>
              <div class="detail-box">
                <div class="price-fa starModalResponsive">
                  <div class="star_container" style="color: #f3c93e;">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>               
                </div>
                <div class="product_info">
                  <div class="allprice info allpriceModal">
                    <h5 class="h51">
                      <span>€</span> <span id="modalProductPrice"></span>
                    </h5>
                    <h5 class="h52">
                      <span>€</span> <span id="modalProductDiscountedPrice"></span>
                    </h5>
                  </div>
                  <form action="#" method="post">
                      <input type="hidden" name="cmd" value="_cart" />
                      <input type="hidden" name="add" value="1" /> 
                      <input type="hidden" name="w3ls_item" value="" id="inputName"/> 
                      <input type="hidden" name="amount" value="" id="inputPrice"/>   
                      <button type="submit" class="w3ls-cart add_cart_btn view-more">Aggiungi al carrello</button>
                  </form>
                 </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#myModal1').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); // Le bouton "Vedi altro" cliqué
          var productData = button.data('product'); // Récupère les données du produit
          var modal = $(this);
          // Mettez à jour les éléments du modal avec les données du produit
          modal.find('#modalProductImage').attr('src', '{{ asset("images/")}}'+ '/' + productData.imageLink );
          modal.find('#modalProductName').text(productData.name);
          modal.find('#modalProductDescription').text(productData.description);
          modal.find('#modalProductPrice').text(productData.price);
          modal.find('#inputPrice').attr('value',  productData.price - ((productData.price*10)/100) );
          modal.find('#inputName').attr('value',  productData.name);
          modal.find('#modalProductDiscountedPrice').text(productData.price - ((productData.price*10)/100));
          
          // Vous pouvez également ajouter du code pour gérer l'ajout au panier ici
          // En utilisant les données du produit.
        });
      });
    </script>

      </div>
    </div>
  </section>

  <!-- end product section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              <a href="" class="navbar-brand">
                <span>
                  AnnaShop
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Indirizzo
            </p>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
              +01 1234567890
            </p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              annashopstore1@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_links">
            <h5>
              Collegamento utile
            </h5>
            <ul>
              <li>
                <a href="{{ route('index') }}">
                  Casa
                </a>
              </li>
              <li>
                <a href="{{ route('about') }}">
                  Di
                </a>
              </li>
              <li>
                <a href="{{ route('electronique') }}">
                  Prodotti
                </a>
              </li>
              <li>
                <a href="{{ route('why') }}">
                  Perché noi
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_form ">
            <h5>
              Notiziario
            </h5>
            @php
              $it = session('resultMail');
            @endphp
            @isset($it)

              @if ($it)
                <script>
                  Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Mail bien envoyer',
                    showConfirmButton: false,
                    timer: 3000
                  })
                </script>
              @else
              <script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Mail bien envoyer',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>
              @endif
              @php
                session()->forget('resultMail');
              @endphp
              
            @endisset
            <form action="{{ route('contact')}}" method="post">
              @csrf
              <input name="email" type="email" placeholder="Inserisci il tuo indirizzo email">
              <textarea name="message" class="contactTextarea" placeholder="Inserisci il tuo messaggio"></textarea>
              <button>
                Contattaci
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  @livewireScripts
  <!-- jQery -->
  <script src="{{  asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{  asset('js/bootstrap.js') }}"></script>
  <!-- custom js -->
  <script src="{{  asset('js/custom.js') }}"></script>

  <script src="{{  asset('js/minicart.js') }}"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script> 
</body>

</html>