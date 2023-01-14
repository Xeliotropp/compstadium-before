@extends('layouts.app')

@section('content')
    @viteReactRefresh
    @vite(['resources/js/components/frontend/auth/Login.jsx'])
@endsection
