@extends('layouts.login')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">
                            <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo">
                        </div>
                        <h4>Регистрация</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Име') }}</label>


                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input id="name" type="text"
                                        class="form-control form-control-lg border-left-0 @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="{{__('Име')}}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Имейл адрес')
                                    }}</label>

                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-email-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email"
                                        class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Имейл">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Парола')
                                    }}</label>

                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="{{__('Парола')}}">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Потвърждаване на парола') }}</label>

                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input id="password-confirm" type="password"
                                        class="form-control form-control-lg border-left-0" name="password_confirmation"
                                        required autocomplete="new-password"
                                        placeholder="{{__('Потвърждаване на парола')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{__('Адрес на доставка')}}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-map-marker-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg border-left-0"
                                        placeholder="{{__('Адрес на доставка')}}" @error('address') is-invalid
                                        @enderror" name="address" value="{{ old('address') }}" required
                                        autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-2 d-flex">
                                <button type="submit"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn flex-grow me-1">
                                    {{ __('Регистрация') }}
                                </button>
                                <a class="btn btn-primary auth-form-btn flex-grow ms-1" href="/">{{__('Назад')}}</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Вече имате профил? <a href="{{route('login')}}" class="text-primary">{{__('Вход')}}</a>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright
                        &copy; 2020
                        All rights reserved.</p>
                </div>
                <!-- content-wrapper ends -->
            </div>

            <!-- page-body-wrapper ends -->
        </div>
    </div>
</div>

@endsection