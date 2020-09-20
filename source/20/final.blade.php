@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Финал VIII Национального чемпионата 2020</h2>
            </div>
            <div class="row">
                {{--<div class="col-lg-12 about-img">
                    <img src="https://pp.userapi.com/c845419/v845419585/200cb3/2GhxCYHjyRU.jpg" alt="">
                </div>--}}
                <div class="col-lg-12 content">
                    <p>Финал VIII Национального чемпионата 2020</p>
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
                    @slot('reward', '')
                    @slot('name', 'Шульгин Савва')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Гиниятуллин Арслан')
                    @slot('skill_code', 'R1J')
                    @slot('skill_name', 'Видеопроизводство')
                    @slot('status', '3 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Садыкова Диляра')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Гарифуллин Амир')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Смирнов Семён')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '2 место')
                @endcomponent
            </div>
        </div>
    </section>
@endsection
