@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Add Blog</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('blog.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
