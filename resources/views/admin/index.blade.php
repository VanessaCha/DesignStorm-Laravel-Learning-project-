@extends('layouts.main')

@section('title')
    Home Page
@endsection

<!-- @section('sidebar')
@endsection -->

<!-- retrieve data from database and review in link -->
@section('content')
<div class="container">
    <div class="row mt-4">
        <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('post.search') }}">
            @csrf
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
                                    <button class="btn btn-color" type="button">@lang('posts/create.eedit')</button>
                                    </div> 
                                </a>   
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="page mt-5">
                    {{$posts->links()}}
                </div>
            </div>
    </div>
</div>
@endsection

@section('afterScript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js"></script>

@endsection