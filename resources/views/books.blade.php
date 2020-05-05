@extends('app')

@section('content')
    <div class="container-fluid">
    <div class="container">
        <img src="https://images.unsplash.com/photo-1536965764833-5971e0abed7c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="img-fluid cropped">
        <div class="topleft">หนังสือ <div style="width:100%;height:10px;margin-top:-120px;">
		<a href="/book/create" class="btn4"><i class="fas fa-plus"></i>  เพิ่มหนังสือ</a>
		</div></div>
        
        </div>
        <br><br>
        <booklist></booklist>
    </div>
@endsection