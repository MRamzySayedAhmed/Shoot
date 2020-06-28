@extends('admin.master')
@section('news_add')
<title>Add News</title>
<div class="news_add">
 <div class="container">

    <h2 class="heading">Add News</h2>

				<form method="post" action="{{url('admin/news_insert')}}"
                      enctype="multipart/form-data">

                    @csrf

                    <!-- Starting The News Adding Form -->

                        <div class="form-group">
                            <label class="control-label">Language</label>
                            <select class="form-control" name="language">
                                <option value="ar">AR</option>
                                <option value="en">EN</option>
                            </select>
                            @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" name="title" required maxlength="100">
                        @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" class="form-control" name="description" required maxlength="500">
                        @error('description')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Writer</label>
                            <input type="text" class="form-control" name="writer" required maxlength="100">
                        @error('writer')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        @error('image')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="submit" value="Add News" class="btn btn-primary btn-block">

				</form>

</div>
</div>
@endsection
