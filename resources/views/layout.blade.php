<!DOCTYPE HTML>
<HTML>

<HEAD>
    <title> Юркорпус </title>

    <link rel="stylesheet" type="text/css" href="<?= asset('/css/app.css') ?>" />

    <link rel="shortcut icon" href="<?= asset('/images/favicon.ico') ?>" type="image/x-icon">

    <link rel="icon" href="<?= asset('/images/favicon.ico') ?>"> <!-- 32×32 -->
    <link rel="icon" href="<?= asset('/images/favicon.ico') ?>" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= asset('/images/favicon.ico') ?>"> <!-- 180×180 -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    <script src="<?= asset('/js/app.js') ?>"></script>

</HEAD>

<body>
    <nav class="navbar navbar-expand-lg navbar-white fixed-top bg-white">
        <a class="navbar-brand" href="#">
            <img class="logo" src="<?= asset('/images/logo.png') ?>" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="flex-column collapse navbar-collapse" id="navbarCollapse">
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

                <div class="btn-group lang">
                    <div class="center">
                        <button type="button" class="btn" data-toggle="modal" data-target="#language_modal">
                            <img class="langLink" src="/images/flags/{{__('locale')}}.svg" alt="{{__('locale')}}" title="__('locale')">
                            <span class="lang_text hidden-xs hidden-sm hidden-md">{{__('locale')}}</span>
                            &nbsp;<i class="fa fa-caret-down"></i>
                        </button>
                    </div>
                </div>

            </ul>

        </div>
    </nav>

    @yield("content")

    <footer class="footer">
        <div class="container">
            <div class="text-center">
                <span>Coded by <a href="https://nw-studio.ru">NW STUDIO</a>, 2022</span>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="language_modal" tabindex="1" role="dialog" aria-labelledby="language_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content lang">    
                <div class="modal-header items-center">
                    <h5 id="language_modalTitle">
                        {{__('chse_yur_lang')}}
                    </h5>
                </div>
                <div class="modal-body">
                    @foreach ( config('app.locales') as $lang)
                        <a href="/{{$lang}}/home">
                            <img class="langLink" src="<?= asset("/images/flags/$lang.svg") ?>">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>

</HTML>