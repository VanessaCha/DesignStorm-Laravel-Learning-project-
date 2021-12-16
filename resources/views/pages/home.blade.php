@extends('layouts.main')

@section('title')

@endsection

@section('content')
<div>
    <div class="container pt-5">
        <div class="row background-2">
            <div class="col-12 text-color-1 text-center">
                <h1>COME JOIN US !</h1>
            </div>  
        </div>
        <div class="row background-1">
            <div class="col-12 m-auto pt-2 pb-2">
                <img src="{{asset('image/pic_1.jpg')}}" class="rounded mx-auto d-block" style="max-width: 600px"/>
            </div>
            <div class="col-12 text-center">
                <p>Keeping up with Asian fashion, beauty and lifestyle trends can be quite dazzling, but these Malaysian bloggers have managed to successfully set their own pace and styles. They provide insights into life in urban Malaysia, tips for travelling the world in style, share advice for what works for Asian skin types, and develop new looks for tropical weather. Here are 10 Malaysian fashion bloggers you need to follow.</p>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row background-2">
            <div class="col-12 text-color-1 text-center">
                <h1><a class="text-color-1" href="/register">REGISTER</a> NOW !</h1>
            </div>  
        </div>
        <div class="row background-1">
            <div class="col-12 m-auto pt-2 pb-2">
                <img src="{{asset('image/pic_2.jpg')}}" class="rounded mx-auto d-block" style="max-width: 600px"/>
            </div>
            <div class="col-12 text-center">
                <p>Fashion is a highly visual industry, which explains why Instagram is the social network of choice for lovers of style. But there is far more fashion content online than what people share on social media. It has always been a strong niche for blogging.</p>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row background-2">
            <div class="col-12 text-color-1 text-center">
                <h1>FOLLOW US NOW !</h1>
            </div>  
        </div>
        <div class="row background-1">
            <div class="col-12 m-auto pt-2 pb-2">
                <img src="{{asset('image/pic_3.png')}}" class="rounded mx-auto d-block" style="max-width: 600px"/>
            </div>
            <div class="col-12 text-center">
                <p>There are many quality fashion blogs, which unsurprisingly feature high-quality photographs of the latest fashion innovations.  Most fashion blogs are full of inspiration for those mornings you open your wardrobe door with your mind in a blank. They make an ideal place to begin your online research into what’s hot this year before you head off to purchase your own outfits. They can also provide you with ideas about what you can mix and match to create that perfect look.</p>
            </div>
        </div>
    </div>
</div>

@endsection