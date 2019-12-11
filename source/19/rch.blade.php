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
                    @slot('reward', 'first')
                    @slot('name', 'Петров Иван')
                    @slot('skill_code', '17')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Апаева Полина')
                    @slot('skill_code', '40J')
                    @slot('skill_name', 'Графический дизайн')
                    @slot('status', '4 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Шульгин Савва')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Бадуртдинова Гульназ')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Садыкова Диляра')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Гарифуллин Амир')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent

                    @component('_components.competitor')
                        @slot('animation', 'Left')
                        @slot('reward', 'first')
                        @slot('name', 'Лукьянов Артур')
                        @slot('skill_code', '39J')
                        @slot('skill_name', 'Сетевое и системное администрирование')
                        @slot('status', '1 место')
                    @endcomponent
                    @component('_components.competitor')
                        @slot('animation', 'Right')
                        @slot('reward', 'first')
                        @slot('name', 'Смирнов Семён')
                        @slot('skill_code', '39J')
                        @slot('skill_name', 'Сетевое и системное администрирование')
                        @slot('status', '1 место')
                    @endcomponent

                    @component('_components.competitor')
                        @slot('animation', 'Left')
                        @slot('reward', 'third')
                        @slot('name', 'Гиниятуллин Арслан')
                        @slot('skill_code', 'R1J')
                        @slot('skill_name', 'Видеопроизводство')
                        @slot('status', '3 место')
                    @endcomponent
                    @component('_components.competitor')
                        @slot('animation', 'Right')
                        @slot('reward', '')
                        @slot('name', 'Гарифуллин Артур')
                        @slot('skill_code', 'R6J')
                        @slot('skill_name', 'Лабораторный химический анализ')
                        @slot('status', 'Участник')
                    @endcomponent

                    @component('_components.competitor')
                        @slot('animation', 'Left')
                        @slot('reward', 'third')
                        @slot('name', 'Кадамов Шамиль')
                        @slot('skill_code', '45J')
                        @slot('skill_name', 'Изготовление прототипов')
                        @slot('status', '3 место')
                    @endcomponent
                    @component('_components.competitor')
                        @slot('animation', 'Right')
                        @slot('reward', 'third')
                        @slot('name', 'Муртазин Рустам')
                        @slot('skill_code', '45J')
                        @slot('skill_name', 'Изготовление прототипов')
                        @slot('status', '3 место')
                    @endcomponent

                    @component('_components.competitor')
                        @slot('animation', 'Left')
                        @slot('reward', 'first')
                        @slot('name', 'Лаврова Анастасия')
                        @slot('skill_code', 'F6J')
                        @slot('skill_name', 'Разработка мобильных приложений')
                        @slot('status', '1 место')
                    @endcomponent
                    @component('_components.competitor')
                        @slot('animation', 'Right')
                        @slot('reward', 'third')
                        @slot('name', 'Шафигуллин Шакир')
                        @slot('skill_code', 'F6J')
                        @slot('skill_name', 'Разработка мобильных приложений')
                        @slot('status', '3 место')
                    @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Садыков Зуфар')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Коротков Алексей')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'Участник')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Петров Игнат')
                    @slot('skill_code', 'F3')
                    @slot('skill_name', 'Разработка виртуальной и дополненной реальности')
                    @slot('status', 'Заявлен')
                @endcomponent
            </div>
    </section>
@endsection
