@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm đầu sách mới
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">',$message,'</span>';
                                Session::put('message', null);
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên đầu sách</label>
                                        <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Giá">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label>Thể loại sách</label>
                                        <select name="product_cate" class="form-control input-sm m-bot15">
                                            @foreach($cate_product as $key => $cate)
                                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tác giả</label>
                                        <select name="product_author" class="form-control input-sm m-bot15">
                                            @foreach($author as $key => $au)
                                                <option value="{{$au->author_id}}">{{$au->author_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="product_desc"  id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="product_content"  id="exampleInputPassword1" placeholder="Nội dung"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số trang</label>
                                        <input type="text" name="product_numberOfPages" class="form-control" id="exampleInputEmail1" placeholder="Số trang">
                                    </div>
                                    <div class="form-group">
                                        <label>Bán chạy nhất?</label>
                                        <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="1">Có</option>
                                            <option value="0">Không</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection