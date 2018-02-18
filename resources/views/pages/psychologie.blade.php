<?php
/**
 * Created by PhpStorm.
 * User: Glm
 * Date: 18.02.2018
 * Time: 10:36
 */


foreach ($postCat as $cat){
//    echo $cat->title;
//    echo "eee";
//    echo $cat->body;
//    echo $cat->slug;
    var_dump($cat);
}
?>
@extends('layout')
{{--@foreach($postCat as $cat)--}}
    {{--{{$cat}}--}}
    {{--@endforeach--}}
@section('body')
    @foreach($postCat as $cat)
      {{$cat->slug}}
    <div class="container">
        <div class="row">
            <div class="box4">

                <div class="info1 maxheight">
                    <p class="list3title2">{{$cat->created_at}}</p>
                    <p class="list3title1">{{$cat->slug}}</p>
                    <p class="list3title2">{{$cat->body}}</p>


                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection


