@extends('app')

@section('content')
<div class="container-fluid">
    <div class="container">
    <img src="https://images.unsplash.com/photo-1510172951991-856a654063f9?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="width: 100%;
  height: 100%;"> 
		  <div class="text-block3">
  <div class="content"> <div style="margin-top:0px;font-size:80px;" class="title m-b-md">รายการหนังสือ</div>

	
        
         	<!-- <button class="btn btn-primary" onclick="location.href='{{ url('/member/create') }}'">Add</button> -->
         	<!-- <div style="margin-left:5% !important;">
			<button  class="btn4 btn-primary">จัดหนังสือให้ซับ</button> 
			 </div> -->
             <h2 style="font-size: 30px;color:black;">ประจำวันที่ : {{date('d-m-y')}}</h2>
             <recievebook id="{!!$dow!!}"></recievebook>
         	
    </div>
@endsection