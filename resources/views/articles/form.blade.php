@csrf
<div class="md-form">
    <label>メールの件名</label>
    <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
    <label></label>
    <textarea name="body" required class="form-control" rows="18" placeholder="メールの本文">{{ old('body') }}</textarea>
</div>