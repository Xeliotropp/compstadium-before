<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="active">Начало</a></li>
                        <li class="scroll-to-section"><a href="">За нас</a></li>
                        <li class="scroll-to-section"><a href="/home">Продукти</a></li>
                        <li class="scroll-to-section"><a href="/#services">Услуги</a></li>
                        <li class="scroll-to-section"><a href="/cart">Количка</a></li>
                        @guest
                        <li>
                            <div class="gradient-button"><a id="modal_trigger" href="{{route('login')}}"><i
                                        class="fa fa-sign-in-alt"></i> Вход</a>
                            </div>
                        </li>
                        @endguest
                        @auth
                        <li>
                            <a class="scroll-to-section" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                <i class="fa fa-user-alt">{{ Auth::user()->name }}</i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role_as == 1)
                                <a class="dropdown-item" href="/admin/dashboard">{{__('Админ панел')}}</a>
                                @else
                                <a class="dropdown-item" href="/profile/dashboard">{{__('Профил')}}</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Изход') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
</section>
</div>