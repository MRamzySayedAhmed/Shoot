@extends('admin.master')
@section('news')
<title>Shoot</title>
<div class="container">
@isset($success)
    <div class="alert alert-success" style="margin-top: 10px">
        {{$success}}
    </div>
@endisset
<div class="news">
<h2 class="heading">News</h2>
    <div class="new">
        <div class="panel">
            <div class="panel-heading">
                <i class="fa fa-newspaper-o"></i>
                <span>News</span>
            </div>
            <div class="panel-body">
            @php
                if(count($news) == 0)
                { @endphp
                <div class="alert alert-danger">
                    {{$error}}
                </div> @php }
            @endphp
            @foreach($news as $new)
                <div class="media">
                    <div class="media-left">
                        <img src="../admin/layout/images/news/{{$new->image}}"
                             class="media-object" style="width: 100px; height: 100px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$new -> title}}</h4>
                        <p>{{$new -> description}}</p>
                    </div>
                <a href="{{route('news_edit', $new -> id)}}" class="btn btn-info">
                    <i class="fa fa-edit"></i>Edit</a>
                <a href="{{route('news_delete', $new -> id)}}" class="news-delete btn btn-info">
                    <i class="fa fa-close"></i>Delete</a>
                </div>
                <hr>
            @endforeach
            </div>
        </div>
        <a href="{{url('admin/news_add')}}" class="btn btn-primary"><i class="fa fa-plus-square"></i>Add News</a>
	</div>
</div>
</div>
@endsection
