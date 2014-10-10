<!DOCTYPE html>
<html>
<head>
  <title>My Awesome Laravel Site</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="/js/moment.js"></script>
  <script src="/js/mymomentcode.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="icon" href="../../favicon.ico">
  <link rel="stylesheet" href="/css/rissa_style.css">

  @yield('page-header')
</head>
<body>

  
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" id="start" href="http://rissawaters.com/">Rissa's World</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            <li><a id="home" href="{{{ action('PostsController@index') }}}">Home</a></li>
            <li><a id="blog" href="{{{ action('PostsController@create') }}}">Blog</a></li>
            <li><a id="resume" href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
            <li><a id="portfolio" href="{{{ action('HomeController@showPortfolio') }}}">Portfoilo</a></li>
   
          </ul>

          <!-- <form class="form-inline" role="form">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">@</div>
                <input class="form-control" type="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
          </form> -->

        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="jumbotron">
      <div class="container">
        <h1>Rissa's World!</h1>
        <p id="content0">This is my first blog, yay!</p>
<!--         <p><a class="btn btn-primary btn-lg" role="button" href="">Learn more &raquo;</a></p> -->
      </div>
</div>

@if (Session::has('successMessage'))
  <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif

@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

<div class="container" id="content">
  @yield('content')
</div>
    
</body>
</html>