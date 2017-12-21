@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Edit Blog - {{ $blog->title }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('blogs.update', $blog->id) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        @include('blog.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
