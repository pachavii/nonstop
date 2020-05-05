@extends('app')

@section('content')
    <div class="container">
		 
	<img src="https://images.unsplash.com/photo-1468273519810-d3fe4c125cdb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="img-fluid cropped">
        <div class="topleft">ซับเอเย่นต์<div style="width:100%;height:10px;margin-top:-120px;"> 
			<a  class="btn4" onclick="location.href='{{ url('returnlist') }}'">ฟอร์มรับหนังสือคืน</a>
            
         	<a  class="btn4 " onclick="location.href='{{ url('payment') }}'">การชำระเงิน</a>
			 </div></div>
        </div>
         	
			 
         	<subagentlist></subagentlist>
    </div>
@endsection