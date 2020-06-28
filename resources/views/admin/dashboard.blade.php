@extends('admin.master')
@section('dashboard')
<title>Shoot</title>
<div class="container">

    @if(Session::has('success'))
        <div class="alert alert-success" style="margin-top: 10px">
            {{Session::get('success')}}
        </div>
    @endif

        @isset($success)
            <div class="alert alert-success" style="margin-top: 10px">
                {{$success}}
            </div>
        @endisset

    <h1 class="heading_statics">Dahboard</h1>
    <div class="row">

            <div class="show_statics">
             <div class="panel">
                <div class="panel-heading">
                 <i class="fa fa-line-chart"></i>
                 <span>Latest Statics</span>
                </div>
             </div>
                <div class="row">
                    <div class="total col-sm-12 col-md-6 col-lg-4">
                        <h2>Total News</h2>
                        <i class="fa fa-newspaper-o"></i>
                        <a href ="{{url('admin/news')}}"><span>{{$news_number}}</span></a>
                    </div>
                    <div class="total col-sm-12 col-md-6 col-lg-4">
                        <h2>Total Users</h2>
                        <i class="fa fa-users"></i>
                        <a href ="#"><span>{{$users_number}}</span></a>
                    </div>
                </div>
            </div>
        <div class="latest">
                <div class="news col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <i class="fa fa-newspaper-o"></i>
                            <span> Latest News
                                <form action="{{route('admin.dashboard')}}">
                                    <select name="latest" class="form-control" style="margin-top: 5px">
                                        <option value="5" @if($selected_news_number == 5) @php echo "selected" @endphp @endif>5</option>
                                        <option value="6" @if($selected_news_number == 6) @php echo "selected" @endphp @endif>6</option>
                                        <option value="7" @if($selected_news_number == 7) @php echo "selected" @endphp @endif>7</option>
                                        <option value="8" @if($selected_news_number == 8) @php echo "selected" @endphp @endif>8</option>
                                        <option value="9" @if($selected_news_number == 9) @php echo "selected" @endphp @endif>9</option>
                                        <option value="10" @if($selected_news_number == 10) @php echo "selected" @endphp @endif>10</option>
                                    </select>
                                    <input class="btn btn-primary" type="submit" value="Show" style="margin-top: 10px">
                                </form>
                            </span>
                        </div>
                        <div class="panel-body">
                            @foreach($latest_news as $latest_new)
                                <div class="latest_news">
                                    <ul>
                                        <li><span>{{$latest_new -> title}}</span><a href="{{route('news_edit', $latest_new -> id)}}" class="btn btn-info">Edit</a></li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                 </div>

            <div class="news-number">
                <form action="{{route('homepage')}}">
                <label class="control-label">Number of News That Will Be Shown in the Homepage</label>
                <select name="show" class="form-control">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>

                </div>

            </div>

</div>
</div>
        </div>

    </div>
</div>
@endsection
