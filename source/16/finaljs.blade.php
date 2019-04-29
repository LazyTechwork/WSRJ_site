@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Национальный чемпионат JuniorSkills 2016</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c845522/v845522367/5729a/FKvW7waSX4A.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c845522/v845522367/5729a/FKvW7waSX4A.jpg" alt="">
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
                    @slot('reward', 'third')
                    @slot('name', 'Бегишев Данис')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'III место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Хамеджанов Алмаз')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'III место')
                @endcomponent
            </div>

        </div>
    </section>
@endsection
