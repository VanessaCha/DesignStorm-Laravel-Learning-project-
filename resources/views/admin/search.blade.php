@extends('layouts.main')

@section('title')
    Search
@endsection

@section('content')
<div class="container">
    <div class="row mt-4">
        <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/posts/search') }}">
            <input class="form-control mr-sm-2 mb-3" name="query" type="search" placeholder="Search Title" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">@lang('posts/create.search')</button>
        </form>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <!--  href make it as a link -->
            <div class="cam">
                <div class="index mt-5">
                        <div class="row">
                            <div class="col background-1">
                                <h2 class="text-color-2 position-center mt-2">{{ $post->title }}</h1><hr>            <!-- show title in the post taken from database -->
                                <h3 class="text-color-3">{{$post->category->name}}</h3>     <!-- show category name in the post taken from database -->
                                <h6 class="text-dark">Total views:{{ $post->total()}}</h6>  <!-- show total in the post taken from database -->
                                <p class="text-danger" >{{ $post->content }}</p>               <!-- show content in the post taken from database -->

                                <a href="/posts/{{$post->id ?? 1}}/edit">                             <!-- (click and go to the specific link)-->  
                                    <div class="d-grid gap-2 d-md-block mb-2">
                                    <button class="btn btn-primary" type="button">@lang('posts/create.eedit')</button>
                                    </div> 
                                </a> 
                                <a href="/posts/{{$post->id ?? 1}}/delete">                             <!-- (click and go to the specific link)-->  
                                    <div class="d-grid gap-2 d-md-block mb-2">
                                    <button class="btn btn-primary" type="button">@lang('posts/create.delete')</button>
                                    </div> 
                                </a>  
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
    </div>
</div>
@endsection