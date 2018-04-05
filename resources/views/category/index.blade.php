@extends('layouts.app')
@section('content')
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categories</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Add New Category</a>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                        <form style="display:inline;" class="form-horizontal"
                            method="POST" action="{{ route('categories.destroy', $category->id) }}">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this category ?');"
                                class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $categories->render() !!}
        </div>
    </div>
</div>
@endsection
