@extends('layout')

@section('content')
    <div class="stamp">
        <div class="white">
            <h4>Контакты</h4>
            <br />
                <h6>Наш адрес</h6>
                <p>
                    295015, РФ, Республика Крым, г. Симферополь, ул. Севастопольская, 23\2, оф. 3
                </p>
            <br />
                <h6>Наш телефон и почта</h6>
                <p>
                    +79788534414
                </p>
                <p>
                    jurcorpus@gmail.com
                </p>

            <br />
            <br />
                <p>
                    Мы уважаем ваше и свое время, поэтому просим Вас
                    предварительно согласовывать время встречи с нашими адвокатами
                    по указанным выше телефонам.
                </p>
        </div>
    </div>

    <div class="map">
        <script 
            type="text/javascript" 
            charset="utf-8" 
            async 
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9258bb772418d4001f36561b74613e0d98668d451d86dfe0598ae19c0b628971&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true">
        </script>
    </div>
    
@endsection