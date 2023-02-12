@extends('layouts.frontend')
@section('content')
    <section aria-label="Главный экран" role="banner" class="main-content__intro section-show">
        <div class="section-show__container container">
            <div class="section-show__inner">
                <div class="section-show__banner">
                    <img src="{{ asset('/uploads/show/'.$show->banner) }}" alt="{{ $show->name }}">
                </div>
                <div class="section-show__headline">
                    <h2 class="section-show__title title-xl">
                        {{ $show->name }}
                    </h2>
                </div>
                <div class="section-show__detail">
                    <ul class="section-show__detail-list">
                        <li class="section-show__detail-item">
                            Кол-во людей: <span>{{ $show->people }} чел.</span>
                        </li>
                        <li class="section-show__detail-item">
                            Цена за мероприятие: <span>{{ $show->price }} руб.</span>
                        </li>
                    </ul>
                </div>
                <div class="section-show__content">
                    {!! $show->long_text !!}
                </div>
            </div>
        </div>
    </section>
@endsection
