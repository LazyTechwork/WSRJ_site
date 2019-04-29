@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Отборочные соревнования WorldSkills на право участия в Национальном чемпионате 2018</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://pp.userapi.com/c824409/v824409367/13b7b4/MZ0Q_KzLJgE.jpg" alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>Команда IT-лицея в этом году была представлена в компетенции "Web-дизайн и разработка". Всего
                        команд в данной компетенции на чемпионате было 13 - это все сильнейшие web-разработчики своих
                        регионов. В течение соревнований участникам необходимо было написать сайт для квестов и создать
                        блог писателя. Мы желаем удачи Ивану и ждем результатов, которые будут известны только через
                        месяц!</p>
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
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Петров Иван')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', 'IV место (Медальон за профессионализм)')
                @endcomponent
            </div>
    </section>
@endsection
