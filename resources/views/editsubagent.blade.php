@extends('app')

@section('content')
<div class="container"> 
<img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="img-fluid" style=" width: 100%;
  height: 100%;"> 
  <div class="text-block">
<div class="content">
    <div class="title m-b-md">แก้ไขข้อมูลซับเอเย่นต์</div>
            <editsubagent id="{!!$id!!}"></editsubagent>
</div>
</div>
@endsection