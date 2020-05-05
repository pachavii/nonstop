@extends('app')


@section('content')
<div class="container">
<img src="https://images.unsplash.com/photo-1536965764833-5971e0abed7c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="img-fluid" style=" width: 100%;
  height: 100%;"> 
  <div class="text-block4">
    <div class="content">
    <h1 style="font-size:70px;">รายการหนังสือคืน</h1>
       
    <returnlistdata style="margin-left:30%;" id="{!!$data!!}"></returnlistdata>
    </div>
    </div>
</div> 
@endsection