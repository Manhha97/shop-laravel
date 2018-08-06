            <form action="{{asset('')}}admin/updatepost/{{$product->id}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
                @csrf
                {{ method_field('put')}}
                <div class="col-md-7">            
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" class="form-control" id="product_id" placeholder="Code" name="product_id" value="">
                            </div>
                            @if($errors->has('product_id'))
                                <p style="color: red">{{$errors->first('product_id')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Số Lượng(*)</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Name" name="quantity" value="">
                            </div>
                            @if($errors->has('quantity'))
                                <p style="color: red">{{$errors->first('quantity')}}</p>
                            @endif
                        </div>                  
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Size(*)</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập giá nhập" name="original_price" value="{{$product->original_price}}">
                            </div>
                            @if($errors->has('original_price'))
                                <p style="color: red">{{$errors->first('original_price')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div style="display: inline-block;margin-right: 90px"  class="form-group">
                                <label for="">Color</label><br>
                                <input name="color_id" style="width: 198px; height: 30px" type="color" value="" id="size_id">
                            </div>
                        </div>
                    </div>
                              
                </div>
                <div class="col-md-5 clearfix">                         
                </div>
                
                <button class="btn btn-success " style="width: 15%; margin-left: 5%" type="submit"> UPDATE</button> 
                <br><br>
            </form> 