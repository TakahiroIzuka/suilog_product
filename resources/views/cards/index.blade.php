@extends('app')

@section('title', 'ストア一覧')

@section('gmap_js')
<script src="js/distance_matrix_index.js"></script>
<script src="/js/gmap_api.js"></script>
@endsection

@section('php')
@php
$gmap_key = config('app.gmap_key');
$link_show = config('app.link_show');

$max = count($stores);

$obj = json_decode(json_encode($geos));
for ($i = 0; $i < $max; $i++) {
  $lat[$i] = $obj->data[$i]->lat;
  $lng[$i] = $obj->data[$i]->lng;
  $value[$i] = "$lat[$i],$lng[$i]";
}

for($i = 0; $i < $max; $i++) {
  if($stores[$i]->smoking == '全席喫煙可') {
  $stores_js[$i] = [
    'id' => $stores[$i]->id,
    'name' => $stores[$i]->name,
    'score' => $stores[$i]->score,
    'type' => $stores[$i]->type,
    'station' => $stores[$i]->station,
    'distance' => '',
    'time' => '',
    'smoking_green' => $stores[$i]->smoking,
    'smoking_yellow' => '',
    'url' => $link_show . $stores[$i]->id
    ];
  } else {
    $stores_js[$i] = [
    'id' => $stores[$i]->id,
    'name' => $stores[$i]->name,
    'score' => $stores[$i]->score,
    'type' => $stores[$i]->type,
    'station' => $stores[$i]->station,
    'distance' => '',
    'time' => '',
    'smoking_green' => '',
    'smoking_yellow' => $stores[$i]->smoking,
    'url' => $link_show . $stores[$i]->id
    ];
  }
};

@endphp
@endsection

@section('script_map')
<script>
  let geos = JSON.parse('<?php echo json_encode($value) ?>');
  let stores = JSON.parse('<?php echo json_encode($stores_js) ?>');
  let gmap_key = JSON.parse('<?php echo json_encode($gmap_key) ?>');
  let max = geos.length;
</script>
@endsection

@section('css_map')
<style type="text/css">
    /* マップは表示しないので,0pxを指定 */
    #map {
      height: 0px;
    }
</style>
@endsection

@section('content')
@include('nav')
<div class="container" id="main">
  <!-- jsでinsertBeforeを指定する用の捨て要素 -->
  <div id="sute"></div>
  @for($i = 0; $i < $max; $i++)
  @php
  $store = $stores_js[$i]
  @endphp
  <div class="card mt-3">
    <div class="card-body d-flex flex-row">
      <a class="stretched-link" id="{{ 'link' . $i }}"></a>
      <i class="fas fa-beer fa-3x mr-1"></i>
      <div>
        <h3 class="font-weight-bold h4 card-title" id="{{ 'name' . $i }}">
          {{ $store['name'] }}
        </h3>
        <div class="font-weight-lighter" id="{{ 'score' . $i }}">
          {{ $store['score'] }}
        </div>
      </div>
    </div>
    <div class="card-body pt-0 pb-2">
      <a class="h4" id="{{ 'type' . $i }}">
      {{ $store['type'] }}
      </a>
      <div class="description" id="{{ 'station' . $i }}">
      {{ $store['station'] }}
      </div>
      <div class="description" id="{{ 'distance' . $i }}">
      {{ $store['distance'] }}
      </div>
      <div class="description" id="{{ 'time' . $i }}">
      {{ $store['time'] }}
      </div>
      <div class="description text-success" id="{{ 'smoking_green' . $i }}">
      {{ $store['smoking_green'] }}
      </div>
      <div class="description text-warning" id="{{ 'smoking_yellow' . $i }}">
      {{ $store['smoking_yellow'] }}
      </div>
    </div>
  </div>
  @endfor
  <!-- ペジネーション -->
  {{ $stores->links() }}
</div>

<!--The div element for the map -->
<div id="map"></div>
@endsection
