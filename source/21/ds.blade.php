@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Третий отраслевой чемпионат по стандартам WorldSkills в сфере информационных технологий DigitalSkills 2021</h2>
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
                    @slot('reward', 'first')
                    @slot('name', 'Сабирзянов Мирсаит')
                    @slot('skill_code', 'R54')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '1 место')
                @endcomponent
            </div>
        </div>
    </section>
@endsection
