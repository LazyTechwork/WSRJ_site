@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2020</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 about-img">
                    <img src="https://sun9-65.userapi.com/impg/_HyCleLXqzCcIJGv3v_Ced_NoUJdP4Q_-rq7bg/Xtzf93jLGCQ.jpg?size=2560x1440&quality=96&proxy=1&sign=a8a7dc030f5febbc083eb997a3664900&type=album"
                         alt="Региональный чемпионат WorldSkills в Республике Татарстан 2020">
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
                    @slot('reward', 'second')
                    @slot('name', 'Мурзаев Марат')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Ситдиков Камиль')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Галашев Никита')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Смирнов Семен')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Валиуллин Данис')
                    @slot('skill_code', '39Y')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Степанов Игорь')
                    @slot('skill_code', '39Y')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Хаметшин Ренат')
                    @slot('skill_code', 'F1J')
                    @slot('skill_name', 'Эксплуатация беспилотных авиационных систем')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Шафигуллин Шакир')
                    @slot('skill_code', 'F6')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', '4 место (Медальон за профессионализм)')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Улесов Артём')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Насыбуллин Карим')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Ефремов Александр')
                    @slot('skill_code', 'F8')
                    @slot('skill_name', 'Кибербезопасность')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', 'F8')
                    @slot('skill_name', 'Кибербезопасность')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Коротков Алексей')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Краус Артем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Бадуртдинова Гульназ')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Байрамов Марсель')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Хамитов Даян')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Сабирзянов Мирсаит')
                    @slot('skill_code', 'R54J')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Латфуллина Элина')
                    @slot('skill_code', 'R6J')
                    @slot('skill_name', 'Лабораторный химический анализ')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Аскаров Самат')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Хамзин Рустем')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Тимергалиева Ляйля')
                    @slot('skill_code', '39Y')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Замалеева Амира')
                    @slot('skill_code', '39Y')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Сафин Даян')
                    @slot('skill_code', '39Y')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Гафуров Давлат')
                    @slot('skill_code', '39Y')
                    @slot('skill_name', 'Сетевое и системное администрирование')
                    @slot('status', '2 место')
                @endcomponent
            </div>
    </section>
@endsection
