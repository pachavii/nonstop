@extends('app')

@section('content')
<div class="container-fluid">
<div class="container">
    <img src="https://images.unsplash.com/photo-1529590003495-b2646e2718bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1010&q=80" class="img-fluid cropped">
        <div class="topleft">รายการหนังสือคืน</div>
    	</div>
	
    <br><br>
    <returnlist ></returnlist>
</div>
@endsection