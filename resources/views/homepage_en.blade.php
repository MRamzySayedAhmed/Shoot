@extends('master_en')
@section('homepage_en')

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

            <label class="control-label" style="margin-top: 10px; margin-bottom: 0px"><i class="fa fa-search" style="margin-right: 5px;"></i>Search</label>
            <input type="text" class="form-control" id="search" placeholder="Search Using the Title or the Description of the News" name="search" style="margin-top: 10px">
            <a onclick="locate()" class="btn btn-primary form-control" style="margin-top: 10px">Search</a>

            <div class="row">

                    @foreach ($news_en as $new_en)

                        <div class="new col-sm-6 col-md-3">

                            <a onclick="getDetails('<?php echo $new_en->id ?>')"><h3 class="text-center">{{$new_en->title}}</h3></a>

                            <a onclick="getDetails('<?php echo $new_en->id ?>')"><img class="image" src="../admin/layout/images/news/{{$new_en->image}}" title="The News Image"></a>

                        </div>
                    @endforeach

                    <ul class="controls_en pagination pagination-lg" style="margin-left: 40%; margin-top: 70px;">

                        @if(count($news_en) < 10)
                            <li class="disabled"><a href="#">Next</a></li>
                            <li><a href="/?page=1" style="margin-left: 10px">Previous</a></li>
                        @else
                            <li><a href="/?page=2">Next</a></li>
                            <li><a href="/?page=1">Previous</a></li>
                        @endif


            </div>
        </div>
    </div>
@endsection
