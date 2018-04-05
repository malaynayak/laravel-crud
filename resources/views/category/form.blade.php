<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>

    <div class="col-md-10">
        <input id="title" type="text" class="form-control" name="title"
            value="{{ isset($category) ? $category->title : old('title') }}" required autofocus>
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
        <a class="btn btn-danger" href="{{ route('categories.index') }}"> Cancel</a>
    </div>
</div>
