@extends('layouts.landing')

@section('title', 'Servicios')

@section('content')
  <h1 class="text-center">Servicios</h1>
  <div style="display: flex; gap: 20px; justify-content: center;">
    @component('_components.card')
      @slot('card_img', asset('assets/img/1.jpg'))
      @slot('card_title', 'Service #1')
      @slot('card_content', 'Lorem ipsum dolor set aimet.')
    @endcomponent

    @component('_components.card')
      @slot('card_img', asset('assets/img/2.jpg'))
      @slot('card_title', 'Service #2')
      @slot('card_content', 'Lorem2 ipsum dolor set aimet.')
    @endcomponent

    @component('_components.card')
    @slot('card_img', asset('assets/img/3.jpg'))
      @slot('card_title', 'Service #3')
      @slot('card_content', 'Lorem3 ipsum dolor set aimet.')
    @endcomponent
  </div>
@endsection