@extends('backend/master')
@section('main')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Danh mục</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý danh mục</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <form method="post" action="{{ route('category.store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="">Tên Danh mục</label>
                                        <input type="text" class="form-control" name="name" id=""
                                            placeholder="Tên danh mục mới">

                                        @if ($errors->has('name'))
                                            <div class="alert bg-danger" role="alert">
                                                <svg class="glyph stroked cancel">
                                                    <use xlink:href="#stroked-cancel"></use>
                                                </svg>{{ $errors->first('name') }}<a href="#" class="pull-right"><span
                                                        class="glyphicon glyphicon-remove"></span></a>
                                            </div>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                                </form>
                            </div>
                            <div class="col-md-7">
                                @if (session('success'))
                                    <div class="alert bg-success" role="alert">
                                        <svg class="glyph stroked checkmark">
                                            <use xlink:href="#stroked-checkmark"></use>
                                        </svg>{{ session('success') }} <a href="#" class="pull-right"><span
                                                class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                @endif
                                <div class="vertical-menu">
                                    <div class="item-menu active">Danh mục </div>

                                    @foreach ($categories as $key => $category)

                                        <div class="item-menu"><span>{{ $category->name }}</span>
                                            <div class="category-fix">

                                                <a class="btn-category btn-primary"
                                                    href="{{ route('category.edit', ['category' => $category->id]) }}"><i
                                                        class="fa fa-edit"></i></a>

                                                <a class="btn-category btn-danger"
                                                    onclick="return confirm('Xóa danh mục: {{ $category->name }}?')"
                                                    href="{{ route('category.destroy', ['category' => $category->id]) }}"><i
                                                        class="fas fa-times"></i></i></a>
                                                @method('DELETE')
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->


        </div>
        <!--/.row-->
    </div>
    <!--/.main-->

@endsection
