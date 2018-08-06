var postdetailTable;
var url=asset + 'admin/products/list';
var tableProduct = $('#posts-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/admin/products/list",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'code', name: 'code' },
            { data: 'name', name: 'name' },
            { data: 'name_vendor', name: 'name_vendor' },
            { data: 'description', name: 'description' },
            { data: 'price', name: 'price' },
            { data: 'thumbnail', name: 'thumbnail' },
            { data: 'action', name: 'action' },
        ]
    }); 
$(function(){
    $('#posts-table').on('click', '.btn-delele', function () {
        var urlDelete = $(this).attr('userId');
        swal({
            title: "Bạn có muốn xóa không?",
            
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(function (willDelete) {
            console.log(urlDelete);
            if (willDelete) {
                $.ajax({
                    type: 'delete',
                    url: urlDelete,
                    success: function success(response) {
                        // $this.parent('tr').remove();
                        tableProduct.ajax.reload();
                    }
                });
            } 
        });
    });
    // $delete_table=$('#show-detail');
    
   /* $('#posts-table').on('click', '.btn_chitiet', function () {
        $('#show').modal('show');
        var post_id = $(this).attr('userId');
        $.ajax({
            type: 'get',
            url: asset + 'admin/show/' + post_id,
            success: function success(response) {
                $('#code').text(response.code);
                $('#name').text(response.name);
                $('#description').html(response.description);
                $('#img').attr('src', response.thumbnail);
                $('#color').text(response.color);
                $('#price').text(response.price);
            }
        });
    });*/
    
    $('#posts-table').on('click', '.btn-show', function () {
        $('#show-product').modal('show');
        var post_id = $(this).attr('userid');
        /*alert(post_id);*/
        $.ajax({
            type: 'get',
            url: 'show/product/' + post_id,
            success: function(response) {
                console.log(response[0]);
                $('#code').text(response[0].code);
                $('#name').text(response[0].name);
                $('#price').text(response[0].price);
                $('#description').text(response[0].description);
                $('#name_vendor').text(response[0].name_vendor);
                $('#size_id').text(response[0].size_id);
                $('#img').attr('src', 'http://shop.zent/storage/'+response[0].thumbnail);
            }
        });
    });

   




    $(document).on('click', '.btn-show-detail', function () {
        $('#show-detail').modal('show');
        var post_id = $(this).attr('userId');
        $('#show-detail').attr('userId',post_id);
             postdetailTable = $('#postdetail-table').DataTable({
            processing: true,
            serverSide: true,
            destroy:true,
            ajax: 'productdetai/list/' +  post_id,

            columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'quantity', name: 'quantity' }, 
            { data: 'size_id', name: 'size_id' }, 
            { data: 'color_id', name: 'color_id' },
            { data: 'action', name: 'action' }
            ]
          });
        });

        $(document).on('click', '#abc', function () {
        $('#detail_chitiet').modal('show');
            var id_product = $(this).attr('userId');
            $('#pr_dt').val(id_product);
       /* $('#detail_chitiet').attr('userId',add_detail);*/

        // $.ajax({
        //     type: 'get',
        //     url: asset + 'form/' + post_id,

        //     });
        });
        
    });

$(document).on('click', '.btn-deletedetail', function () {
        var delete_id = $(this).attr('productId');
        swal({
            title: "Bạn có muốn xóa không?",
            
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(function (willDelete) {
            if (willDelete) {
                $.ajax({
                    type: 'delete',
                    url: asset + 'admin/deletedetailcolor/' + delete_id,
                    success: function success(response) {
                        postdetailTable.ajax.reload();
                        // location.reload();
                        
                    }
                });
               
            } 
        });
    });


    
