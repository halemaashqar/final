@extends('control.layout._layout')
@section('style')
<link href="/control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" />
@endsection
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
        	<i class="fa fa-plus"></i>
    		Create New Category
        </h3>
    </div>
    <div class="panel-body">
    	<form action="{{route('gift.store')}}" method="POST" enctype="multipart/form-data">
    		@csrf


            <div class="form-group text-center">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"> </div>
                    <div>
                        <span class="btn red btn-outline btn-file">
                            <span class="fileinput-new"> Select image </span>
                            <span class="fileinput-exists"> Change </span>
                            <input type="hidden"><input type="file" name="image"> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div>
            </div>
            <label class="error text-center">{{ $errors->first('image') }}</label>


    		<div class="form-group">
                <label>Gift Name <span class="required">*</span></label>
                <input type="text" name="name" value="{{ request()->old('name') }}" class="form-control" placeholder="Gift Name">
                <label class="error">{{ $errors->first('name') }}</label>
            </div>


    		<div class="form-group">
    			<label>Category <span class="required">*</span></label>
    			<select name="category_id" class="form-control">
    				@foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
    			</select>
    			<label class="error">{{ $errors->first('language') }}</label>

    		</div>

    		<div class="form-group">
    			<button type="submit" class="btn btn-primary">Save</button>
    			<button type="reset" class="btn btn-default">Reset</button>
    		</div>
    	</form>
    </div>
</div>
@endsection
@section('script')
<script src="/control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
@endsection
