@extends('layouts.admin')

@section('content')
<div class="content">
     <div class="container">
        <div class="table-responsive">
            @if(session()->has('flag'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session()->get('flag')}}
                </div>
            @endif
            <center><h2 style="color: red">ĐƠN HÀNG </h2></center>
            <br>
            <form action="{{asset('')}}searchbill" method="get">
                <div class="input-outer" style="float: right;">
                    <input type="search" name="key" value="" maxlength="128" placeholder="Tìm kiếm">
                    <button type="submit" title=""><i class="fas fa-search"></i></button>
                </div>                                  
            </form>
            <table class="table table-hover" id="bill-table">
                <br><br>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Customer_id</th>
                        <th>Product_id</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Hình thức</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($search_bill as $search_bill)
                    <tr>
                        <td>{{$search_bill->id}}</td>
                        <td>{{$search_bill->customer_id}}</td>
                        <td>{{$search_bill->product_id}}</td>
                        <td>{{$search_bill->ten_sp}}</td>
                        <td>{{$search_bill->soluong}}</td>
                        <td>{{$search_bill->total}}</td>
                        <td>{{$search_bill->hinhthuc}}</td>
                        <td>
                            <a  href="">
                                <button  class="btn btn-warning show-bill" bill_id="{{$search_bill->id}}"><i class="fas fa-edit"></i></button>
                            </a>
                            <button  class="btn btn-danger del-bill" bill_id="{{$search_bill->id}}"><i class="fas fa-trash-alt"></i>
                            </button>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            </div>

        </div>
        
    </div>
</div>

@endsection
