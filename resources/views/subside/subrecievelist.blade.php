@extends('app')


@section('content') 
<div class="container"> 
<img src="https://images.unsplash.com/photo-1533669955142-6a73332af4db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=839&q=80" class="img-fluid" style=" width: 100%;
  height: 100%;"> 
  <div class="text-block">
    <div class="content">
        
        <h1 style="font-size:70px;">สรุปรายการหนังสือ</h1>
        <h2 style="font-size:40px;">ประจำวันที่: {{date('d-m-y')}}</h2>
        
        <suborder style="margin-left:8%;" id="{!!$data!!}"></suborder>    
    </div>
    </div>
</div>    
@endsection