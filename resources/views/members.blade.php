@extends('app')

@section('content')
    <div class="container">
    <div class="container">
        <img src="https://images.unsplash.com/photo-1464865885825-be7cd16fad8d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" class="img-fluid cropped">
        <div class="topleft">สมาชิก <div style="width:100%;height:10px;margin-top:-120px;"> 
        <a  href="/member/create" class="btn4"><i class="fas fa-plus"></i>  เพิ่มสมาชิก</a>
			 </div></div>
        </div>
        <br><br>
        <memberlist></memberlist>

    </div>
@endsection