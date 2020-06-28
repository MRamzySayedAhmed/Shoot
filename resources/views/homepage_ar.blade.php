@extends('master_ar')
@section('homepage_ar')

    <title>Shoot</title>

    <script>

        // Showing The Details Of The Selected News

        function locate()
        {
            $value = document.getElementById("search").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    //  console.log("Success");
                }
            };

            xmlhttp.open("get", "ajax/news_search.php?value=" + $value, true);
            xmlhttp.send();

        }

        function getDetails(id)

        {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    //  console.log("Success");
                }
            };

            xmlhttp.open("get", "ajax/news_details.php?id=" + id, true);
            xmlhttp.send();

        }


    </script>

    <div class="news">
        <div class="container">

            @isset($success)
                <div class="alert alert-success" style="margin-top: 10px">
                    {{$success}}
                </div>
            @endisset

            <p id='txtHint'></p>

            <label class="control-label" style="float:right; margin-top: 10px; margin-bottom: 10px">بحث عن اخبار<i class="fa fa-search" style="margin-left: 5px;"></i></label>
            <input type="text" class="form-control" id="search" name="search" placeholder="ابحث باستخدام عناوين او تفاصيل الاخبار" style="margin-top: 10px; direction: rtl">
            <a onclick="locate()" class="btn btn-primary form-control" style="float:right; margin-top: 10px">بحث</a>

            <div class="row">

                    @foreach ($news_ar as $new_ar)

                        <div class="new col-sm-6 col-md-3">

                            <a onclick="getDetails('<?php echo $new_ar->id ?>')"><h3 class="text-center">{{$new_ar->title}}</h3></a>

                            <a onclick="getDetails('<?php echo $new_ar->id ?>')"><img class="image" src="../admin/layout/images/news/{{$new_ar->image}}" title="صوره الخبر"></a>

                        </div>
                    @endforeach

                    <ul class="controls_ar pagination pagination-lg" style="margin-left: 40%; margin-top: 70px;">

                            @if(count($news_ar) < 10)
                                <li class="disabled"><a href="#">الصفحه القادمه</a></li>
                                <li><a href="/?page=1" style="margin-left: 10px">الصفحه السابقه</a></li>
                            @else
                                <li><a href="/?page=2">الصفحه القادمه</a></li>
                                <li><a href="/?page=1">الصفحه السابقه</a></li>
                            @endif

                    </ul>

            </div>
        </div>
    </div>
@endsection
