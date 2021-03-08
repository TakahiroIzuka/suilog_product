@auth
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header p-0" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link p-0 fs-4 btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><p class="text-left m-3">お店のクチコミを書く</p>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body pt-0">
        @include('error_card_list')
        <div class="card-text">
          <form method="POST" action="{{ route('articles.store') }}">
            @include('articles.form')
            <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endauth