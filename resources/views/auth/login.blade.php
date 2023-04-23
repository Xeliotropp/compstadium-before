@extends('layouts.login')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg" style="background-color: white">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <h1 style="font-weight:bold;">Добре дошли!</h1>
                        <br>
                        <h4 class="font-weight-light">Радваме се да Ви видим отново!</h4>
                        <form method="POST" action="{{ route('login') }}" class="mt-5">
                            @csrf
                            <div class="form-group">
                                <label for="email" style="font-size: 20px;">{{ __('Имейл адрес') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent" style="line-height: 34px;">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input style="font-size: 16px; height=40px; padding:30px;" id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"
                                        placeholder="{{ __('Имейл адрес') }}" name="email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" style="font-size: 20px;">{{ __('Парола') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent" style="line-height: 34px;">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input style="font-size: 16px; height=40px; padding:30px;" id="password"
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror form-control-lg border-left-0"
                                        placeholder="{{ __('Парола') }}" name="password" required
                                        autocomplete="current-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомни ме') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="auth-link text-blue" href="{{ route('password.request') }}">
                                    {{ __('Забравена парола?') }}
                                </a>
                                @endif
                            </div>

                            <div class="mb-2 d-flex">
                                <button type="submit"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium text-white auth-form-btn flex-grow me-1">
                                    {{ __('Вход') }}
                                </button>
                                <a class="btn btn-lg btn-primary auth-form-btn flex-grow ms-1"
                                    href="{{url('/')}}">{{__('Назад')}}</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Нямате профил?
                                <a href="{{route('register')}}" class="text-primary">Създайте профил!</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@endsection