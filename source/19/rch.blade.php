@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2019</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://sun9-22.userapi.com/c855132/v855132053/19aba6/OmOI1uNUNEM.jpg" alt="">
                </div>
                <div class="col-lg-6 content">
                    <p>В Казани завершились основные этапы регионального чемпионата «Молодые профессионалы» (WorldSkills Russia) Республики Татарстан. Наша республика организовала один из крупнейших региональных чемпионатов в России. Специализированный центр компетенций «Молодые профессионалы IT-лицея КФУ» в региональном чемпионате чемпионатного цикла 2019/2020 года принял участие в 11 компетенциях и завоевал 7 золотых, 1 серебряную и 4 бронзовых медалей. Все чемпионы вошли в расширенный состав сборной Республики Татарстан.</p>
                    <p>Все фотографии награждения наших участников: <a href="https://vk.com/album-166579003_271493800">https://vk.com/album-166579003_271493800</a></p>
                    <p>Наша сборная продолжит готовиться уже к всероссийским отборочным соревнованиям на право участие в VIII Национальном финале, который пройдёт 17-21 июля 2020 года в г. Новокузнецке.</p>
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
                    @slot('name', 'Петров Иван')
                    @slot('skill_code', '17')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Апаева Полина')
                    @slot('skill_code', '40J')
                    @slot('skill_name', 'Графический дизайн')
                    @slot('status', '4 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Шульгин Савва')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Бадуртдинова Гульназ')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Садыкова Диляра')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Гарифуллин Амир')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Смирнов Семён')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Гиниятуллин Арслан')
                    @slot('skill_code', 'R1J')
                    @slot('skill_name', 'Видеопроизводство')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Гарифуллин Артур')
                    @slot('skill_code', 'R6J')
                    @slot('skill_name', 'Лабораторный химический анализ')
                    @slot('status', 'Участник')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Кадамов Шамиль')
                    @slot('skill_code', '45J')
                    @slot('skill_name', 'Изготовление прототипов')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Муртазин Рустам')
                    @slot('skill_code', '45J')
                    @slot('skill_name', 'Изготовление прототипов')
                    @slot('status', '3 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Лаврова Анастасия')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Шафигуллин Шакир')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', '3 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Садыков Зуфар')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Коротков Алексей')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', 'Участник')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Хамитов Даян')
                    @slot('skill_code', '5J')
                    @slot('skill_name', 'Инженерный дизайн CAD')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Байрамов Марсель')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', 'Участник')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Сабирзянов Мирсаит')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', 'Участник')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Ситдиков Камиль')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', 'Участник')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Петров Игнат')
                    @slot('skill_code', 'F3')
                    @slot('skill_name', 'Разработка виртуальной и дополненной реальности')
                    @slot('status', 'Заявлен')
                @endcomponent
            </div>
    </section>
@endsection
