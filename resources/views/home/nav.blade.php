<nav class="logoAndNav">
            <a href="{{ route('userpage') }}"><nav class="logo"></nav></a>
            <nav class="nav">
                <ul id="navMenu">
                    <li><a href="#" class="aboutSection">O nas</a></li>
                    <li><a href="{{ route('offer') }}">Oferta</a></li>
                    <li><a href="#" class="opinionSection">Opinie</a></li>
                    <li><a href="#" class="contactSection">Kontakt</a></li>
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
                    <li class="nav-item"><a href="{{ route('login') }}" class="login">Login</a></li>
                    <li class="nav-item2"><a href="{{ route('register') }}" class="register">Register</a></li>
                    @endauth
                    @endif
                    <li><a href="{{url('show_cart')}}"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </nav>
            <i class="fa-solid fa-bars" id="hamburger"></i>
        </nav>