@extends('backend/master')
@section('main')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Icons</li>
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
                      
								<form method="POST" action="{{ route('category.update',['category'=>$category->id])}}">
								@method('PUT')
								@csrf
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="name"  placeholder="Tên danh mục mới" value="{{ $category->name }}">
									@if ($errors->has('name'))
									<div class="alert bg-danger" role="alert">
									<svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg>{{$errors->first('name')}}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								@endif
								</div>
								<button type="submit" class="btn btn-primary">Sửa danh mục</button>
							    </form>
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

	
	
	
	<script>
		$('#calendar').datepicker({});

		! function ($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
   
	@endsection