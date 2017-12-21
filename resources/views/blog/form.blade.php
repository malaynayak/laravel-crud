<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>

    <div class="col-md-10">
        <input id="title" type="text" class="form-control" name="title"
            value="{{ isset($blog) ? $blog->title : old('title') }}" required autofocus>
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    <label for="content" class="col-md-2 control-label">Content</label>

    <div class="col-md-10">
        <textarea rows="10" id="content" class="form-control"
            name="content" required>{{ isset($blog) ? $blog->content : old('content') }}</textarea>
        @if ($errors->has('content'))
            <span class="help-block">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('featured_image') ? ' has-error' : '' }}">
    <label for="featured_image" class="col-md-2 control-label">Featured Image</label>

    <div class="col-md-10">
        <input id="featured_image" type="file" class="form-control" name="featured_image">

        @if ($errors->has('featured_image'))
            <span class="help-block">
                <strong>{{ $errors->first('featured_image') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <label for="published" class="control-label">
            <input {{ (isset($blog)) ? ($blog->published ? 'checked' : '' ) : (old('published') ? 'checked' : '') }} id="published" type="checkbox" name="published"> Publish
            </label>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
        <a class="btn btn-danger" href="{{ route('blogs.index') }}"> Cancel</a>
    </div>
</div>
