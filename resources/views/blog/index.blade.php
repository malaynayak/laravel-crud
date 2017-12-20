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
                <h2>Blogs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Add New Blog</a>
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
                        <th>Author</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->author->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('blogs.show', $blog->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
                        <form style="display:inline;" class="form-horizontal"
                            method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $blogs->render() !!}
        </div>
    </div>
</div>
@endsection
