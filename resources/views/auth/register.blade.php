@extends('layouts.login')

@section('title', 'Регистрация')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg" style="background-color: white">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <br>
                        <br>
                        <br>
                        <h1 style="font-weight:bold;">Регистрация</h1>
                        <br>
                        <form method="POST" action="{{ route('register') }}" class="mt-5">
                            @csrf

                            <div class="form-group">
                                <label for="name" style="font-size: 20px;">{{ __('Име') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent" style="line-height: 34px;">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input style="font-size: 16px; height=40px; padding:30px;" id="name" type="text"
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
                                <label for="email" style="font-size: 20px;">{{ __('Имейл адрес') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent" style="line-height: 34px;">
                                            <i class="mdi mdi-email-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input style="font-size: 16px; height=40px; padding:30px;" id="email" type="email"
                                        class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Имейл">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="line-height: 34px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" style="font-size: 20px;">{{ __('Парола')
                                    }}</label>

                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent" style="line-height: 34px;">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input style="font-size: 16px; height=40px; padding:30px;" id="password"
                                        type="password" class="form-control form-control-lg border-left-0"
                                        @error('password') is-invalid @enderror name="password" required
                                        autocomplete="new-password" placeholder="{{__('Парола')}}">


                                    @error('password')
                                    <span class="invalid-feedback" role="alert" style="line-height: 34px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" style="font-size: 20px;">{{ __('Потвърждаване на парола')
                                    }}</label>

                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent" style="line-height: 34px;">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input style="font-size: 16px; height=40px; padding:30px;" id="password-confirm"
                                        type="password" class="form-control form-control-lg border-left-0"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="{{__('Потвърждаване на парола')}}">
                                </div>
                            </div>

                            <div class="mb-2 d-flex">
                                <button type="submit"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium text-white auth-form-btn flex-grow me-1">
                                    {{ __('Регистрация') }}
                                </button>
                                <a class="btn btn-lg btn-primary auth-form-btn flex-grow ms-1"
                                    href="{{url('/login')}}">{{__('Назад')}}</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Вече имате профил? <a href="{{route('login')}}" class="text-primary">{{__('Вход')}}</a>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                </div>
                <!-- content-wrapper ends -->
            </div>

            <!-- page-body-wrapper ends -->
        </div>
    </div>
</div>

@endsection