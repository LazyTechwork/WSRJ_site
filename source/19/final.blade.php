@extends('_layouts.master')

@section('body')
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Финал VII Национального чемпионата 2019</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 about-img">
                    <img src="https://pp.userapi.com/c845419/v845419585/200cb3/2GhxCYHjyRU.jpg" alt="">
                </div>
                <div class="col-lg-12 content">
                    <p><b>Финал Национального чемпионата «Молодые профессионалы (WorldSkills Russia)» </b> – это самые
                        масштабные в России соревнования профессионального мастерства по стандартам WorldSkills среди
                        студентов средних профессиональных образовательных учреждений в возрасте от 16 до 22 лет,
                        способствующие профессиональной ориентации молодежи и внедрению в систему отечественного
                        образования лучших международных практик.</p>

                    <p>Соревнования Национального чемпионата проходят по компетенциям шести блоков профессий:
                        строительной сферы, информационных и коммуникационных технологий, творчества и дизайна,
                        производства и инженерных технологий, сферы услуг, а также транспорта и логистики.</p>

                    <p>В 2019 году финал VII Национального чемпионата «Молодые профессионалы (WorldSkills Russia)»
                        состоится с 21 по 23 мая в городе Казани на площадке международного выставочного центра «Казань
                        Экспо». Церемония открытия и церемония закрытия чемпионата пройдут 20 и 24 мая
                        соответственно.</p>

                    <p>На соревновательной площадке будут представлены <span id="count_competition">93</span>
                        компетенции, а также <span id="count_competition_future">23</span> компетенции блока Future
                        Skills. По <span id="count_competition_junior">48</span> компетенциям будут соревноваться юниоры
                        – участники WorldSkills Russia Juniors.</p>

                    <p>Участниками финала VII Национального чемпионата «Молодые профессионалы (WorldSkills Russia)» в
                        Казани станут <span id="count_competition_comp">1513</span> конкурсанта, из них − <span
                                id="count_competition_out">152</span> иностранных конкурсанта, <span
                                id="count_competition_jun">363</span> конкурсанта-юниора. Экспертное сообщество
                        представят <span id="count_competition_compa">1274</span> компатриота.</p>
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
                    @slot('name', 'Петров Иван')
                    @slot('skill_code', '17J')
                    @slot('skill_name', 'Веб-дизайн и разработка')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Садыкова Диляра')
                    @slot('skill_code', 'R21J')
                    @slot('skill_name', 'Преподавание в младших классах')
                    @slot('status', 'Заявлена')
                @endcomponent

                @component('_components.competitor')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Фахрутдинов Булат')
                    @slot('skill_code', 'F3')
                    @slot('skill_name', 'Разработка виртуальной и дополненной реальности')
                    @slot('status', 'Заявлен')
                @endcomponent
                @component('_components.competitor')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Давлетшин Дамир')
                    @slot('skill_code', 'F3')
                    @slot('skill_name', 'Разработка виртуальной и дополненной реальности')
                    @slot('status', 'Заявлен')
                @endcomponent
            </div>
        </div>
    </section>
@endsection
