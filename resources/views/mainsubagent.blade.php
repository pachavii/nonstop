@extends('app')

@section('content')
<img src="https://images.unsplash.com/photo-1527156888422-c61254b6f812?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="img-fluid" style=" width: 100%;
  height: 100%;">
  
  			@foreach ($subname as $key => $data)
            <div class="center" style="top:50%;">ร้าน{{$data->name}}
            </div>  
            
            
            @endforeach 
    <br><br><br><br><br>
            <a class="center1" style="font-size:60px; color:white; left:35%;" href="{{ url('subrecievelist/'.$data->id) }}" >สรุปรายการหนังสือ</a>
            <br>
            <a class="center1" style="font-size:60px; color:white; left:65%;" href="{{ url('subreturnlist/'.$data->id) }}" >คืนหนังสือ</a>
        	
            

@endsection


