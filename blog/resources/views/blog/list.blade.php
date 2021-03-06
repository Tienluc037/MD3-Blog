@extends('home')
@section('title','Danh sách bài viết')
@section('content')
{{--    <a href="{{route('logout')}}">Logout</a><br>--}}
{{--    <a href="{{route('blogs.showFavorite')}}">Favorite List({{count(session()->get('favorite')??[])}})</a>--}}
    <div class="card shadow mb-4" style="text-align: center">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{route("blogs.create")}}"
                                                                                        style="color: #5d5987">
                    Thêm bài viết</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                       style="color: #32737ceb">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th colspan="4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td><a style="color: red" onclick="return confirm('Bạn có muốn xóa?')"
                                   href="{{route('blogs.destroy',$blog->id)}}">Delete</a></td>
                            <td><a href="{{route('blogs.edit',$blog->id)}}">Update</a></td>
                            <td><a style="color: darkgreen" href="{{route('blogs.detail',$blog->id)}}">Detail</a></td>
                            <td><a
                                    href="{{route("blogs.addToFavorite",$blog->id)}}">Favorite</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
