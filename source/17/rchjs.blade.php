@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат JuniorSkills 2017</h2>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c846523/v846523787/1fbe1e/rUtOfQkRt1U.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c846523/v846523787/1fbe50/fGh5yBN5jcc.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c846523/v846523787/1fbde2/8RuQjN2_jjA.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c846523/v846523787/1fbdc4/N3EN6XcDtts.jpg" alt="">
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
                    @slot('name', 'Сафин Риназ')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'I место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Сетров Александр')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'I место')
                @endcomponent
            </div>

        </div>
    </section>
@endsection
