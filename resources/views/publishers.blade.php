@extends('app')

@section('content')
    <div class="container">
    <div class="container">
        <img src="https://images.unsplash.com/photo-1466386460451-cbc548bf581b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="img-fluid cropped">
        <div class="topleft">สำนักพิมพ์ <div style="width:100%;height:10px;margin-top:-120px;">
		<a href="/publisher/create" class="btn4"><i class="fas fa-plus"></i>  เพิ่มสำนักพิมพ์</a>
        </div>
         <br><br>
         <publisherlist></publisherlist>

    </div>
@endsection