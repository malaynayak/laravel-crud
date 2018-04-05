@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Edit Category - {{ $category->title }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('categories.update', $category->id) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        @include('category.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
