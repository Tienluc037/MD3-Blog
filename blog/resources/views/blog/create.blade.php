{{--<form action="{{route('blogs.store')}}" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="title" placeholder="Nhập tiêu đề">--}}
{{--    <input type="text" name="content" placeholder="Nhập nội dung">--}}
{{--    <button>Create</button>--}}
{{--</form>--}}


@extends('home')
@section('title', 'Thêm mới')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="card-body">
                <div class="table-responsive">
                    <h1>Thêm mới</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{ route('blogs.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Tiêu đề</label> <br>
                            <label>
                                <input type="text" name="title" size="50" value="{{old("title")}}">
                            </label>
                            @error('title')
                            <p style="color: red">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="form-group" >
                            <label for="" >Nội dung
                            <textarea name="content" class="form-control" rows="5" cols="100">{{old('content')}} </textarea></label>
                            @error('content')
                            <p style="color: red">{{($message)}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a class="btn btn-success" href="{{route('blogs.index')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
