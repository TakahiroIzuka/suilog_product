<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <i class="fas fa-user-circle fa-3x mr-1"></i>
    <div>
      <div class="font-weight-bold">
        {{ $store->name }}
      </div>
      <div class="font-weight-lighter">
        {{ $store->score }}
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
    <div class="description" id="{{ 'distance' }}">
      {{ $store['distance'] }}
      </div>
      <div class="description" id="{{ 'time' }}">
      {{ $store['time'] }}
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
</div>