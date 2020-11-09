@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách tác giả
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
      <div class="col-sm-8"></div>
      <div class="col-sm-1 m-b-xs">
        <div class="row"><a style="margin-left: 5px" href="{{URL::to('/add-author')}}"><span class="fa-thumb-styling fa fa-plus-circle"></span></a></div>
        <div class="row"><div style="margin-left: -29px; color: #36C831; width: 150px "><b>Thêm tác giả</b></div></div>
      </div>
    </div>
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">',$message,'</span>';
                Session::put('message', null);
            }
        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên tác giả</th>
            <th>Ảnh</th>
            <th>Hiển thị</th>
            <th>Quản lí</th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_author as $key => $au)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $au->author_name }}</td>
            <td><img src="public/uploads/author/{{ $au->author_image }}" height="50" width="50"></td>
            <td><span class="text-ellipsis">
                <?php
                    if($au->author_status == 0){
                ?>
                    <a href="{{URL::to('/unactive-author/'.$au->author_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php    
                    }else{
                ?>
                    <a href="{{URL::to('/active-author/'.$au->author_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php 
                    }
                 ?>   
                </span>
            </td>
            <td>
                <a href="{{URL::to('/edit-author/'.$au->author_id)}}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a href="{{URL::to('/delete-author/'.$au->author_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('bạn có chắc là muốn xóa tác giả này không?')">
                    <i class="fa fa-trash-o text-danger text"></i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection