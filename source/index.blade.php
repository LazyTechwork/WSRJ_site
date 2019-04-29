@extends('_layouts.master')

@section('fileprefix', '')

@section('body')
    <!--==========================
  About Section
============================-->
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>О нас</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img mb-5">
                    <img src="https://pp.userapi.com/c850536/v850536392/d8dd2/k-gQoVuHheg.jpg" alt="">
                </div>
                <div class="col-lg-6 about-img mb-5">
                    <img src="https://pp.userapi.com/c850536/v850536392/d8df0/Q6ProtheUT0.jpg" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-12 content">
                        <p>Движение <b>WorldSkills International (WSI)</b> зародилось в послевоенные годы в Испании
                            (1947 год), когда миру катастрофически не хватало квалифицированных рабочих рук. Первые
                            чемпионаты проводились с целью популяризации рабочих профессий и повышения их престижа.
                            Сегодня это эффективный инструмент подготовки кадров в соответствии с мировыми стандартами и
                            потребностями новых высокотехнологичных производств.</p>
                        <p>Под эгидой <b>WorldSkills</b> проводятся региональные, национальные и мировые чемпионаты,
                            континентальные первенства. Участники совершенствуют свои навыки, соревнуясь по шести блокам
                            профессий: строительной отрасли, информационных и коммуникационных технологий, творчества и
                            дизайна, промышленного производства, сферы услуг и обслуживания гражданского транспорта.</p>
                        <p>Союз <b>«Молодые профессионалы (Ворлдскиллс Россия)»</b> – официальный оператор
                            международного некоммерческого движения WorldSkills International, миссия которого –
                            повышение стандартов подготовки кадров. Наш девиз: <b>«Делай мир лучше силой своего
                                мастерства!»</b>.</p>
                        <p><b>Специализированный центр компетенций (СЦК)</b> — это центр развития профессий и
                            профессиональных сообществ WorldSkills, ресурсный центр, обладающий современным
                            оборудованием и технологиями, отвечающими требованиям WorldSkills, а также наличием
                            экспертов для осуществления обучения и оценки соответствующей квалификации по стандартам
                            WorldSkills.</p>
                        <p>Основная миссия движения <b>WorldSkills Russia Juniors</b> - дать школьникам возможность
                            осознанно выбрать профессию в быстро меняющемся мире, определиться с образовательной
                            траекторией и в будущем без проблем найти свое место на рынке труда.</p>
                        <p><b>Юниорские турниры WorldSkills</b> позволяют, во-первых, попробовать свои силы в конкретной
                            специальности. Во-вторых, получить информацию о ней непосредственно из уст представителей
                            профессионального сообщества, понять, как устроена отрасль и увидеть перспективы карьерного
                            роста.</p>
                        <p><b>Региональные юниорские соревнования</b> проходят по всей стране одновременно с основными и
                            предполагают отбор на <b>Национальный чемпионат</b>. Из победителей этих соревнований
                            формируется команда для участия в мировом первенстве.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="wsteam" class="wow fadeInUp team">
        <div class="container">
            <div class="section-header">
                <h2>Сборная СЦК</h2>
            </div>
            <div class="row">
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/1788a8/XAmIIc5IR80.jpg')
                    @slot('name', 'Петров Иван Владимирович')
                    @slot('skill', 'Веб-дизайн и разработка')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/1788b2/jpF2KObSKh8.jpg')
                    @slot('name', 'Апаева Полина Данилевна')
                    @slot('skill', 'Графический дизайн')
                @endcomponent
                    @component('_components.member')
                        @slot('photo', 'https://pp.userapi.com/c848620/v848620989/178894/2HtObhrOyVw.jpg')
                        @slot('name', 'Садыкова Диляра Фаритовна')
                        @slot('skill', 'Преподавание в младших классах')
                    @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/17888a/AQ8pJCVwRf0.jpg')
                    @slot('name', 'Гиниятуллин Арслан Рафаилович')
                    @slot('skill', 'Видеопроизводство')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/17889e/PrZZhExLISY.jpg')
                    @slot('name', 'Шарафеев Эмиль Айратович')
                    @slot('skill', 'Программные решения для бизнеса')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/1788d0/72jx0py3Us0.jpg')
                    @slot('name', 'Муртазин Рустам Альбертович')
                    @slot('skill', 'Сетевое и системное администрирование')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c847218/v847218347/1f2f9a/GR8ivtLpKbA.jpg')
                    @slot('name', 'Лукьянов Артур Маратович')
                    @slot('skill', 'Сетевое и системное администрирование')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/1788bc/ByAv1YyxXmE.jpg')
                    @slot('name', 'Иванов Радик Рамилевич')
                    @slot('skill', 'Предпринимательство')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c848620/v848620989/1788c6/vJdSjru8IHU.jpg')
                    @slot('name', 'Хамзин Рустем Алмазович')
                    @slot('skill', 'Предпринимательство')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c847218/v847218347/1f2f93/SjQkO79Uwmc.jpg')
                    @slot('name', 'Фахрутдинов Булат Загфярович')
                    @slot('skill', 'Разработка виртуальной и дополненной реальности')
                @endcomponent
                @component('_components.member')
                    @slot('photo', 'https://pp.userapi.com/c847218/v847218347/1f2f8c/rXURUT7Jurw.jpg')
                    @slot('name', 'Давлетшин Дамир Айратович')
                    @slot('skill', 'Разработка виртуальной и дополненной реальности')
                @endcomponent
            </div>
        </div>
    </section>

    <!-- #about -->
    <section id="projects">
        <div class="container">
            <div class="section-header">
                <h2>Чемпионаты</h2>
            </div>
            <div class="row">
                @component('_components.champ')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Региональный чемпионат JuniorSkills 2016')
                    @slot('link', '16/rchjs.html')
                @endcomponent
                @component('_components.champ')
                    @slot('animation', 'Right')
                    @slot('reward', 'third')
                    @slot('name', 'Национальный чемпионат JuniorSkills 2016')
                    @slot('link', '16/finaljs.html')
                @endcomponent

                @component('_components.champ')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Региональный чемпионат JuniorSkills 2017')
                    @slot('link', '17/rchjs.html')
                @endcomponent
                @component('_components.champ')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Национальный чемпионат JuniorSkills 2017')
                    @slot('link', '17/finaljs.html')
                @endcomponent

                @component('_components.champ')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Региональный чемпионат в РТ 2017')
                    @slot('link', '17/rch.html')
                @endcomponent
                @component('_components.champ')
                    @slot('animation', 'Right')
                    @slot('reward', 'prof-medalion')
                    @slot('name', 'Отборочные соревнования 2018')
                    @slot('link', '18/os.html')
                @endcomponent

                @component('_components.champ')
                    @slot('animation', 'Left')
                    @slot('reward', 'first')
                    @slot('name', 'Региональный чемпионат в РТ 2018')
                    @slot('link', '18/rch.html')
                @endcomponent
                @component('_components.champ')
                    @slot('animation', 'Right')
                    @slot('reward', '')
                    @slot('name', 'Отборочные соревнования 2019')
                    @slot('link', '19/os.html')
                @endcomponent

                @component('_components.champ')
                    @slot('animation', 'Left')
                    @slot('reward', '')
                    @slot('name', 'Финал VII Национального чемпионата 2019')
                    @slot('link', '19/final.html')
                @endcomponent
            </div>
        </div>
    </section>

    <!--==========================
  Our Team Section
============================-->
    <section id="team" class="wow fadeInUp team">
        <div class="container">
            <div class="section-header">
                <h2>Команда</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="https://pp.userapi.com/c847218/v847218347/1f2fa4/nJ-7EBAnBEQ.jpg"
                                              alt=""></div>
                        <div class="details">
                            <h4>Гуськов Вадим</h4>
                            <hr>
                            <span>Координатор движения WorldSkills в IT-лицее</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="https://pp.userapi.com/c848620/v848620989/178876/CR4SuCY7BqU.jpg"
                                              alt=""></div>
                        <div class="details">
                            <h4>Петров Иван</h4>
                            <hr>
                            <span>Координатор движения WorldSkills в IT-лицее</span>
                            <!--<div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #team -->

    <!--==========================
  Contact Section
============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Связаться с нами</h2>
            </div>
            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Адрес</h3>
                        <address>420010, Россия, Казань, ул. Деревня Универсиады, 32</address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Номер телефона</h3>
                        <p><a href="tel:+79178905122">+7 (917) 890 51 22</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>E-Mail</h3>
                        <p><a href="mailto:wsrj.itl@gmail.com">wsrj.itl@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #contact -->
@endsection
