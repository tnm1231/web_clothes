@extends('admin.share.master')
@section('title')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <form method="post" action="{{ Route('category.Create')}} ">
                @csrf
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter name category">
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control" >
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Parent_id</label>
                            <select id="parent_id" name="parent_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                              <option selected="selected" data-select2-id="3">Choose...</option>
                              <option value=0>Root</option>
                              @foreach ($category as $value )
                              <option value= {{$value->id}}>{{$value->name}}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Is_view</label>
                            <select id="is_view" name="is_view" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                              <option selected="selected" data-select2-id="3">Choose...</option>
                              <option value=1>Visible</option>
                              <option value=0>Disable</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-12">
                                <label>Banner</label>
                                <div class="input-group">
                                    <input id="banner" name="banner" class="form-control" required>
                                    <a data-input="banner" data-preview="holder-image" class="lfm btn btn-light"> Choose </a>
                                </div>
                                <img id="holder-image" src="https://via.placeholder.com/400/FFFFFF?text=400*400" style="margin-top: 15px" class="img-fluid mb-2" alt="white sample">
                                </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                                <script>
                                      $('.lfm').filemanager('image');
                                </script>
                            </div>

                          </div>
                    </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="botton" id="createCategory"  class="btn btn-success">Submit</button>
              </div>
              </form>
          </div>
          </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $("#name").blur(function(){
                $("#slug").val(toSlug($("#name").val()));
            });

            function toSlug(str) {
                str = str.toLowerCase();
                str = str
                    .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
                    .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
                str = str.replace(/[đĐ]/g, 'd');
                str = str.replace(/([^0-9a-z-\s])/g, '');
                str = str.replace(/(\s+)/g, '-');
                str = str.replace(/-+/g, '-');
                str = str.replace(/^-+|-+$/g, '');
                return str;
            }

    });
</script>
@endsection

