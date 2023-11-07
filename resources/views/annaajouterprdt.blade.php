<!DOCTYPE html>
<html lang="it">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AnnaShop</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @livewireStyles
</head>
<body>
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
          <form action="{{ route('about')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h5>Ajouter un produit</h5>
            <select name="categorie" >
              <option value="">Selectionner une categorie</option>
              <option value="electronique">Electronique</option>
              <option value="vetement">Vetement</option>
              <option value="montre">Montre</option>
              <option value="chaussure">Chaussure</option>
            </select>
            <input name="name" type="text" placeholder="Nom">
            <input name="image" type="file" placeholder="Image">
            <textarea name="description" class="contactTextarea" placeholder="Description"></textarea>
            <button>
              Contattaci
            </button>
          </form>

<style>
  *{
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    border: 0;
  }
  body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  form{
    width: 350px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.1);
  }
  form input, form select{
    outline: none;
    width: 100%;
    padding: 7px 10px;
    background: #fff;
  }
  form input[type="file"]{
    margin-top: 7px;
  }
  form select{
    margin-bottom: 7px;
    background: #fff;
  }
  form h5{
    padding: 5px;
  }
  form button{
    padding: 7px;
    width: 100%;
    color: #ffffff;
    background: #f3c93e;
    margin-top: 10px;
    text-transform: uppercase;
  }
  form button:hover{
    opacity: 0.5;
  }
</style>

@livewireScripts
<!-- jQery -->
<script src="{{  asset('jquery-3.4.1.min.js') }}"></script>
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