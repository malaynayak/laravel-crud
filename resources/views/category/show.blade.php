@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $category->title }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                <a class="btn btn-success" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
