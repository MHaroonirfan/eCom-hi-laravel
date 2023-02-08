@extends('master')
@section('content')

<div class="container">
<div class="row">
  <div class="col-sm-6">
    <img class="detail-img" src="{{$product['gallery']}}" alt="">
  </div>
  <div class="col-sm-6">
    <a href="/">Go Back</a>
  </div>
</div>
  
</div>
@endsection