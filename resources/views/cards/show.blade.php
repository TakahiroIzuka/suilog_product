@extends('app')

@section('title', 'ストア詳細')

@section('gmap_js')
  @if(app('env')=='local')
    <script src="{{ asset('/js/dis_rix_show.js') }}"></script>
    <script src="{{ asset('/js/gmap_api.js') }}"></script>
  @elseif(app('env')=='test')
    <script src="{{ asset('/js/dis_rix_show.js') }}"></script>
    <script src="{{ asset('/js/gmap_api.js') }}"></script>
  @elseif(app('env')=='production')
    <script src="{{ secure_asset('/js/dis_rix_show.js') }}"></script>
    <script src="{{ secure_asset('/js/gmap_api.js') }}"></script>
  @endif
@endsection

@section('php')
@php
$gmap_key = config('app.gmap_key');
$geo_php = $geo->lat . "," . $geo->lng;

@endphp
@endsection

@section('script_map')
<script>
  let geo = JSON.parse('<?php echo json_encode($geo_php) ?>');
  let gmap_key = JSON.parse('<?php echo json_encode($gmap_key) ?>');
</script>
@endsection

@section('content')
  @include('nav')
  <div class="container px-0">
    @include('cards.card')
    @include('articles.create')
    
    @if($articles->has(0))
      @foreach($articles as $article)
        @include('articles.article_card')
      @endforeach()
    @endif
  </div>

  <!-- マップ -->
  <div id="map" class="map-unuse"></div>
@endsection