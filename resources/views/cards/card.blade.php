<div class="card mb-3 mar-t-3">
  <div class="card-body d-flex flex-row pb-2">
    <i class="fas fa-beer fa-3x mr-1"></i>
    <div>
      <div class="d-flex">
        <h3 class="font-weight-bold h4 card-title mb-1" id="{{ 'name' }}">
          {{ $store['name'] }}
        </h3>
        <a class="description px-3" id="{{ 'type' }}">
          ジャンル : {{ $store['type'] }}
        </a>
        <div class="font-weight-lighter" id="{{ 'score' }}">
          スイログ評価 ( {{ $store['score'] }} )
        </div>
      </div>
    </div>
  </div>
  <div class="card-body pt-0 pb-2">
    <div class="description" id="{{ 'station' }}">
      最寄駅 : {{ $store['station'] }}
    </div>
    <div class="d-flex">
        <div class="description pr-3" id="{{ 'distance' }}"></div>
        <div class="description" id="{{ 'time' }}"></div>
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
  </div>
  <div class="card-body pt-0 pb-2 pl-3">
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