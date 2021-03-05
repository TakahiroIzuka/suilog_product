@extends('app')

@section('title', 'ストア一覧')


@section('content')
  @include('nav')
  <div class="container">
    @include('cards.card')
  </div>
@endsection