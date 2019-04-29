@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Национальный чемпионат JuniorSkills 2017</h2>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c851224/v851224787/10c48a/xqu2BDlYDbM.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://sun7-1.userapi.com/c851224/v851224787/10c480/WD4m2FuMJM4.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c851224/v851224787/10c431/aQ8ybYlMwpg.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c851224/v851224787/10c462/dvhhPAPVY1A.jpg" alt="">
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
                    @slot('name', 'Сафин Риназ')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Сетров Александр')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'Участник')
                @endcomponent
            </div>

        </div>
    </section>
@endsection
