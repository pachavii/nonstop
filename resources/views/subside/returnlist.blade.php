@extends('app')

@section('content')             
<div class="container" align="center" > 

 <img src="https://images.unsplash.com/photo-1533669955142-6a73332af4db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=839&q=80" class="img-fluid" style=" width: 100%;
  height: 100%;">  
  <div style="margin-top:80px;" class="text-block4"> 
<div style="height:750px;" class="content"> 
     <h1 align="center" style="font-size:80px;">คืนหนังสือ</h1>
    @switch($m)
                @case(1)
                    <h2 style="font-size:30px;">ยอดคืนประจำเดือน: มกราคม</h2>
                    @break

                @case(2)
                    <h2>ยอดคืนประจำเดือน: กุมภาพันธ์</h2>
                    @break

                @case(3)
                    <h2>ยอดคืนประจำเดือน: มีนาคม</h2>
                    @break

                @case(4)
                    <h2 style="font-size:30px;">ยอดคืนประจำเดือน: เมษายน</h2>
                    @break

                @case(5)
                    <h2>ยอดคืนประจำเดือน: พฤษภาคม</h2>
                    @break

                @case(6)
                    <h2>ยอดคืนประจำเดือน: มิถุนายน</h2>
                    @break

                @case(7)
                    <h2>ยอดคืนประจำเดือน: กรกฎาคม</h2>
                    @break

                @case(8)
                    <h2>ยอดคืนประจำเดือน: สิงหาคม</h2>
                    @break

                @case(9)
                    <h2>ยอดคืนประจำเดือน: กันยายน</h2>
                    @break

                @case(10)
                    <h2>ยอดคืนประจำเดือน: ตุลาคม</h2>
                    @break

                @case(11)
                    <h2>ยอดคืนประจำเดือน: พฤศจิกายน</h2>
                    @break

                @case(12)
                    <h2>ยอดคืนประจำเดือน: ธันวาคม</h2>
                    @break

                @default
                    error 
    @endswitch
    

		<form action="/subside/create" method="POST">
        {{csrf_field()}}
        <section>
            <div class="panel panel-header">
               <input type="hidden" name="subagents_id" value="{{$i}}">

                <div class="panel panel-footer">
                    <table style="margin-top:20px !important;" border="1" class="table table-bordered" >
                        <thead>
                            <tr style="font-size:35px; font-weight: bold;">
                                <th>รายการ</th>
                                <th>จำนวน</th>
                                <th>ราคา</th>
                                <th></th>
                                <th><a href="#" class="btn7"><i class="fas fa-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="font-size:35px; font-weight: bold;">
                                <td><input style="padding: 10px -80px !important;" type="text" name="item_name[]" class="form-control" required=""></td>
                                <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
                                <td><input type="text" name="price[]" class="form-control price" required=""></td>
                                <td><input type="text" name="amount[]" class="form-control amount" required=""></td>
                                <td><a href="#" class="btn7"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="border: none"></td>
                                <td style="border: none"></td>
                                <td style="font-size:30px;">รวม</td>
                                <td style="font-size:30px;"><b class="total"></b></td>
                                
                                <td><input style="background-color:rgba(114, 255, 71, 0.5);" onclick="location.href='{{ url('/home') }}'" type="submit" name="" value="submit" class="btn2 btn-success"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <br><br>
                    <button style="margin-top:30px;"  class="btn2 btn-primary" onclick="location.href='{{ url('/home') }}'">back</button>
                </div>
            </div>
        </section>
    </form>
		</div>
	</div>
</div>
    </div> 
</div>

@endsection
<script type="text/javascript">
    $('tbody').delegate('.quantity,.price','keyup',
        function(){
            var tr=$(this).parent().parent();
            var quantity=tr.find('.quantity').val();
            var price=tr.find('.price').val();
            var amount=(quantity*price);
            tr.find('.amount').val(amount);
            total();
    });
    function total(){
        var total = 0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
            total += amount;
        });
        $('.total').html(total+" บาท");      
    }
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>' + 
        '<td><input type="text" name="item_name[]" class="form-control" required=""</td>' + 
        '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>' +
        '<td><input type="text" name="price[]" class="form-control price" required=""></td>' +
        '<td><input type="text" name="amount[]" class="form-control amount" required=""></td>' +
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("please insert data");
        }
        else{
            $(this).parent().parent().remove();
        }
        
    });
</script>

