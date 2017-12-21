@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $blog->title }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{!! $blog->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
