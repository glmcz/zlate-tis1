
@section('row3')
    <div class="row_3">
        <div class="container">
            <div class="row">
                <ul class="list3">
                    @foreach($posts as $post)

                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src='/storage/{{($post->image)}}' alt="images"></figure>

                            <div class="info1 maxheight">
                                <p class="list3title1">{{$post->title}}</p>
                                <p class="list3title2">{{$post->excerpt}}</p>
                                <a href="{{route('index.post',$post)}} class='btn-link btn-link1' ">learn more<span></span></a>
                                {{$post->updated_at}}
                                {{$post->$category}}
                                {{--{{dump($post->category->name)}}--}}

                            </div>
                        </div>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection