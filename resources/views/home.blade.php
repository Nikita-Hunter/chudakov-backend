@extends('layouts.frontend')
@section('content')
    <section aria-label="Главный экран" role="banner" class="main-content__intro section-intro">
        <div class="section-intro__container container">
            <div class="section-intro__inner">
                <div aria-label="Описание" class="section-intro__detail">
                    <h1 align="left" class="section-intro__title title-xl">
                        ВО ВСЕХ ОПЫТАХ И ЭКСПЕРИМЕНТАХ ДЕТИ ПРИНИМАЮТ АКТИВНОЕ УЧАСТИЕ!
                    </h1>
                    <div class="scroll-trigger">

                    </div>
                </div>
                <form class="section-intro__form" id="intro-form">
                    <div class="section-intro__form-card">
                        <div class="section-intro__form-header">
                            <h5 class="section-intro__form-title">
                                Закажите праздник!
                                <br> Оставьте заявку и мы вам перезвоним
                            </h5>
                        </div>
                        <div class="section-intro__form-body">
                            <div class="section-intro__form-group">
                                <label class="required-input">Ваше имя</label>
                                <input type="text" name="name" class="section-intro__form-input" id="contact-name" required placeholder="Иванов Андрей">
                            </div>
                            <div class="section-intro__form-group">
                                <label class="required-input">Телефон</label>
                                <input type="tel" name="phone" class="section-intro__form-input contact-phone" id="contact-phone" required placeholder="+7(___)___-__-__">
                            </div>
                            <div class="section-intro__form-group">
                                <label style="margin-bottom: 0.625rem; display: block;">Комментарии</label>
                                <textarea name="contact-message" id="contact-message" cols="30" rows="4" class="section-intro__form-message"></textarea>
                            </div>
                            <div class="section-intro__form-group">
                                <button type="submit" class="section-intro__form-button button button--primary">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-intro__video" id="intro-video">
            <video src="{{ asset('/assets/video/videoplayback.mp4') }}" type="video/mp4" autoplay muted loop></video>
        </div>
    </section>
    <section aria-label="Почему мы?" role="banner" class="main-content__about section-about" id="about">
        <div class="section-about__container container">
            <div class="section-about__inner">
                <div class="section-about__header">
                    <h2 align="left" role="heading" class="section-about__title title-xl">
                        Почему именно научное шоу профессора Чудакова?
                    </h2>
                </div>
                <div class="section-about__content">
                    <div role="columnheader" class="section-about__col-bl">
                        <div class="section-about__detail">
                            <ul role="listbox" class="section-about__detail-list">
                                <li role="listitem" class="section-about__detail-item">
                                    Большой выбор программ, мастер-классов и экспериментов и профессионализм ведущего!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    ВО ВСЕХ ОПЫТАХ И ЭКСПЕРИМЕНТАХ ДЕТИ ПРИНИМАЮТ АКТИВНОЕ УЧАСТИЕ!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    Удивительный сухой лёд, смерч в бутылке, джин науки, создание веселой газировки, сумасшедшие червяки, СЛАДКАЯ ВАТА И МНОГИЕ ДРУГИЕ ЭКСПЕРИМЕНТЫ - все это научное шоу!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    Удивительный сухой лёд, смерч в бутылке, джин науки, создание веселой газировки, сумасшедшие червяки, СЛАДКАЯ ВАТА И МНОГИЕ ДРУГИЕ ЭКСПЕРИМЕНТЫ - все это научное шоу!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    Праздники веселые, добрые и немного сумасшедшие!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    Ведущий высокопрофессиональный, харизматичный актёр театра и кино!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    Профессор не только актёр, но и аниматор, выступающий более 10лет и имеющий опыт работы в агентствах Сказка34, Эндорфинка34,Открывашка!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    Дети получают мотивацию к получению новых знаний!
                                </li>
                                <li role="listitem" class="section-about__detail-item">
                                    А фото передают весь спектр эмоций детей и взрослых!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-about__col-bl">
                        <ul aria-label="Галерея" role="listbox" class="section-about__photo">
                            @forelse($images as $image)
                                <li role="listitem" class="section-about__photo-item">
                                    <a data-fslightbox="about-lightbox" role="link" href="{{ asset('/uploads/image_uploads/'. $image->image) }}" class="section-about__photo-link">
                                        <img src="{{ asset('/uploads/image_uploads/'. $image->image) }}" alt="" class="section-about__photo-img">
                                    </a>
                                </li>
                            @empty
{{--                                {{ __('Нет изображений') }}--}}
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="Услуги" role="banner" class="main-content__services section-services">
        <div class="section-services__container container">
            <div class="section-services__inner">
                <div class="section-services__header">
                    <h2 align="right" role="heading" class="section-services__title title-xl">
                        На какие праздники приглашают профессора Чудакова и научное шоу?
                    </h2>
                </div>
                <div class="section-services__content">
                    <ul role="listbox" class="section-services__grid">
                        <li role="listitem" class="section-services__grid-item">
                            <aside role="article" class="section-services__grid-article">
                                <div class="section-services__grid-icon">
                                    <i class='bx bxs-cake' ></i>
                                </div>
                                <h4 class="section-services__grid-name title-md">
                                    Дни рождения детей и подростков!
                                </h4>
                                <p class="section-services__grid-text">
                                    Каждый ребёнок ждёт чуда на празднике и Чудаков готов дарить чудеса!!!
                                </p>
                            </aside>
                        </li>
                        <li role="listitem" class="section-services__grid-item">
                            <aside role="article" class="section-services__grid-article">
                                <div class="section-services__grid-icon">
                                    <i class='bx bxs-school' ></i>
                                </div>
                                <h4 class="section-services__grid-name title-md">
                                    Познавательные занятия в школе и детском садике!
                                </h4>
                                <p class="section-services__grid-text">
                                    Чудаков знает очень много и готов делиться знаниями в игровой форме!
                                </p>
                            </aside>
                        </li>
                        <li role="listitem" class="section-services__grid-item">
                            <aside role="article" class="section-services__grid-article">
                                <div class="section-services__grid-icon">
                                    <i class='bx bxs-graduation' ></i>
                                </div>
                                <h4 class="section-services__grid-name title-md">
                                    ВЫПУСКНОЙ В НАЧАЛЬНОЙ ШКОЛЕ ИДЕТСКОМ САДУ
                                </h4>
                                <p class="section-services__grid-text">
                                    Каждый ребёнок ждёт чуда на празднике и Чудаков готов дарить чудеса!!!
                                </p>
                            </aside>
                        </li>
                        <li role="listitem" class="section-services__grid-item">
                            <aside role="article" class="section-services__grid-article">
                                <div class="section-services__grid-icon">
                                    <i class='bx bx-cake'></i>
                                </div>
                                <h4 class="section-services__grid-name title-md">
                                    ОТДЫХ И ВЕСЕЛЬЕ!
                                </h4>
                                <p class="section-services__grid-text">
                                    Чудаков умеет создавать отличное настроение, поэтому как только заскучаете сразу приглашайте меня!
                                </p>
                            </aside>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="Шоу - программы" role="banner" class="main-content__works section-works" id="show">
        <div class="section-works__container container">
            <div class="section-works__inner">
                <div class="section-works__header">
                    <h2 align="left" role="heading" class="section-works__title title-xl">
                        {{ __('Шоу - программы профессора Чудакова') }}
                    </h2>
                </div>
                <div class="section-works__content">
                    <ul role="listbox" class="section-works__show">
                        @forelse($shows as $show)
                            <li role="listitem" class="section-works__show-item">
                                <article role="article" class="section-works__show-article">
                                    <div class="section-works__show-image">
                                        <img src="{{ asset('/uploads/show/'.$show->banner) }}" alt="{{ $show->name }}">
                                    </div>
                                    <h3 class="section-works__show-name line-clamp">
                                        {{ $show->name }}
                                    </h3>
                                    <p class="section-works__show-detail line-clamp">
                                        {{ $show->small_text }}
                                    </p>
                                    <a href="{{ route('frontend.show', $show->id) }}" class="section-works__single-link button button--primary">{{ __('Подробнее') }}</a>
                                </article>
                            </li>
                        @empty
                            {{ __('Этот раздел редактируется') }}
                        @endforelse
                    </ul>
{{--                    <div class="section-works__action">--}}
{{--                        <a href="#" class="section-works__more-link">Смотреть еще</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <section aria-label="Отзывы" role="banner" class="main-content__feedback section-feedback" id="feedback">
        <div class="section-feedback__container container">
            <div class="section-feedback__inner">
                <div class="section-feedback__header">
                    <h2 align="left" role="heading" class="section-feedback__title title-xl">Отзывы о профессоре</h2>
                </div>
                <div class="section-feedback__content swiper-feedback">
                    <div class="section-feedback__list swiper-wrapper">
                        @forelse($feedbacks as $feedback)
                            <div class="section-feedback__list-item swiper-slide">
                                <a role="link" data-fslightbox="feedback-lightbox" href="{{ asset('/uploads/feedback/'.$feedback->image) }}" class="section-feedback__list-link">
                                    <img role="img" src="{{ asset('/uploads/feedback/'.$feedback->image) }}" alt="{{ $feedback->name }}" class="section-feedback__list-img">
                                </a>
                            </div>
                        @empty
                            {{ __('Этот раздел обновляется') }}
                        @endforelse
                    </div>
                    <div class="section-feedback__controller">
                        <button class="button button--outline btn-prev">
                            <i class='bx bx-left-arrow-alt' ></i>
                        </button>
                        <button class="button button--outline btn-next">
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="Вопросы" role="banner" class="main-content__faq section-faq" id="faq">
        <div class="section-faq__container container">
            <div class="section-faq__inner">
                <div class="section-faq__header">
                    <h2 align="right" role="heading" class="section-faq__title title-xl">Часто задаваемые вопросы</h2>
                </div>
                <div class="section-faq__content">
                    @forelse($questions as $question)
                        <div class="section-faq__accordion-list accordion-card">
                            <div class="accordion-card__header" aria-expanded="false">
                                <div class="accordion-card__title">
                                    {{ $question->name }}
                                </div>
                            </div>
                            <div class="accordion-card__content" aria-hidden="true" style="padding: 0 15px;">
                                {!! $question->text !!}
                            </div>
                        </div>
                    @empty
                        {{ __('Этот раздел редактируется') }}
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
