@extends('admin.master')
@section('login')
<title>Shoot</title>
<div class="login">
 <div class="container">
     @if(Session::has('success'))
         <div class="alert alert-success">
             {{Session::get('success')}}
         </div>
     @endif
      @if(Session::has('error'))
         <div class="alert alert-danger">
             {{Session::get('error')}}
         </div>
      @endif

    <h2 class="heading">Login</h2>

				<form method="post" action="{{route("admin.login")}}">

                    @csrf

                    <!-- Starting The Login Form -->

                        <label class="control-label">Country Code</label>
                        <select class="form-control" name="country" style="margin-bottom:10px"> Select Your Country Code
                            <option>...</option>
                            <option>EG +20</option>
                            <option>SA +30</option>
                            <option>UAE +50</option>
                        </select>
                        <label class="control-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone Number">
                        @error('phone')
                        <div class="alert alert-danger" style="margin-top: 10px">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="control-label">Password</label>
                        <input type="password" class="password form-control" name="password" placeholder="Your Password">
                        <input type="checkbox" class="display">Show Password
                        <input type="checkbox" name="remember_me" style="margin-left: 5px">Remember Me
                        <input type="submit" value="Login" class="btn btn-primary btn-block">
                        @error('password')
                        <div class="alert alert-danger" style="margin-top: 10px">
                            {{$message}}
                        </div>
                        @enderror

				</form>

</div>
</div>
@endsection
