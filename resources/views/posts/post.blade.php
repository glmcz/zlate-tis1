@extends('layout')

@section('body')
    <div class="container">
        <div class="row">
            <div class="box4">
                <figure><img src='/storage/{{($post->image)}}' alt="images"></figure>

                <div class="info1 maxheight">
                    <p class="list3title1">{{$post->title}}</p>
                    <p class="list3title2">{!! $post->body !!}</p>


                </div>
            </div>
        </div>
    </div>
</li>

@endsection