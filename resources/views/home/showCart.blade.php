<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        @include('home.nav');
        @include('home.header');
        <h1 class="headerBeforeSection">Twój koszyk</h1>
        
        <div class="sectionColor">
        @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
            <?php $totalprice=0; ?>
            @foreach($cart as $cart)
            <div class="cart">
           
                <div class="image"><img src="/product/{{$cart->image}}"></div>
                <div class="titleAndPrice">
                    <p>Nazwa usługi: {{$cart->product_title}}</p>
                    <p>Cena: {{$cart->price}}PLN</p>
                    <p>Ilość: {{$cart->quantity}}</p>
                </div>
                
                    <a class="buttonCart" onclick="return confirm('Czy na pewno chcesz usunąc ten produkt?')" href="{{url('remove_cart',$cart->id)}}">Delete</a>
            
                
                
            </div>
            <?php $totalprice=$totalprice + $cart->price?>
            @endforeach
            <div class="totalPrice">
                Cena wszystkich usług: <b>{{$totalprice}}PLN</b>
            </div>
            <div class="order">
                <h2>Kliknij zaby zamówić</h2>
                <a href="{{url('cash_order')}}" class="orderButton">Zamów</a>
            </div>

            
        </div>
        @include('home.footer');
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="home/js/jQuery.js"></script>
    <script src="home/js/script.js"></script>
    <script src="home/js/swiper2.js"></script>
    <script src="home/js/swiper1.js"></script>
    
</body>
</html>