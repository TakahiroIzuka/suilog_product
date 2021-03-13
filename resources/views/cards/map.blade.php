@extends('app')

@section('title', 'マップから探す')

@section('gmap_js')
  @if(app('env')=='local')
    <script src="{{ asset('/js/map.js') }}"></script>
    <script src="{{ asset('/js/gmap_api.js') }}"></script>
  @endif
  @if(app('env')=='production')
    <script src="{{ secure_asset('/js/map.js') }}"></script>
    <script src="{{ secure_asset('/js/gmap_api.js') }}"></script>
  @endif
@endsection

@section('php_map')
@php
$max = count($stores);

for($i = 0; $i < $max; $i++) {
  $stores_js[$i] = [
    'id' => $stores[$i]->id,
    'name' => $stores[$i]->name,
    'type' => $stores[$i]->type,
    'smoking' => $stores[$i]->smoking,
    'url' => $urls[$i]->url,
    'store_id' => $geos[$i]->store_id,
    'lng' => (float)$geos[$i]->lng, 
    'lat' => (float)$geos[$i]->lat
    ];
};
$gmap_key = config('app.gmap_key');
$link_show = config('app.link_show');

@endphp
@endsection()

@section('script_map')
<script>
    // PHPからデータの受け取り 
    let datas = JSON.parse('<?php echo json_encode($stores_js) ?>');
    let gmap_key = JSON.parse('<?php echo json_encode($gmap_key) ?>');
    let link_show = JSON.parse('<?php echo json_encode($link_show) ?>');
    let map;
    let marker = [];
    let infoWindow = [];
    let data = [];
    let max = datas.length;

    // for文で繰り返しながらobjに配列としてデータを入れ、markerdataにpushし、二次元配列を作る
    for (i = 0; i < max; i++) {
        var obj = {
            id: datas[i].id,
            lat: datas[i].lat,
            lng: datas[i].lng,
            name: datas[i].name,
            type: datas[i].type,
            smoking: datas[i].smoking,
            url: link_show + datas[i].id
        }
        // push メソッドで空の配列にオブジェクトを追加
        data.push(obj);
    }
</script>
@endsection

@section('css_map')
<style>
/* map用のstyle */
#map {
    width: 100%;
    height: 850px;
    margin: 0 auto;
}
</style>
@endsection

@section('content')
  @include('nav')
  <div class="container px-0">
    <!-- マップ用div要素 -->
    <div id="map"></div>
  </div>
@endsection
