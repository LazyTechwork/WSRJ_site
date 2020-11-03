@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2020</h2>
            </div>
            <div class="row">
                {{--<div class="col-lg-6 about-img">
                    <img src="https://sun9-22.userapi.com/c855132/v855132053/19aba6/OmOI1uNUNEM.jpg" alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>В Казани завершились основные этапы регионального чемпионата «Молодые профессионалы» (WorldSkills Russia) Республики Татарстан. Наша республика организовала один из крупнейших региональных чемпионатов в России. Специализированный центр компетенций «Молодые профессионалы IT-лицея КФУ» в региональном чемпионате чемпионатного цикла 2019/2020 года принял участие в 11 компетенциях и завоевал 7 золотых, 1 серебряную и 4 бронзовых медалей. Все чемпионы вошли в расширенный состав сборной Республики Татарстан.</p>
                    <p>Все фотографии награждения наших участников: <a href="https://vk.com/album-166579003_271493800">https://vk.com/album-166579003_271493800</a></p>
                    <p>Наша сборная продолжит готовиться уже к всероссийским отборочным соревнованиям на право участие в VIII Национальном финале, который пройдёт 17-21 июля 2020 года в г. Новокузнецке.</p>
                </div>--}}
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
                    @slot('name', 'Латфуллина Элина')
                    @slot('skill_code', 'R6J')
                    @slot('skill_name', 'Лабораторный химический анализ - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Мурзаев Марат')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Ситдиков Камиль')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Галашев Никита')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Смирнов Семен')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Зарипьзянова Рената')
                    @slot('skill_code', '40J')
                    @slot('skill_name', 'Графический дизайн - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Хаметшин Ренат')
                    @slot('skill_code', 'F1J')
                    @slot('skill_name', 'Эксплуатация беспилотных авиационных систем - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Шафигуллин Шакир')
                    @slot('skill_code', 'F6')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Улесов Артём')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Насыбуллин Карим')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Ефремов Александр')
                    @slot('skill_code', 'F8')
                    @slot('skill_name', 'Кибербезопасность')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', 'F8')
                    @slot('skill_name', 'Кибербезопасность')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Коротков Алексей')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Краус Артем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Аскаров Самат')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Хамзин Рустем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Бадуртдинова  Гульназ')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Байрамов Марсель')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Звонцев Илья')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Сабирзянов Мирсаит')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем - юниоры')
                    @slot('status', 'Заявлен')
                @endcomponent
            </div>
    </section>
@endsection
