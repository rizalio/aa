@extends('layouts.main')
@section('title', '500 Email Adress Generated!')
@section('body')

<div class="container" id="tourpackages-carousel">
  <br />

  <hr />
  <div class="col-md-6 col-lg-6 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="alert alert-success">
          <h3>Success! 20 Credit Card Generated!</h3>
        </div>
            @foreach ($ccs as $key => $cc)
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="thumbnail">
                    <div class="caption">
                      <div class='col-lg-12'>
                          <span class="glyphicon glyphicon-credit-card"></span>
                      </div>
                      <div class='col-lg-12 well well-add-card'>
                          <h4>{{$cc['name']}}</h4>
                      </div>
                      <div class='col-lg-12'>
                          <p>{{$cc['number']}}</p>
                          <p class"text-muted">Exp: {{$cc['expirationDate']}}</p>
                      </div>
                      <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card">{{$cc['type']}}</button>
                  </div>
                </div>
              </div>
            @endforeach
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
