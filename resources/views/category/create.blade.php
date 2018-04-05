@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Add Category</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form no-validate class="form-horizontal" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('category.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
