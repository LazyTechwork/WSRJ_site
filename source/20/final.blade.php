@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Финал VIII Национального чемпионата 2020</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://sun1-85.userapi.com/DU97Oqo2DW_k7k5zQ0SAXnkn-kedWmaI6t3z5A/QP9Lze8lBVQ.jpg"
                         alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>Финал VIII Национального чемпионата «Молодые профессионалы» (WorldSkills Russia) пройдет с 6 по
                        21 сентября 2020 года, впервые – в дистанционно-очном формате.</p>
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
                    @slot('reward', 'second')
                    @slot('name', 'Шульгин Савва')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '2 место')
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
