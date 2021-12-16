@extends('layouts.main')

<!-- @section('title')
    
@endsection -->

@section('content')
        <!-- display the title and content -->
        <h1 class="text-dark mt-3 text-center">{{ $post->title ?? ''}}</h1>
        <p class=" text-dark">{{ $post->content ?? ''}}</p>
        <a href="/posts/{{$post->id ?? 1}}/edit">                             <!-- (click and go to the specific link)-->  
                <div class="d-grid gap-2 d-md-block mb-2">
                <button class="btn btn-primary" type="button">@lang('posts/create.edit')</button>
                </div> 
        </a> 
        <a href="/posts/{{$post->id ?? 1}}/delete">                             <!-- (click and go to the specific link)-->  
                <div class="d-grid gap-2 d-md-block mb-2">
                <button class="btn btn-primary" type="button">@lang('posts/create.delete')</button>
                </div> 
        </a> 
        <hr>
 @endsection