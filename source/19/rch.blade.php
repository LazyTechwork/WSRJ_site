@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2019</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c848620/v848620989/1788da/eU90UmIRf0M.jpg" alt="">
                </div>
                {{--<div class="col-lg-6 content">
                    <p>IT-лицей в очередной раз представит своих молодых профессионалов, но уже в 11 компетенциях!</p>
                </div>--}}
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
                    @slot('reward', '')
                    @slot('name', 'Петров Иван')
                    @slot('skill_code', '17')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Апаева Полина')
                    @slot('skill_code', '40J')
                    @slot('skill_name', 'Графический дизайн')
                    @slot('status', 'Заявлена')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Садыкова Диляра')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах')
                    @slot('status', 'Заявлена')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Гиниятуллин Арслан')
                    @slot('skill_code', 'R1J')
                    @slot('skill_name', 'Видеопроизводство')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Гарифуллин Артур')
                    @slot('skill_code', 'R6J')
                    @slot('skill_name', 'Лабораторный химический анализ')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Кадамов Шамиль')
                    @slot('skill_code', '45J')
                    @slot('skill_name', 'Изготовление прототипов')
                    @slot('status', 'Заявлен')
                @endcomponent
                    @component('_components.competitor')
                        @slot('animation', 'Right')
                        @slot('reward', '')
                        @slot('name', 'Муртазин Рустам')
                        @slot('skill_code', '39J')
                        @slot('skill_name', 'Сетевое и системное администрирование')
                        @slot('status', 'Заявлен')
                    @endcomponent
            </div>
    </section>
@endsection
