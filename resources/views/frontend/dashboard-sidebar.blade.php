<aside class="col-md-3">
    <ul class="list-group">
        <a class="list-group-item" href="/profile">Табло</a>
        <a class="list-group-item" href="/profile/orders">Моите поръчки</a>
        <a class="list-group-item" href="/profile/{{Auth::user()->id}}/edit">Редактиране на профила</a>
        <a class="list-group-item" href="{{route('password.update')}}">Промяна на парола</a>
    </ul>
    <a class="col-md-3 btn btn-danger btn-block" href="{{route('logout')}}"><span class="text">Изход</span></a>
</aside>