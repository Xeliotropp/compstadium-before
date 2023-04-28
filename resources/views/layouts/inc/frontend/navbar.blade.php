<div>
    <section>
        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0s">
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
                        <li class="scroll-to-section"><a href="/collections">Категории</a></li>
                        <li class="scroll-to-section"><a href="/about">За нас</a></li>
                        <li class="scroll-to-section"><a href="/cart">Количка (
                                <livewire:frontend.cart.cart-count />)
                            </a></li>
                        <li class="scroll-to-section"><a href="/wishlist">Списък със желания (
                                <livewire:frontend.wishlist-count />)
                            </a></li>
                        @guest
                        <li>
                            <div class="gradient-button"><a id="modal_trigger" href="{{route('login')}}"><i
                                        class="fa fa-sign-in-alt"></i> Вход</a>
                            </div>
                        </li>
                        @endguest
                        @auth
                        <li>
                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                                <div>
                                    <i class="fa fa-user-alt"></i>
                                    <label>{{ Auth::user()->name }}</label>
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role_as == 1)
                                <a class="dropdown-item" href="/admin/dashboard">{{__('Админ панел')}}</a>
                                @else
                                <a class="dropdown-item" href="/home">{{__('Профил')}}</a>
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
                        <span>Меню</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
            <div class="main-navbar">
                <nav class="navbar navbar-expand-lg bg-info main-navbar text-light d-none d-md-block py-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ url('/') }}">Начало</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ url('/collections') }}">Категории</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{url('/#trending')}}">Набиращи популярност</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{url('/collections/cpus')}}">Процесори</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{url('/collections/motherboards')}}">Дънни
                                        платки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                        href="{{url('/collections/random-access-memory')}}">Оперативна
                                        памет</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{url('/collections/hard-drives')}}">Твърди
                                        дискове</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{url('/collections/solid-state-drives')}}">SSD
                                        дискове</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{url('/collections/gpus')}}">Видео карти</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                        href="{{url('/collections/power-supply-units')}}">Захранвания</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                        href="{{url('/collections/computer-cases')}}">Кутии</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </section>
</div>