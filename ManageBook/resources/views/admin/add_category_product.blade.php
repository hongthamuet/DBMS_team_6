@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm thể loại sách
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
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{ csrf_field()}}
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên thể loại</label>
                                        <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="category_product_desc"  id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <select name="category_product_status" class="form-control input-sm m-bot15">
                                            <option value="1">Hiện thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="add_category_product" class="btn btn-info">Thêm thể loại</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection