
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

