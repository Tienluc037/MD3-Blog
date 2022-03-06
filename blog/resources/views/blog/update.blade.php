{{--<form action="{{route('blogs.update', $blog->id)}}" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="title" placeholder="Nhập tiêu đề" value="{{$blog->title}}">--}}
{{--    <input type="text" name="content" placeholder="Nhập nội dung" value="{{$blog->content}}" >--}}
{{--    <button>Update</button>--}}
{{--</form>--}}


@extends('home')
@section('title', 'Chỉnh sửa')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="card-body">
                <div class="table-responsive">
                    <h1>Chỉnh sửa</h1>
                </div>
                <div class="col-12">
                <form method="post" action="{{ route('blogs.update',$blog->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{$blog->title}}" required>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Enter content" value="{{$blog->content}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-success" href="{{route('blogs.index')}}">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
