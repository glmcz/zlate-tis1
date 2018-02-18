

@extends('layout');

@section ('menu')

{{--@endsection--}}
{{--@foreach($posts as $post)--}}
    {{--{{$post->title}}--}}
{{--@endforeach--}}

{{--@include('content.row2')--}}
@endsection
<div class="container"></div>
@foreach($categories as $category)

<a href="{{route('pages.psychologie',$category->id)}} class='btn-link btn-link1' ">{{$category->name}}<span></span></a>
@endforeach
</div>

@include('content.row3')

@include('content.row4')
