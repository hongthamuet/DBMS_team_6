@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm tác giả
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
                                <form role="form" action="{{URL::to('/save-author')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên tác giả</label>
                                        <input type="text" name="author_name" class="form-control" id="exampleInputEmail1" placeholder="Tên tác giả">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="file" name="author_image" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả tác giả</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="author_desc"  id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <select name="author_status" class="form-control input-sm m-bot15">
                                            <option value="1">Hiện thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="author_product" class="btn btn-info">Thêm tác giả</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection