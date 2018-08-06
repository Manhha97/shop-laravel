/*alert(12321);*/
/*$(function(){
    $('#shopcart').on('click', '.btn-shopcart', function () {
        alert(123);
      
    });
});*/

// $(document).ready(function(){
//     $('.btn-shopcart').click(function(){
        
//         var rowid = $(this).attr('id_update');
//         var qty = $(this).parent().parent().find('.qty').val();
//         var token = $("input[name='_token']").val();
//         $.ajax({
//             url:'capnhat/'+rowid+'/'+qty,
//             type:'GET',
//             cache:false,
//             data:{"_token":token,"id":rowid,"qty":qty},
//             success: function(data){
//                 location.reload();
//             }
//         });

//     });
// });



 /*$('#customer').on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        url: 'dathang',
        method: 'POST',
        data : $('#form-cart').find('form').serialize(),
        success : function(data){
            if(data.success == "yes"){
                $('#form-cart').modal('toggle');
                location.reload();

            }
            
        },
        error: function(data){
           $.each(data.responseJSON.errors, function(key,value) {

                if(key=='customer'){
                    $('#cust').append('<p style="color: red;">'+value+'</p');
                }

            }); 
        }
    })     
});*/