<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <i class="fas fa-beer fa-3x mr-1"></i>
    <div>
      <div class="font-weight-bold h4 card-title">
        {{ $store->name }}
      </div>
      <div class="font-weight-lighter">
        スイログ評価 ( {{ $store->score }} )
      </div>
    </div>
  </div>
  <div class="card-body pt-0 pb-2">
    <h3 class="h4 card-title">
    {{ $store->type }}
    </h3>
    <div class="card-text">
    {!! nl2br(e( $store->station )) !!}
    </div>
    <div class="description" id="{{ 'distance' }}"></div>
    <div class="description" id="{{ 'time' }}"></div>
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
        <a href="{{ $url->url }}" type="button" class="btn btn-primary btn-lg col-md-8 mx-auto">食べログページへ</a>
      </div>
      <div class="col-md-6 d-flex justify-content-center mb-2">
        <a href="{{ route('card.index') }}" type="button" class="btn btn-secondary btn-lg col-md-6 mx-auto">一覧へ戻る</a>
      </div>
    </div>
  </div>
</div>