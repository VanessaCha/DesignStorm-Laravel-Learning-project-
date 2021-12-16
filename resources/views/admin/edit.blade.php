@extends('layouts.main')

@section('title')
@endsection

@section('content')
    <form action="/posts/{{$post->id}}" method="POST">
        @method('PUT')                 <!-- use method PUT-->
        @csrf                          <!-- need to protect all users-->
        <h1 class=" text-color-1 mt-5" style="font: size 100px ">@lang('posts/create.edit')</h1>          
        <hr>
    <!-- display two input txtfield for title and content-->   
    <div class="form-group">
        <label for="title" class="form-label text-dark">@lang('posts/create.etitle')</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$post->title}}"> <!-- inside the txtfield is the specific data that been chosen-->
    </div>

    <div class="form-group">
        <label for="content" class="form-label text-dark">@lang('posts/create.econtent')</label>
        <textarea class="form-control" name="content" id="content" placeholder="Content">{{$post->content}}</textarea> <!-- inside the txtfield is the specific data that been chosen-->
    </div>
    
    <div class="form-group">
        <label for="content" class="form-label text-dark">@lang('posts/create.ecate')</label>   
        <select class="form-control mb-3" name="category_id">
            @foreach ($categories as $category)
                @if($category->id == $post->category_id)                                    <!-- if statement, the category table id same with post table category id  -->
                    <option value="{{$category->id}}" selected>{{$category->name}}</option> <!-- then show the category name in then combobox-->
                @else                                                                       <!-- if not -->
                <option value="{{$category->id}}">{{$category->name}}</option>              <!-- then show another category name in the combobox-->
                @endif                                                                      <!-- end if-->
            @endforeach
        </select>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="/index">                             <!-- (click and go to the specific link)-->  
                    <button type="submit" class="btn btn-color">@lang('posts/create.submit')</button>
            </a> 
        </div> 

        <div class="col-6 text-end">
            <button class="btn btn-color" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">@lang('posts/create.delete')</button>
            <a href="/posts/{{$post->id ?? 1}}/delete">  
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                You sure you want to delete?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="button" class="btn btn-color">@lang('posts/create.delete')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div> 
    </div>

    </form>
@endsection