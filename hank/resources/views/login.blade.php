@extends('admin.layout')
@section('content')
  <body class="login-img3-body">
    <div class="container">
      <form class="login-form" action="{!!url('login')!!}" method="post">
      {!! csrf_field()!!}        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <a href="{!!url('registerform')!!}"><button class="btn btn-info btn-lg btn-block" type="button">Signup</button></a>
        </div>
      </form>
    </div>
  </body>
