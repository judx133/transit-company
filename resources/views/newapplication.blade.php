@extends('layouts.app')

@section('content')
<div class="container">
    <div class="name-of-service-appl fl jc-c ">
        <a class="transiction uppercase">Мои заявки</a>
    </div>
    <div class="fl jc-c">
        <hr class="hr-trans">
    </div>
    @foreach($data as $da)
     <div class="block-new-application card" style="width: 18rem;">
  <div class="card-body fl jc-sb">
      <div>
          <h5 class="card-title">Что перевозим: {{$da->name}}</h5>
          <p class="card-text">{{$da->cityfirst}}</p>
          <img src="/img/svg/cities.png" alt="cities">
          <p class="card-text">{{$da->citysecond}}</p>
      </div>
      <hr class="hr-appl">
      <div class="appl-text-right fl fd-col">
          <p class="appl-text">Имя *пример*</p>
          <p class="appl-text">Номер машины о999оо55</p>
          <p class="appl-text">Марка машины *ГАЗель*</p>
      </div>
  </div>
</div>
@endforeach
            </div>
@endsection
