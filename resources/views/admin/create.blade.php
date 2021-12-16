@extends('layouts.main')

@section('title')

@endsection

@section('content')
    <form action="/index" method="POST">
        {{ csrf_field()}}   <!-- need to protect the users details-->
        <h1 class="text-color-1 mt-5" style="font: size 100px ">@lang('posts/create.create')</h1>
        <hr>
    <!-- form two input txtfield (title and content)-->
    <div class="form-group text-dark">
        <label for="title" class="form-label">@lang('posts/create.title')</label>  
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">   <!-- set name as title and easy for save in database-->
    </div>
    <div class="form-group text-dark">
        <label for="content" class="form-label">@lang('posts/create.content')</label>
        <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea> <!-- set name as content and easy for save in database-->
    </div>

    <div class="form-group text-dark">
        <label for="content" class="form-label">@lang('posts/create.cate')</label>
        <select class="form-control mb-3" name="category_id">
            @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option> <!-- category name is taken from database-->
            @endforeach
        </select>
    </div>  

    <button type="submit" id="myBtn" class="btn btn-color" onclick="">Create</button> 
    </form>
    <div class="toast position-fixed bottom-0 end-0 p-3" id="myToast">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-gift-fill"></i>Success</strong>
            <small>Now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            Success!</a>
        </div>
    </div>
@endsection

@section('afterScript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js"></script>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myToast").toast("show");
            delay: 10000
    });
});
</script>
@endsection