<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewBie's Content! - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <style media="screen">
    .well {
      min-height: 20px;
      padding: 0px;
      margin-bottom: 20px;
      background-color: #D9D9D9;
      border: 1px solid #D9D9D9;
      border-radius: 0px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
      padding-left: 15px;
      border:0px;
    }
    .thumbnail .caption {
      padding: 9px;
      color: #333;
      padding-left: 0px;
      padding-right: 0px;
    }
    .icon-style
    {
      margin-right:15px;
      font-size:18px;
      margin-top:20px;
    }
    p
    {
      margin:3px;
    }
    .well-add-card
    {
      margin-bottom:10px;
    }
    .btn-add-card
    {
      margin-top:20px;
    }
    .thumbnail {
      display: block;
      padding: 4px;
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 6px solid #D9D9D9;
      border-radius: 15px;
      -webkit-transition: border .2s ease-in-out;
      -o-transition: border .2s ease-in-out;
      transition: border .2s ease-in-out;
      padding-left: 0px;
      padding-right: 0px;
    }
    .btn
    {
      border-radius:0px;
    }
    .btn-update
    </style>

    @yield('body')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
