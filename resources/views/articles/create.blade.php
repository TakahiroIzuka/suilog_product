@auth
<!-- <div class="container px-0">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3">
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
</div> -->

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-center p-0 fs-4" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          お店のクチコミを書く
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