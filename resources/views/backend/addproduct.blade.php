@extends('backend.master')
@section('main')
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm sản phẩm</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Mã sản phẩm</label>
                                        <input type="text" name="code" class="form-control">
                                    </div>
                                    @if ($errors->has('code'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('code') }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Giá sản phẩm (Giá gốc)</label>
                                        <input type="number" name="price" class="form-control">
                                    </div>
                                    @if ($errors->has('price'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Giá khuyến mãi(nếu có)</label>
                                        <input type="number" name="discount" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Đặc trưng sản phẩm</label>
                                        <select name="featured" class="form-control">
                                            <option value="0">Không</option>
                                            <option value="1">Hot</option>
                                            <option value="2">New</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select name="state" class="form-control">
                                            <option value="1">Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        @foreach ($categories as $key => $category)
                                            <input type="checkbox" name="category[]" value="{{ $category->id }}">
                                            {{ $category->name }}
                                            &nbsp
                                        @endforeach
                                    </div>
                                    @if ($errors->has('category'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm 1</label>
                                        <input id="img1" type="file" name="img1" class="form-control hidden"
                                            onchange="changeImg1(this)">
                                        <img id="avatar1" class="thumbnail" width="25%" height="150px"
                                            src="img/import-img.png">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm 2</label>
                                        <input id="img2" type="file" name="img2" class="form-control hidden"
                                            onchange="changeImg2(this)">
                                        <img id="avatar2" class="thumbnail" width="25%" height="150px"
                                            src="img/import-img.png">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm 3</label>
                                        <input id="img3" type="file" name="img3" class="form-control hidden"
                                            onchange="changeImg3(this)">
                                        <img id="avatar3" class="thumbnail" width="25%" height="150px"
                                            src="img/import-img.png">
                                    </div>
                                    @if ($errors->has('img1') || $errors->has('img2') || $errors->has('img3'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Thêm đầy đủ ảnh</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Thông tin</label>
                                        <textarea name="info" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                </div>



                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea id="editor" name="describe" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <button class="btn btn-success" name="add-product" type="submit">Thêm sản phẩm</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!--/.row-->
    </div>

    <!--end main-->

@endsection

@section('script')
    @parent
    <script>
        function changeImg1(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function changeImg2(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function changeImg3(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar1').click(function() {
                $('#img1').click();
            });
            $('#avatar2').click(function() {
                $('#img2').click();
            });
            $('#avatar3').click(function() {
                $('#img3').click();
            });
        });
    </script>
@endsection
