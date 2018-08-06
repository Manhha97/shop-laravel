@extends('layouts.admin')

@section('content')
<div class="content">
     <div id="page-wrapper">
        <h2 style="color: red">Thêm chi tiết</h2>
        <form style="margin-bottom: 30px" action="{{asset('')}}admin/detailstrore" method="POST" role="form">
                @csrf
                <div id="formappend">
                    <div style="border-bottom: 1px solid #ccc; margin-bottom: 20px">
                        <div style="display: inline-block; margin-right: 90px" class="form-group">
                            <label for="">Product ID</label><br>
                            <input name="product_id" type="number" style="width: 60px" value="{{$product_id}}">
                        </div>
                        <div style="display: inline-block;margin-right: 90px"  class="form-group">
                            <label for="">Color</label><br>
                            <input name="color_id" style="width: 198px; height: 30px" type="color" value="#4fdbd1">
                        </div>
                        <div style="display: inline-block;"  class="form-group">
                            <label for="">Quantity</label><br>
                            <input name="quantity" type="number">
                        </div>
                        <div class="form-group">
                            <label for="">Size</label><br>
                            <div id="ao" class="size">
                                <label for="">S</label>
                                <input style="margin-right: 15px" name="size_id[]" type="checkboxrad" value="S">
                                <label for="">M</label>
                                <input style="margin-right: 15px" name="size_id[]" type="checkboxrad" value="M">
                                <label for="">L</label>
                                <input style="margin-right: 15px" name="size_id[]" type="checkboxrad" value="L">
                                <label for="">XL</label>
                                <input style="margin-right: 15px" name="size_id[]" type="checkboxrad" value="XL">
                                <label for="">XXL</label>
                                <input style="margin-right: 15px" name="size_id[]" type="checkboxrad" value="XXL">

                                <!-- <form>
                                <input name="gioitinh" type="radio" value="S" />Nam
                                <input name="gioitinh" type="radio" value="M" />Nữ
                                <input name="gioitinh" type="radio" value="L" />Khác
                                </form> -->
                            </div>
                        </div>
                        <div style="display: inline-block;"  class="form-group">
                             <button type="submit" class="btn btn-primary">Add</button><br><br><br>
                        </div>
                       
                    </div>
                </div>
               
            </form>
           
    </div>
</div>
@endsection