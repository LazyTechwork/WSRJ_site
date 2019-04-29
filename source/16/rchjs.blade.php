@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат JuniorSkills 2016</h2>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c847220/v847220787/1ef968/13i7tJeUN68.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c847220/v847220787/1ef9ea/XgMjquNFsko.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c847220/v847220787/1efac6/C-V9z5_rmRk.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c847220/v847220787/1efa4e/KSdGQ77firI.jpg" alt="">
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
                    @slot('name', 'Бегишев Данис')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'I место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Хамеджанов Алмаз')
                    @slot('skill_code', 'JS39')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'I место')
                @endcomponent
            </div>

        </div>
    </section>
@endsection
