@extends('admin.layout')
@section('content')
  <body class="login-img3-body">
    <div class="container">
      <form class="login-form" action="{!!url('register')!!}" method="post" enctype="multipart/form-data">
      {!! csrf_field()!!}        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="first_name" placeholder="Name" autofocus>
            </div>
            <!-- <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="last_name" placeholder="Last name">
            </div> -->
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="email" class="form-control" name="email" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
            <!-- <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="web" placeholder="Web">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <select name="user_type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="producer">Producer</option>
                    <option value="customer">Customer</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="user_name" placeholder="username">
            </div> -->
            <!-- <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="company_name" placeholder="Company name">
            </div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="balance" placeholder="balance">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="bio" placeholder="Bio">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <select name="subscription_type" class="form-control">
                    <option value="free">Free</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="file" class="form-control" name="user_pics" placeholder="User pics">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="text" class="form-control" name="covers" placeholder="covers">
            </div> -->
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
      </form>
    </div>
  </body>
@endsection