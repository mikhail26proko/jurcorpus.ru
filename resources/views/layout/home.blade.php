<title> Юркорпус </title>

<link rel="stylesheet" type="text/css" href="<?= asset('/css/app.css') ?>" />

<link rel="shortcut icon" href="<?= asset('/images/favicon.ico') ?>" type="image/x-icon">

<link rel="icon" href="<?= asset('/images/favicon.ico') ?>"> <!-- 32×32 -->
<link rel="icon" href="<?= asset('/images/favicon.ico') ?>" type="image/svg+xml">
<link rel="apple-touch-icon" href="<?= asset('/images/favicon.ico') ?>">  <!-- 180×180 -->

<script src="<?= asset('/js/app.js') ?>"></script>

<nav class="navbar navbar-expand-lg navbar-white fixed-top bg-white">
    <a class="navbar-brand" href="#">
        <img class="logo" src="<?= asset('/images/logo.png') ?>" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
            @foreach ($menu as $item)
                @if (str_contains(Request::path(), $item))
                    <li class="nav-item active">
                        <a class="nav-link active" href="#">{{ __($item) }}</a>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/{{__('locale')}}/{{$item}}">{{ __($item) }}</a>
                @endif
                    </li>
            @endforeach
            <div class="lang">
                @foreach ( config('app.locales') as $lang)
                    @if ($lang != __('locale'))
                        <a href="/{{$lang}}/home">
                            <img class="langLink" src="<?= asset("/images/flags/$lang.svg")?>">
                        </a>
                    @endif
                @endforeach
            </div>
        </ul>

    </div>
</nav>

<main class="content-wrapper">
    <div class="container-fluid">
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="text-center">
            <span>Coded by <a href="https://nw-studio.ru">NW STUDIO</a>, 2022</span>
        </div>
    </div>
</footer>