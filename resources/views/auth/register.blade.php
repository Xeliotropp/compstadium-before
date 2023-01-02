@extends('layouts.app')

@section('content')
    @viteReactRefresh
    @vite(['resources/js/components/frontend/auth/css/login.css', 'resources/js/components/frontend/auth/Register.jsx'])
@endsection
