@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <style>
        .item-list,
        .info-box {
            background: #fff;
            padding: 10px;
        }

        .item-list-body {
            max-height: 300px;
            overflow-y: scroll;
        }

        .panel-body p {
            margin-bottom: 5px;
        }

        .info-box {
            margin-bottom: 15px;
        }

        .item-list-footer {
            padding-top: 10px;
        }

        .panel-heading a {
            display: block;
        }

        .form-inline {
            display: inline;
        }

        .form-inline select {
            padding: 4px 10px;
        }

        .btn-menu-select {
            padding: 4px 10px
        }

        .disabled {
            pointer-events: none;
            opacity: 0.7;
        }

        .menu-item-bar {
            background: #eee;
            padding: 5px 10px;
            border: 1px solid #d7d7d7;
            margin-bottom: 5px;
            width: 90%;
            cursor: move;
            display: block;
        }

        /* .menu-item-child {
            background: #eee;
            padding: 0 0 10px 20px;
            border: none;
            width: 90%;
            margin-bottom: 5px;
            cursor: move;
            display: block;
        } */

        #serialize_output {
            display: block;
        }

        .menulocation label {
            font-weight: normal;
            display: block;
        }

        body.dragging,
        body.dragging * {
            cursor: move !important;
        }

        .dragged {
            position: absolute;
            z-index: 1;
        }

        ol.example li.placeholder {
            position: relative;
        }

        ol.example li.placeholder:before {
            position: absolute;
        }

        #menuitem {
            list-style: none;
        }

        #menuitem ul {
            list-style: none;
        }

        .input-box {
            width: 90%;
            background: #fff;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 5px;
        }

        .input-box .form-control {
            width: 50%
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://johnny.github.io/jquery-sortable/js/jquery-sortable.js"></script>

    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Menu</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Chỉnh sửa menu</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('manage-menus') }}" class="btn btn-danger mr-2">Quay lại <i
                            class="la la-undo"></i></a>
                </div>
            </div>
        </div>
        {{-- <h2><span>{{ $menus->title }}</span></h2> --}}
        <div class="content info-box">
            @if(count($menus) > 0)
            Chọn menu để chỉnh sửa:
            <form action="{{route('manage-menus')}}" class="form-inline">
                <select name="id">
                    @foreach($menus as $menu)
                    @if($desiredMenu != '')
                    <option value="{{$menu->id}}" @if($menu->id == $desiredMenu->id) selected
                        @endif>{{$menu->title}}
                    </option>
                    @else
                    <option value="{{$menu->id}}">{{$menu->title}}</option>
                    @endif
                    @endforeach
                </select>
                <button class="btn btn-sm btn-primary btn-menu-select">Select</button>
            </form>
            OR
            @endif
            <a class="btn btn-sm btn-primary" href="{{ route('get.creat_menu') }}">Create a new menu</a>.
        </div>
        <div class="row" id="main-row">
            <div class="col-sm-3 cat-form @if(count($menus) == 0) disabled @endif">
                <div class="panel-group" id="menu-items">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#categories-list" data-toggle="collapse" data-parent="#menu-items">Danh mục sản
                                phẩm
                                <span class="fa fa-chevron-down pull-right"></span>
                            </a>
                        </div>
                        <div class="panel-collapse collapse in" id="categories-list">
                            <div class="panel-body">
                                <div class="item-list-body">
                                    @foreach($categories as $cat)
                                    <p>
                                        <input type="checkbox" name="select-category[]" value="{{$cat->id}}">
                                        {{$cat->name}}
                                    </p>
                                    @endforeach
                                </div>
                                <div class="item-list-footer">
                                    <label class="btn btn-sm btn-primary">
                                        <input type="checkbox" id="select-all-categories"> Select All</label>
                                    <button type="button" class="pull-right btn-sm btn-success border-0"
                                        id="add-categories" desiredMenu-id="{{ $desiredMenu->id ?? '' }}">
                                        Add to Menu</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#select-all-categories').click(function(event) {   
                            if(this.checked) {
                                $('#categories-list :checkbox').each(function() {
                                this.checked = true;                        
                                });
                            }else{
                                $('#categories-list :checkbox').each(function() {
                                this.checked = false;                        
                                });
                            }
                        });
                        </script>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#posts-list" data-toggle="collapse" data-parent="#menu-items">Danh mục bài viết
                                <span class="fa fa-chevron-down pull-right"></span>
                            </a>
                        </div>
                        <div class="panel-collapse collapse" id="posts-list">
                            <div class="panel-body">
                                <div class="item-list-body">
                                    @foreach($posts as $post)
                                    <p><input type="checkbox" name="select-post[]" value="{{$post->id}}">
                                        {{$post->name}}
                                    </p>
                                    @endforeach
                                </div>
                                <div class="item-list-footer">
                                    <label class="btn btn-sm btn-primary"><input type="checkbox" id="select-all-posts">
                                        Select All</label>
                                    <button type="button" id="add-posts"
                                        class="pull-rightbtn btn-sm btn-success border-0">Add to Menu</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#select-all-posts').click(function(event) {   
                                if(this.checked) {
                                    $('#posts-list :checkbox').each(function() {
                                    this.checked = true;                        
                                    });
                                }else{
                                    $('#posts-list :checkbox').each(function() {
                                    this.checked = false;                        
                                    });
                                }
                            });
                        </script>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#custom-links" data-toggle="collapse" data-parent="#menu-items">Custom Links <span
                                    class="fa fa-chevron-down pull-right"></span></a>
                        </div>
                        <div class="panel-collapse collapse" id="custom-links">
                            <div class="panel-body">
                                <div class="item-list-body">
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="url" id="url" class="form-control" placeholder="https://">
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="linktext" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Slug En</label>
                                        <input type="url" id="url_en" class="form-control" placeholder="https://">
                                    </div>
                                    <div class="form-group">
                                        <label>Title En</label>
                                        <input type="text" id="linktext_en" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="item-list-footer">
                                    <button type="button" class="pull-right btn-sm btn-success border-0"
                                        id="add-custom-link">Add to Menu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 cat-view">
                @if($desiredMenu == '')
                <h4>Create New Menu</h4>
                <form method="post" action="{{route('create-menu')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Name</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-sm btn-primary">Create Menu</button>
                        </div>
                    </div>
                </form>
                @else
                <div id="menu-content">
                    <div id="result"></div>
                    <div style="min-height: 240px;">
                        <p>Chọn danh mục sản phẩm, danh mục bài viết hay tạo custom link cho menu</p>
                        @if($desiredMenu != '')
                        <ul class="menu ui-sortable" draggable="true" id="menuitems">
                            @if(!empty($menuitems))
                            @foreach($menuitems as $key=>$item)
                            <li data-id="{{$item->id}}"><span class="menu-item-bar mb-0"><i
                                        class="fas fa-sort-amount-down-alt"></i>
                                    @if(empty($item->name)) {{$item->title}} @else {{$item->name}} @endif <a
                                        href="#collapse{{$item->id}}" class="pull-right" data-toggle="collapse">
                                        {{ $item->type }}
                                        <i class="fa fa-chevron-down"></i></a></span>
                                <div class="collapse" id="collapse{{$item->id}}">
                                    <div class="input-box">
                                        {{-- <button class="btn btn-sm btn-warning text-uppercase w-100">{{ $item->type
                                            }}</button> --}}
                                        <form method="post" action="{{route('update-menuitem',['id'=>$item->id])}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Slug</label>
                                                        <input type="text" name="slug" value="{{$item->slug}}"
                                                            class="form-control w-100">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Slug En</label>
                                                        <input type="text" name="slug_en" value="{{$item->slug_en}}"
                                                            class="form-control w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" name="title" value="{{$item->title}}"
                                                            class="form-control w-100">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Title En</label>
                                                        <input type="text" name="title_en" value="{{$item->title_en}}"
                                                            class="form-control w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Icon Thumb</label>
                                                        <input type="file" name="icon_thumb" class="form-control w-100"
                                                            value="{{ $item->icon_thumb }}">
                                                        <img class="m-menu-media-card__img bg-dark w-50" 
                                                            src="{{ pare_url_file_product($item->icon_thumb) }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Thumbnail</label>
                                                        <input type="file" name="thumbnail" class="form-control w-100"
                                                            value="{{ $item->thumbnail }}">
                                                            <img class="m-menu-media-card__img bg-dark w-50" 
                                                            src="{{ pare_url_file_product($item->thumbnail) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @if($item->type == 'custom')
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" name="slug" value="{{$item->slug}}"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="target" value="_blank" @if($item->target ==
                                                '_blank') checked @endif> Open in a new tab
                                            </div>
                                            @endif --}}
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-primary">Save</button>
                                                <a href="{{route('delete-menuitem',['id'=>$item->id,'key'=>$key])}}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <ul class="child-menu {{ isset($item->children) ? 'menu-item-bar' : '' }}">

                                    @if(isset($item->children))
                                    @foreach($item->children as $m)
                                    @foreach($m as $in=>$data)
                                    <li data-id="{{$data->id}}" class="menu-item">
                                        <span class="menu-item-bar">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                            @if(empty($data->name))
                                            {{$data->title}}
                                            @else
                                            {{$data->name}}
                                            @endif
                                            <a href="#collapse{{$data->id}}" class="pull-right"
                                                data-toggle="collapse"><i class="fa fa-chevron-down"></i></a>
                                        </span>
                                        <div class="collapse" id="collapse{{$data->id}}">
                                            <div class="input-box">
                                                <form method="post"
                                                    action="{{route('update-menuitem',['id'=>$item->id])}}" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Slug</label>
                                                                <input type="text" name="slug" value="{{$data->slug}}"
                                                                    class="form-control w-100">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Slug En</label>
                                                                <input type="text" name="slug_en" value="{{$data->slug_en}}"
                                                                    class="form-control w-100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input type="text" name="title" value="{{$data->title}}"
                                                                    class="form-control w-100">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Title En</label>
                                                                <input type="text" name="title_en" value="{{$data->title_en}}"
                                                                    class="form-control w-100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Icon Thumb</label>
                                                                <input type="file" name="icon_thumb" class="form-control w-100"
                                                                    value="{{ $data->icon_thumb }}">
                                                                <img class="m-menu-media-card__img ls-is-cached lazyloaded bg-dark w-50" 
                                                                    src="{{ pare_url_file_product($data->icon_thumb) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Thumbnail</label>
                                                                <input type="file" name="thumbnail" class="form-control w-100"
                                                                    value="{{ $data->thumbnail }}">
                                                                    <img class="m-menu-media-card__img ls-is-cached lazyloaded bg-dark w-50" 
                                                                    src="{{ pare_url_file_product($data->thumbnail) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-sm btn-primary">Save</button>
                                                        <a href="{{route('delete-menuitem',['id'=>$item->id,'key'=>$key,'in'=>$in])}}"
                                                            class="btn btn-sm btn-danger">Delete</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <ul class="child-menu {{ isset($item->children) ? 'menu-item-child' : '' }}">
                                        </ul>
                                    </li>
                                    @endforeach
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                        @endif
                    </div>
                    @if($desiredMenu != '')
                    <div class="form-group menulocation">
                        <label><b>Menu Location</b></label>
                        <p>
                            <label>
                                <input type="radio" name="location" value="1" @if($desiredMenu->location == 1) checked
                                @endif> Header
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="radio" name="location" value="2" @if($desiredMenu->location == 2) checked
                                @endif> Footer
                            </label>
                        </p>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" id="saveMenu">Save Menu</button>
                    </div>
                    <p><a href="{{route('delete-menu',['id'=>$desiredMenu->id])}}">Delete Menu</a></p>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div id="serialize_output">@if($desiredMenu){{$desiredMenu->content}}@endif</div>
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script> --}}
@if($desiredMenu)

<script>
    $('#add-categories').click(function(){
    var menuid = $(this).attr('desiredMenu-id');
    var n = $('input[name="select-category[]"]:checked').length;
    var array = $('input[name="select-category[]"]:checked');
    var ids = [];
    for(i=0;i<n;i++){
      ids[i] =  array.eq(i).val();
    }
    if(ids.length == 0){
      return false;
    }
    $.ajax({
      type:"get",
      data: {menuid:menuid,ids:ids},
      url: "{{ route('add-categories-to-menu') }}",				
      success:function(res){				
        location.reload();
      }
    })
  });
  $('#add-posts').click(function(){
    var menuid = $('#add-categories').attr('desiredMenu-id');
    var n = $('input[name="select-post[]"]:checked').length;
    var array = $('input[name="select-post[]"]:checked');
    var ids = [];
    for(i=0;i<n;i++){
      ids[i] =  array.eq(i).val();
    }
    if(ids.length == 0){
      return false;
    }
    $.ajax({
      type:"get",
      data: {menuid:menuid,ids:ids},
      url: "{{route('add-post-to-menu')}}",				
      success:function(res){
        //   location.reload();
      }
    })
  });
  $("#add-custom-link").click(function(){
        var menuid = $('#add-categories').attr('desiredMenu-id');
        var url = $('#url').val();
        var link = $('#linktext').val();
        var url_en = $('#url_en').val();
        var link_en = $('#linktext_en').val();
        if(url.length > 0 && link.length > 0){
        $.ajax({
            type:"get",
            data: {menuid:menuid,url:url,link:link,url_en:url_en,link_en:link_en},
            url: "{{route('add-custom-link')}}",				
            success:function(res){
            location.reload();
            }
            })
        }
  })
</script>
<script>
    var group = $("#menuitems").sortable({
    group: 'serialization',
    onDrop: function ($item, container, _super) {
      var data = group.sortable("serialize").get();	    
      
      var jsonString = JSON.stringify(data, null, '');
      console.log(data);
      $('#serialize_output').text(jsonString);
      $('.child-menu').addClass('menu-item-bar');
          _super($item, container);
    }
  });
</script>
<script>
    $('#saveMenu').on('click',function(){
    var menuid = $('#add-categories').attr('desiredMenu-id');
    var location = $('input[name="location"]:checked').val();
    var newText = $("#serialize_output").text();
    var data = JSON.parse($("#serialize_output").text());	
    $.ajax({
      type:"get",
      data: {menuid:menuid,data:data,location:location},
      url: "{{route('update-menu')}}",				
      success:function(res){
        //   console.log(res);
        window.location.reload();
      }
    })	
  })
</script>
@endif

@stop