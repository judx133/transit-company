@extends('layouts.app')

@section('content')
    <div class="container-transiction">
        <div class="name-of-service fl jc-c ai-c">
            <a class="transiction uppercase">Грузоперевозки Омск</a>
        </div>
        <div class="fl jc-c">
            <hr class="hr-trans">
        </div>
        <div class="blocktransiction">
            <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                <div class="itc-slider__item">
                    <div class="transiction-info fl fl-row">
                        <div class="transiction-text fl fd-col jc-c">
                            <div class="fl">
                                <img src="/img/svg/done.svg" alt="Safety" class="done"><a
                                    class="text-trans">Безопасно</a>
                            </div>
                            <div>
                                <img src="/img/svg/done.svg" alt="Safety" class="done"><a
                                    class="text-trans">Отслеживаемый
                                    процесс</a>
                            </div>
                            <div>
                                <img src="/img/svg/done.svg" alt="Safety" class="done"><a class="text-trans">100%
                                    Страховка
                                    груза</a>
                            </div>
                            <div>
                                <hr class="hr">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="button-text">Подробнее</a>
                    </div>
                    <button class="itc-slider__btn itc-slider__btn_prev"></button>
                    <button class="itc-slider__btn itc-slider__btn_next"></button>
                </div>
            </div>
            <div class="dots fl ai-c jc-c">
                <img src="/img/svg/dots.svg" alt="dots">
            </div>
        </div>
        <!-- Block Information -->
        <div class="container">
            <div class="block-information" style="height: 900px">
                <div class="fl">
                    <div class="information fl fd-col text-white">
                        <a class="information-text">О транспортировке груза</a>
                        <hr class="hr-info">
                        <a class="info-text">Это процесс, в результате которого совершается перемещение с места на место
                            каких-либо объектов и
                            грузов
                            при помощи транспорта.
                            Наша компания работает уже несколько лет и имеет обширную базу клиентов.
                        </a>
                    </div>
                    <img src="/img/svg/PhotoAbout.svg" alt="Transit" class="transit">
                </div>
                <div class="services fl jc-c">
                    <a class="uppercase text-white">Наши услуги</a>
                </div>
                <div class="fl jc-c">
                    <hr class="hr-section">
                </div>
                <div class="sections fl gap-2 jc-c">
                    <div class="firtblock fl jc-c">
                        <a href="#" class="section-text text-white">Первозка по городу</a>
                    </div>
                    <div class="secondblock fl jc-c">
                        <a href="#" class="section-text-second text-white">Перевозка между городами</a>
                    </div>
                    <div class="thirdblock fl jc-c">
                        <a href="#" class="section-text text-white">Полировка</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-appl fl jc-c">
            <a class="body-appl-text">Оставить заявку</a>
        </div>
        <div class="block-application">
            <div class="fl jc-sb">
                <div class="application jc-sb">
                    <hr class="form-application">
                    <form action="{{route('newapplications')}}" method="post">
                        @csrf
                        <input name="name" type="text" placeholder="Что будет перевозиться*" class="form">
                        <input name="number" type="text" placeholder="Номер телефона*" class="form">
                        <input name="email" type="text" placeholder="Почта*" class="form">
                        <input name="cityfirst" type="text" placeholder="Город отправления*" class="form">
                        <input name="citysecond" type="text" placeholder="Город прибытия*" class="form">
                        <button class="form-button-text">отправить </button>
                    </form>
                </div>
                <img src="/img/svg/Application.svg" alt="application" class="appl-image">
            </div>
            <div class="main-appl fl jc-c">
                <a class="uppercase main-appl-text text-white">Наши отзывы</a>
            </div>
            <div class="rating fl fd-col">
                <img src="/img/svg/Rating.svg" alt="rating" class="rating-img">
                <a class="rating-text text-white"> Владимир Д.Д</a>
                <a class="text-white"> Услуги выполнены качественно, работы проведены в установленные сроки.</a>
            </div>
        </div>
    </div>
@endsection
