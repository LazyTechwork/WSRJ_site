@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2017</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c845522/v845522367/5729a/FKvW7waSX4A.jpg" alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>27 ноября состоялось открытие этапа WorldSkills Russia в Республике Татарстан. Соревнования
                        регионального чемпионата были организованы по 91 компетенции чемпионатного движения
                        «Ворлдскиллс» для конкурсантов в возрасте от 16 до 22 лет. Также региональный чемпионат прошел
                        по 23 компетенциям направления «Ворлдскиллс Юниор», в которых приняли участие конкурсанты в
                        возрасте от 14 до 16 лет. С 27 по 29 ноября на базе КТИТС прошли соревнования в 11
                        ИТ-компетенциях регионального этапа WorldSkills Russia в РТ. В этих соревнованиях принял участие
                        обучающийся IT-лицея КФУ Петров Иван. В первый конкурсный день участники разрабатывали небольшую
                        игру «Морская охота». Цель игры - поймать большее количество рыбок, избегая встречи с акулами.
                        Во второй день участники работали над созданием сайта по онлайн бронированию билетов в
                        кинотеатр. По итогам двух конкурсных дней, набрав большее количество баллов, учащийся лицея
                        Петров Иван стал победителем регионального чемпионата WorldSkills Russia 2017-2018 г.г.</p>
                    <p>Поздравляем Петрова Ивана с золотой медалью!</p>
                </div>
            </div>

        </div>
    </section>

    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Итоги Регионального чемпионата молодых профессионалов РТ в компетенции "Мобильная
                    робототехника"</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c845522/v845522367/57291/yFAZWSyztuk.jpg" alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>9 декабря 2017 года на базе Казанского техникума информационных технологий и связи подведены
                        итоги в компетенции «Мобильная робототехника» Регионального чемпионата молодых профессионалов РТ
                        2017-2018 (WorldSkills Russia) Поздравляем ребят Гиззатуллина Тимура (класс 9-2) и Миссарову
                        Альбину (класс 8-1) в высоким результатом! Лицеисты под руководством учителя Латыпова И.И. стали
                        Дипломантами 2 степени!</p>
                </div>
            </div>

        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="section-header">
                <h2>Конкурсанты</h2>
            </div>

            <div class="row">
                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Петров Иван')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', 'I место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Миссарова Альбина')
                    @slot('skill_code', '23J')
                    @slot('skill_name', 'Мобильная робототехника')
                    @slot('status', 'II место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Газизуллин Тимур')
                    @slot('skill_code', '23J')
                    @slot('skill_name', 'Мобильная робототехника')
                    @slot('status', 'II место')
                @endcomponent
            </div>

        </div>
    </section>
@endsection
