@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2018</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://sun9-12.userapi.com/c855132/v855132053/19ab9c/L2_-Pzr5HU0.jpg" alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>IT-лицей в очередной раз представит своих молодых профессионалов, но уже в 11 компетенциях!</p>
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
                    @slot('name', 'Садыкова Диляра')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах')
                    @slot('status', 'II место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'I место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Муртазин Рустам')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'I место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Иванов Радик')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'I место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Хамзин Рустем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'I место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Гиниятуллин Арслан')
                    @slot('skill_code', 'R1J')
                    @slot('skill_name', 'Видеопроизводство')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Шарафеев Эмиль')
                    @slot('skill_code', '9J')
                    @slot('skill_name', 'Программные решения для бизнеса')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Гарифуллин Артур')
                    @slot('skill_code', 'R6J')
                    @slot('skill_name', 'Лабораторный химический анализ')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Мухтаров Алишер')
                    @slot('skill_code', '5J')
                    @slot('skill_name', 'Инженерный дизайн CAD')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Юдин Даниил')
                    @slot('skill_code', '45J')
                    @slot('skill_name', 'Изготовление прототипов')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Кадамов Шамиль')
                    @slot('skill_code', '45J')
                    @slot('skill_name', 'Изготовление прототипов')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Апаева Полина')
                    @slot('skill_code', '40J')
                    @slot('skill_name', 'Графический дизайн')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Петров Илдан')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Мобильная робототехника')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Миссарова Альбина')
                    @slot('skill_code', '23J')
                    @slot('skill_name', 'Мобильная робототехника')
                    @slot('status', 'Участник')
                @endcomponent
            </div>
    </section>
@endsection
