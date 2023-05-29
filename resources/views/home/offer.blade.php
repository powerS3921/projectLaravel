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
    <nav class="logoAndNav">
            <a href="{{ route('userpage') }}"><nav class="logo"></nav></a>
            <nav class="nav">
                <ul id="navMenu">
                    <li><a href="{{ route('userpage') }}" class="aboutSection">O nas</a></li>
                    <li><a href="{{ route('offer') }}">Oferta</a></li>
                    <li><a href="{{ route('userpage') }}" class="opinionSection">Opinie</a></li>
                    <li><a href="{{ route('userpage') }}" class="contactSection">Kontakt</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" id="logincss" class="btn btn-primary">
                                        {{ __('Log Out') }}
                                </button>
                            </form>
                    </li>

                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>
                    <li class="nav-item2"><a href="{{ route('register') }}" class="btn btn-success">Register</a></li>
                    @endauth
                    @endif
                    <li><a href="{{url('show_cart')}}"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </nav>
            <i class="fa-solid fa-bars" id="hamburger"></i>
        </nav>
       @include('home.header');
        @include('home.offerSection');
        @include('home.footer');
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="home/js/jQuery.js"></script>
    <script src="home/js/script.js"></script>
    <script src="home/js/swiper2.js"></script>
    <script src="home/js/swiper1.js"></script>
    <script src="home/js/api.js"></script>
</body>
</html>