@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="name-of-service-appl fl jc-c ">
            <a class="transiction uppercase">Цены</a>
        </div>
        <div class="fl jc-c">
            <hr class="hr-trans">
        </div>
        <div class="container">
            <div class="block-information" style="height: 500px">
                <section id="services" class="services fl jc-c">
                    <a class="uppercase text-white">Наши услуги</a>
                </section>
                <div class="fl jc-c">
                    <hr class="hr-section">
                </div>
                <div class="sections fl gap-2 jc-c">
                    <div>
                        <div class="firtblock fl jc-c">
                            <a href="/#application" class="section-text text-white">Перевозка по городу</a>
                        </div>
                        <div>
                            <p class="text-white" style="width: 275px">Транспортировка по городу от 500 руб в
                                зависимости от
                                габаритов</p>
                        </div>
                    </div>
                    <div>
                        <div class="secondblock fl jc-c">
                            <a href="/#application" class="section-text-second text-white">Перевозка между городами</a>
                        </div>
                        <div>
                            <p class="text-white" style="width: 275px">Транспортировка по регионам от 2000 руб в
                                зависимости
                                от габаритов</p>
                        </div>
                    </div>
                    <div>
                        <div class="thirdblock fl jc-c">
                            <a href="/#application" class="section-text text-white">Полировка</a>
                        </div>
                        <div>
                            <p class="text-white" style="width: 275px">Полировка кузова от 3000 руб</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
