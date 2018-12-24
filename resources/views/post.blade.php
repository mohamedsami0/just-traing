@extends('layouts.app')

@section('content')
    <div class="sinle-post">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="post-container">
                        <img class="img-thumbnail img-responsive" src="img/articles.jpeg" title="" alt="img-article">
                        <p class="text-center text-uppercase category">
                            <i class="fa fa-tag fa-fw"></i>
                            <a class="tag" href="#">beach</a>
                        </p>
                        <div class="text-center title-date-container">
                            <h3 class="post-title "><a href="#">There is growing demand for boat trips on these beaches</a></h3>
                            <i class="fa fa-user fa-fw"></i>
                            <a href="#" class="auther">mohamed samir</a>
                            <i class="fa fa-calendar fa-fw"></i>
                            <span class="post-date-time">August 23, 2016</span>
                        </div>
                        <p class="post-body lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="salider-content">
                        <div class=" text-center CATEGORIES">
                            <h3 class=" text-capitalize">categories</h3>
                            <div class=" text-capitalize text-left links-cat">
                                <a href="#">fashion</a>
                                <hr>
                                <a href="#">food</a>
                                <hr>
                                <a href="#">lifestyle</a>
                                <hr>
                                <a href="#">sports</a>
                                <hr>
                                <a href="#">story</a>
                                <hr>
                                <a href="#">travel</a>
                            </div>

                        </div>
                        <div class=" recent-posts">
                            <h3 class=" text-capitalize text-center">recent posts</h3>
                            <div class="post-content">
                                <img  src="img/art.jpeg" alt="picture-post" title="">
                                <div class="head">
                                    <h5><a href="#">There is growing demand for boat trips on these beaches</a></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <img  src="img/art.jpeg" alt="picture-post" title="">
                                <div class="head">
                                    <h5><a href="#">There is growing demand for boat trips on these beaches</a></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <img  src="img/art.jpeg" alt="picture-post" title="">
                                <div class="head">
                                    <h5><a href="#">There is growing demand for boat trips on these beaches</a></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <img  src="img/art.jpeg" alt="picture-post" title="">
                                <div class="head">
                                    <h5><a href="#">There is growing demand for boat trips on these beaches</a></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <img  src="img/art.jpeg" alt="picture-post" title="">
                                <div class="head">
                                    <h5><a href="#">There is growing demand for boat trips on these beaches</a></h5>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <nav aria-label="...">
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>
            <div class="comments">
                <div class="comment-count">
                    <h2>2 commets</h2>
                </div>
                <div class="comment-content">
                    <div class="post-comment">
                        <img  src="img/articles.jpeg" alt="" title="">
                        <div class="auther-date">
                            <a href="#">mohamed Samir</a>
                            <i class="fa fa-calendar fa-fw"></i>
                            <span class="comment-date">September 9, 2018 at 4:13 PM</span>
                        </div>
                        <div class="comment-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…</p>
                        </div>
                        <hr>
                    </div>

                </div>
                <div class="comment-content">
                    <div class="post-comment">
                        <img  src="img/articles.jpeg" alt="" title="">
                        <div class="auther-date">
                            <a href="#">mohamed Samir</a>
                            <i class="fa fa-calendar fa-fw"></i>
                            <span class="comment-date">September 9, 2018 at 4:13 PM</span>
                        </div>
                        <div class="comment-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has…</p>
                        </div>
                    </div>

                </div>
                <form>
                    <div class=" form-group">
                        <label>Write a Comment:</label>
                        <input type="text" placeholder="Leave a Comment..." class=" form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class=" form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

@stop