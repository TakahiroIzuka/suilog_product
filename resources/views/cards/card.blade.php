<div class="card mb-3 mar-t-3">
  <div class="row m-3">
    <div class="col-md-5 px-0">
      <div class="mt-3">
        <img class="d-block mx-auto img-fluid shadow-2-strong" src="{{ $store['store_pic'] }}" id="{{ 'store_pic' }}"></img>
      </div>
    </div>

    <div class="col-md-7 px-2">
      <div class="d-flex mt-3">
        <h3 class="font-weight-bold h2 card-title mb-1" id="{{ 'name' }}">
          {{ $store['name'] }}
        </h3>
      </div>

      <div class="card-body pt-0 pb-2">
        <div class="card-body pt-0 pb-2 pl-0">
            <div class="card-text">
              <card-like
                :initial-is-liked-by='@json($store->isLikedBy(Auth::user()))'
                :initial-count-likes='@json($store->count_likes)'
                :authorized='@json(Auth::check())'
                endpoint="{{ route('cards.like', ['store' => $store]) }}"
              >
              </card-like>
            </div>
          </div>
        @if($store->smoking == '全席喫煙可')
          <div class="description text-success" id="{{ 'smoking' }}">
            {{ $store->smoking }}
          </div>
        @else 
          <div class="description text-warning" id="{{ 'smoking' }}">
            {{ $store->smoking }}
          </div>
        @endif
        <a class="description" id="{{ 'type' }}">
          ・ジャンル : {{ $store['type'] }}
        </a>
        <div class="font-weight-lighter" id="{{ 'score' }}">
          ・食べログ評価 ( {{ $store['score'] }} )
        </div>
        <div class="description" id="{{ 'station' }}">
          ・最寄駅 : {{ $store['station'] }}
        </div>
        <div class="row pl-3">
          <div class="col-5 px-0">・ここから徒歩 : </div>
          <div class="col-1 px-0 text-center orange-text" id="{{ 'time_h' }}"></div>
          <div class="col-2 px-0" id="{{ 'hour' }}"></div>
          <div class="col-1 px-0 text-center orange-text" id="{{ 'time_m' }}"></div>
          <div class="col-1 px-0">分</div>
        </div>
        <div class="row pl-3">
          <div class="col-3 px-0">・距離 : </div>
          <div class="col-1 px-0 text-center green-text" id="{{ 'distance' }}"></div>
          <div class="col-1 px-0">km</div>
        </div>
      </div>
    </div>
  </div>


  <div class="card-body mt10">
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center mb-2">
        <a href="{{ $url->url }}" type="text/html" class="btn btn-primary btn-lg col-md-8 mx-auto">食べログページへ</a>
      </div>
      <div class="col-md-6 d-flex justify-content-center mb-2">
        <a href="{{ route('card.index') }}" type="text/html" class="btn btn-secondary btn-lg col-md-6 mx-auto">一覧へ戻る</a>
      </div>
    </div>
  </div>
</div>