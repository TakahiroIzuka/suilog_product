@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="8" placeholder="本文">{{ old('body') }}</textarea>
</div>
<input type="hidden" name="store_id" value="{{ $store->id }}">