@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật tác giả
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">',$message,'</span>';
                                Session::put('message', null);
                            }
                        ?>
                        <div class="panel-body">
                            @foreach($edit_author as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-author/'.$edit_value->author_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên tác giả</label>
                                        <input type="text" value="{{$edit_value->author_name}}" name="author_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="file" name="author_image" class="form-control" id="exampleInputEmail1" >
                                        <img src="{{URL::to('public/uploads/author/'.$edit_value->author_image)}}" height="70" width="70">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả tác giả</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="author_desc"  id="exampleInputPassword1" >{{$edit_value->author_desc}}</textarea> 
                                    </div>
                                    <button type="submit" name="edit_author" class="btn btn-info">Cập nhật tác giả</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
        </div>
@endsection