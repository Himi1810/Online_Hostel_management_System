@extends('website.master')
@section('contents')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <!-- <title>Signin </title> -->

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/"> -->

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
  <body class="text-center">
    <div class="container" style="margin-left:300px; padding-right:400px; margin-top: 30px;">
<form action="{{route('website.do.employee.employeeregistation')}}" method="POST" class="form-signin"> 
        @csrf
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputName" class="sr-only">Enter your Name</label>
      <input name="name" type="text" id="inputname" class="form-control" placeholder="Name" required autofocus>
      <label for="inputPhone_number" class="sr-only">Enter your phone Number</label>
      <input name="phone" type="number" id="inputNumber" class="form-control" placeholder="Phone Number" required autofocus>
      <label for="inputAddress" class="sr-only">Address</label>
      <input name="address" type="text" id="inputaddress" class="form-control" placeholder="Address" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
    </form>
</div>
  </body>
</html>                          

@endsection
