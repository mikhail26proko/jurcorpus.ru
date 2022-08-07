@extends('layout')

<?php
    $team = [
        [
            "id"        => 1,
            "img"       => "/images/team/1.png",
            "fio"       => [
                "ru"    => "Халаимов Владимир Генадьевич",
                "ua"    => "Халаимов Владимир Генадьевич",
                "en"    => "Halaimov Vladimir Genadievich",
            ],
            "jobTitle"  => [
                "ru"    => "Председатель колегии адвокатов",
                "ua"    => "Председатель колегии адвокатов",
                "en"    => "Chairman of the Bar Association",
            ],
            "about"     => [
                "ru"    => [
                    "Регистрационный номер в реестре адвокатов РК№ 90/751",
                    "Обучался в Национальной юридической академии им. Ярослава Мудрого.",
                    "Стаж работы в области юриспруденции более 18 лет.",
                ],
                "ua"    => [
                    ""
                ],
                "en"    => [
                    ""
                ],
            ],
        ],
        [
            "id" => 2
        ]
    ];
?>

@section('content')
    <div class="team">
        
    </div>
@endsection