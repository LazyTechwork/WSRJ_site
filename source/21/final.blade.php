@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Финал IX Национального чемпионата 2021</h2>
            </div>
            {{--<div class="row">
                <div class="col-lg-12 about-img">
                    <img src="https://sun1-85.userapi.com/DU97Oqo2DW_k7k5zQ0SAXnkn-kedWmaI6t3z5A/QP9Lze8lBVQ.jpg"
                         alt="Финал IX Национального чемпионата 2021">
                </div>
                <div class="col-lg-6 content">
                    <p>Финал VIII Национального чемпионата «Молодые профессионалы» (WorldSkills Russia) пройдет с 6 по
                        21 сентября 2020 года, впервые – в дистанционно-очном формате.</p>
                </div>
            </div>--}}
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
                    @slot('name', 'Ситдиков Камиль')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка (юниоры)')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Бадуртдинова Гульназ')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах (юниоры)')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Краус Артем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Коротков Алексей')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '3 место')
                @endcomponent
            </div>
        </div>
    </section>
@endsection
