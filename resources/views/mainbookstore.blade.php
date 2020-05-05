@extends('app')

@section('content')
<div class="container">
<img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1753&q=80" class="img-fluid cropped"><img>
<div class="center">ร้านบรรณาลักษณ์</div>
</div>

<div class="content">

    <div class="row justify-content-center">
    
           
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <td>
                <div class="row">
                        
                        
                        <button class="btn btn-primary" onclick="location.href='{{ url('book') }}'">
                            <img width="120" height="120"  src="https://img.icons8.com/dusk/64/000000/book.png"/><br>หนังสือ
                        </button>

                        <button class=" btn btn-primary" onclick="location.href='{{ url('publisher') }}'">
                            <img width="120" height="120" src="https://img.icons8.com/ultraviolet/80/000000/link-company-parent.png"/><br>  สำนักพิมพ์
                         </button>

                        <button class=" btn btn-primary"  onclick="location.href='{{ url('subagent') }}'">
                            <img width="120" height="120" src="https://img.icons8.com/dusk/64/000000/conference-call.png"/><br>ซับเอเย่นต์
                        </button>
                        
                        <button class=" btn btn-primary" onclick="location.href='{{ url('member') }}'">
                             <img width="120" height="120" src="https://img.icons8.com/dusk/50/000000/groups.png"/><br> สมาชิก
                        </button>
                        
                        
                    
                    <button class="btn btn-primary" onclick="location.href='{{ url('recievebook') }}'">
                    <img width="120" height="120" src="https://img.icons8.com/dusk/64/000000/enter-2.png"/><br>รับหนังสือเข้า
                    </button>

                    <button class="btn btn-primary" onclick="location.href='{{ url('storeanalyse') }}'">
                    <img width="120" height="120"  src="https://img.icons8.com/dusk/64/000000/graph.png"/><br>วิเคราะห์ข้อมูล
                    </button>

                </div>
            
                

                    

                
            </td>
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
    </div>
</div>
@endsection




