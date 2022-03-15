@extends("home")
@section("title","Favorite")
@section("content")
<div class="card shadow mb-4" style="text-align: center">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" ><a style="color: #524b8cd9">Bài viết yêu thích</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr style="color: #524b8cd9">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Quantity</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tbody>
                @foreach($blogs as $blog)
{{--                    {{dd($blog)}}--}}
                    <tr>
                        <td>{{$blog["id"]}}</td>
                        <td>{{$blog["title"]}}</td>
                        <td>{{$blog["content"]}}</td>
                        <td>{{$blog["quantity"]}}</td>
                        <td><a style="color: red" href="{{route('blogs.deleteToFavorite',$blog['id'])}}" onclick=" return confirm('Bạn có muốn xóa?')">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


