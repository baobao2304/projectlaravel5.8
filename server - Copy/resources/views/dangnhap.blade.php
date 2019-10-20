<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('admin_asset/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('admin_asset/css/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_asset/css/matrix-login.css') }}" />
        <link href="{{ asset('admin_asset/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>

        <div id="loginbox">            
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
            @endif
            @if(session('thongbao'))
                session('thongbao')
            @endif
            <form id="loginform" class="form-vertical" action="{{ url('admin/login') }}" method="POST">
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            @csrf
				 <div class="control-group normal_text"> <h3><img src="{{ asset('admin_asset/img/logoCty111.png') }}" width="250px" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" name="email" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <button class="btn btn-success" type="submit" >Login</button>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info">Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="{{ asset('admin_asset/js/jquery.min.js') }}"></script>  
        <script src="{{ asset('admin_asset/js/matrix.login.js') }}"></script> 
    </body>

</html>
