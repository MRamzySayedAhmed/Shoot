@extends('admin.master')
@section('news_edit')
<title>Edit News</title>
<div class="news_edit">
 <div class="container">

    <h2 class="heading">Edit News</h2>

    <form method="post" action="{{route('news_update', $news -> id)}}"
          enctype="multipart/form-data">

                    @csrf

                    <!-- Starting The News Editing Form -->

                        <div class="form-group">
                            <label class="control-label">Language</label>
                            <select class="form-control" name="language">
                                @if($news -> language == 'ar')
                                    <option value="ar">AR</option>
                                    <option value="en">EN</option>
                                @else
                                    <option value="en">EN</option>
                                    <option value="ar">AR</option>
                                @endif
                            </select>
                            @error('language')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" name="title" required maxlength="100" value="{{$news -> title}}">
                        @error('title')
                            <div class="alert alert-danger" style="margin-top: 10px">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" class="form-control" name="description" required maxlength="500" value="{{$news -> description}}">
                        @error('description')
                            <div class="alert alert-danger" style="margin-top: 10px">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Writer</label>
                            <input type="text" class="form-control" name="writer" required maxlength="100" value="{{$news -> writer}}">
                        @error('writer')
                            <div class="alert alert-danger" style="margin-top: 10px">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" class="form-control" name="image" required
                                   value="{{$news -> image}}">
                        @error('image')
                            <div class="alert alert-danger" style="margin-top: 10px">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <input type="submit" value="Edit News" class="btn btn-primary btn-block">

    </form>

</div>
</div>
@endsection
