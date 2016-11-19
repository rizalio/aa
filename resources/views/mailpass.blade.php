@extends('layouts.main')
@section('title', '500 Email Adress Generated!')
@section('body')

<div class="container">
  <br />
  <hr />
  <div class="col-md-6 col-lg-6 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="alert alert-success">
          <h3>Success! 500 Email & Password Generated!</h3>
        </div>
          <ul id="email-list">
            @foreach($mailpass as $key => $data)
              <li>{{$data['email'] . " | " . $data['password']}}</li>
            @endforeach
          </ul>
          <hr />
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

<script type="text/javascript">
function CopyClipboard(){
    // creating new textarea element and giveing it id 't'
    let t = document.createElement('textarea')
    t.id = 't'
    // Optional step to make less noise in the page, if any!
    t.style.height = 0
    // You have to append it to your page somewhere, I chose <body>
    document.body.appendChild(t)
    // Copy whatever is in your div to our new textarea
    t.value = document.getElementById('email-list').innerText
    // Now copy whatever inside the textarea to clipboard
    let selector = document.querySelector('#t')
    selector.select()
    document.execCommand('copy')
    // Remove the textarea
    document.body.removeChild(t)
    $(".btn-copy").tooltip('show');
}
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection
