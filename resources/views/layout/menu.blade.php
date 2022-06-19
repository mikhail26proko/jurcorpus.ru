
    <div class = "logotype">
        <img class = "logo" src= "img/logo.png" alt = ""/>
    </div>
    <hr>
    @foreach ($menu as $menu_item)
        <div class = "menu_item">
            {{$menu_item}}
        </div>
    @endforeach

{{-- <nav class = "upMainMenu">
    Кнопки тут
</nav> --}}