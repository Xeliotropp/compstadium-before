@extends('layouts.admin')

@section('content')
<div>
    @livewireScripts
    <livewire:admin.users.index />
</div>
@endsection