@extends('layouts.main')
@section('title', 'List Feature')
@section('body')

<div class="container">
  <br />
  <hr />
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1>AVAILABLE FEATURES</h1>
        <ul>
          <li><a href="{{url('/email')}}">Email Address</a></li>
          <li><a href="{{url('/usaaddress')}}">USA Address</a></li>
          <li><a href="{{url('/creditcard')}}">Credit Card</a></li>
          <li><a href="{{url('/mailpass')}}">Email & Password</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-6 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="alert alert-info">
          <h1>INFORMATIONS</h1>
          <h4>All data is grabbed with cURL on Google.com,
              Yahoo.com, Bing.com and another
              site to give best result!</h4>
            </div>
        <hr />
        <div class="alert alert-warning">
          <h1>SUPPORT US!</h1>
          <h4>We are using ads to keep our services up!
            , so please disable your adblock to support us :)
          </h4>
        </div>
        <hr />
        <h1>SPONSORED!</h1>

        <hr />
        <h1>MORE OPTIONS!</h1>
          <btn class="btn btn-success btn-lg" style="width:100%;" onclick="CopyClipboard()" id="btn-copy" data-toggle="tooltip" title="Copied!">Copy All!</btn>
          <hr />
          <a class="btn btn-warning btn-lg" style="width:100%;" href="{{url('/email')}}">Generate More!</a>
          <hr />


      </div>
    </div>
    <hr />
    <p>Copyright &copy; {{date('Y')}} Rizal Fakhri & <span class="glyphicon glyphicon-chevron-left"></span><span class="glyphicon glyphicon-chevron-right"></span> with <span class="glyphicon glyphicon-heart"></span> on Indonesia!</p>
  </div>
</div>
@endsection
