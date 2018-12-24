@extends('layouts.app')

@section('content')
    <!--Start Header-->
    <div class="header">
        <img src="img/2.jpeg">
        <div class="over-lay"></div>
        <div class="container">
            <h1>the <span>color</span> i love <br> purple & orange </h1>
        </div>
    </div>
    <!--End Header-->
    <!--start articles-->
    <div class="articles">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="article-container">
                        <div class="article-box">
                            <img src="/upload{{ $post->img }}}" class="hvr-grow" name="img" alt="article-img">
                            <p class="text-center text-uppercase category">
                                <i class="fa fa-tag fa-fw"></i>
                                <a class="tag" href="#">{{ $post->category }}</a>
                            </p>
                            <div class="text-center title-date-container">
                                <h3 class="post-title"><a href="#">{{ $post->title  }}</a></h3>
                                <i class="fa fa-user fa-fw"></i>
                                <a href="#" class="auther"> mohamed samir </a>
                                <i class="fa fa-calendar fa-fw"></i>
                                <span class="post-date-time">{{ $post->created_at->toDayDateTimeString() }}</span>
                            </div>
                            <p class="post-body">{{ $post->body }}</p>
                            <div class="read-more text-center">
                                <a href="#" class="btn btn-primary text-capitalize hvr-radial-out">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end articles-->
@stop
