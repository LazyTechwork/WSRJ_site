@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Региональный чемпионат WorldSkills в Республике Татарстан 2021</h2>
            </div>
            {{--div class="row">
                <div class="col-lg-12 about-img">
                    <img src="https://sun9-65.userapi.com/impg/_HyCleLXqzCcIJGv3v_Ced_NoUJdP4Q_-rq7bg/Xtzf93jLGCQ.jpg?size=2560x1440&quality=96&proxy=1&sign=a8a7dc030f5febbc083eb997a3664900&type=album"
                         alt="Региональный чемпионат WorldSkills в Республике Татарстан 2021">
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
                    @slot('reward', 'second')
                    @slot('name', 'Рафикова Альбина')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах (юниоры)')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Хабибуллин Камиль')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-технологии (юниоры)')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Коротков Алексей')
                    @slot('skill_code', 'R11')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Краус Артем')
                    @slot('skill_code', 'R11')
                    @slot('skill_name', 'Предпринимательство')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Фахрутдинов Амир')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство (юниоры)')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Замалеева Амира')
                    @slot('skill_code', 'R11J')
                    @slot('skill_name', 'Предпринимательство (юниоры)')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Смирнов Семен')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование (юниоры)')
                    @slot('status', '1 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'first')
                    @slot('name', 'Виват Никита')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование (юниоры)')
                    @slot('status', '1 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Тимергалиева Ляйля')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование (юниоры)')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Сафин Даян')
                    @slot('skill_code', '39J')
                    @slot('skill_name', 'Сетевое и системное администрирование (юниоры)')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Антипов Максим')
                    @slot('skill_code', 'R23J')
                    @slot('skill_name', 'Интернет вещей (юниоры)')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Судейманов Арсен')
                    @slot('skill_code', 'R23J')
                    @slot('skill_name', 'Интернет вещей (юниоры)')
                    @slot('status', '3 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'second')
                    @slot('name', 'Хаметшин Ренат')
                    @slot('skill_code', 'F6')
                    @slot('skill_name', 'Разработка мобильных приложений')
                    @slot('status', '2 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'second')
                    @slot('name', 'Насыров Адель')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений (юниоры)')
                    @slot('status', '2 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Гареев Тимур')
                    @slot('skill_code', 'F6J')
                    @slot('skill_name', 'Разработка мобильных приложений (юниоры)')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Лукьянов Артур')
                    @slot('skill_code', 'R54')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '3 место')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', 'third')
                    @slot('name', 'Бадуртдинова Гульназ')
                    @slot('skill_code', 'R54')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '3 место')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Байрамов Марсель')
                    @slot('skill_code', 'R54')
                    @slot('skill_name', 'Инженерия космических систем')
                    @slot('status', '3 место')
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
            </div>
        </div>
    </section>
@endsection
