@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Отборочные соревнования WorldSkills на право участия в Финале VII Национального чемпионата 2019</h2>
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
                    @slot('name', 'Хамзин Рустем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Иванов Радик')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'Участник')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', 'Участник')
                @endcomponent
            </div>
    </section>
@endsection
