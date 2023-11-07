
<!doctype html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta  name = "viewport" content = "width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PayPal Paiment</title>
        <link rel="stylesheet" href="style.css">
</head>
<style>
    .payBody{
        display: flex;
        text-align: center;
        justify-content: center;
    }
    .pbuttons{
        margin: 0 auto;
    }
</style>
<body class="payBody">
    
    </body>

    <script src="https://www.paypal.com/sdk/js?client-id=AULzr0Jwyppl-jqbQvQM0rE9vHrPi1zZ6UNTGYE2HPAKk8MTCRvWBYn8vbVuig5oHPD_rerKC-8O5sPT&currency=EUR&components=buttons"></script>
    
    <script>
        paypal.Buttons({
    createOrder : function(data, actions){
        return actions.order.create({
            purchase_units : [{
                amount:{
                    value : {{ $price }}//renseigner le montant que la personne doit verser sur votre compte
                }
            }]
        });
    },
    onApprove: function(data, actions) {

        alert('Hai creato con successo l\'abbonamento ' + data.subscriptionID); //message d'alerte quand le paiment est effectué
    
      }
}).render('body'); 
    </script>
    </html>