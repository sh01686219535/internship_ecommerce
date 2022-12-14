@extends('frontEnd.sub_master')
@section('title')
    Blog
@endsection
@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>blog</h3>
                        <ul>
                            <li><a href="{{route('/')}}">home</a></li>
                            <li>></li>
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog body area start-->
    <div class="blog_area blog_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_grid_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_grid">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog3.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <h3 class="post_title"><a href="blog-details.html">Blog image post</a></h3>
                                        <div class="post_meta">
                                            <span><i class="ion-person"></i> Posted by </span>
                                            <span><a href="#">admin</a></span>
                                            <span>|</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                                        </div>
                                        <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a class="read_more" href="blog-details.html">read more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_grid gallery">
                                    <div class="blog_thumb_active owl-carousel">
                                        <div class="single_blog_thumb">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog2.jpg" alt=""></a>
                                        </div>
                                        <div class="single_blog_thumb">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog3.jpg" alt=""></a>
                                        </div>
                                        <div class="single_blog_thumb">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog4.jpg" alt=""></a>
                                        </div>
                                        <div class="single_blog_thumb">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog5.jpg" alt=""></a>
                                        </div>
                                    </div>

                                    <div class="blog_content">
                                        <h3 class="post_title"><a href="blog-details.html">Post with Gallery</a></h3>
                                        <div class="post_meta">
                                            <span><i class="ion-person"></i> Posted by </span>
                                            <span><a href="#">admin</a></span>
                                            <span>|</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                                        </div>
                                        <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a class="read_more" href="blog-details.html">read more</a>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_grid video">
                                    <div class="blog_thumb embed-responsive embed-responsive-16by9">
                                        <iframe  height="700" src="https://www.youtube.com/embed/2Zt8va_6HRk"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div class="blog_content">
                                        <h3 class="post_title"><a href="blog-details.html"> Post with Video</a></h3>
                                        <div class="post_meta">
                                            <span><i class="ion-person"></i> Posted by </span>
                                            <span><a href="#">admin</a></span>
                                            <span>|</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                                        </div>
                                        <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a class="read_more" href="blog-details.html">read more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_grid maecenas">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog6.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <h3 class="post_title"><a href="blog-details.html">Maecenas ultricies</a></h3>
                                        <div class="post_meta">
                                            <span><i class="ion-person"></i> Posted by </span>
                                            <span><a href="#">admin</a></span>
                                            <span>|</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                                        </div>
                                        <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a class="read_more" href="blog-details.html">read more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_grid">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog7.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <h3 class="post_title"><a href="blog-details.html">Etiam magna</a></h3>
                                        <div class="post_meta">
                                            <span><i class="ion-person"></i> Posted by </span>
                                            <span><a href="#">admin</a></span>
                                            <span>|</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                                        </div>
                                        <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a class="read_more" href="blog-details.html">read more</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_grid">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog8.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <h3 class="post_title"><a href="blog-details.html">Praesent imperdiet</a></h3>
                                        <div class="post_meta">
                                            <span><i class="ion-person"></i> Posted by </span>
                                            <span><a href="#">admin</a></span>
                                            <span>|</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                                        </div>
                                        <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a class="read_more" href="blog-details.html">read more</a>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--blog sidebar start-->
                    <aside class="blog_sidebar">
                        <!--search form start-->
                        <div class="sidebar_widget search_form">
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <!--search form end-->

                        <!--categories start-->
                        <div class="sidebar_widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Ecommerce</a></li>
                            </ul>
                        </div>
                        <!--categories end-->

                        <!--recent post start-->
                        <div class="sidebar_widget recent_post">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post1.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post2.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post3.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Post with Video </a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post4.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post5.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Etiam magna</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                        </div>
                        <!--recent post end-->
                        <!--recent post start-->
                        <div class="sidebar_widget popular_post">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post6.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post1.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Praesent imperdiet</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post2.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Etiam magna </a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post3.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/post4.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Post with Video</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                        </div>
                        <!--recent post end-->

                        <!--recent post start-->
                        <div class="sidebar_widget recent_comments">
                            <h3 class="widget_title">Recent Comments</h3>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Blog image post format</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Post in Gallery format</a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.html">Single post in Audio format </a></h3>
                                    <span>March 3, 2018</span>
                                </div>

                            </div>
                        </div>
                        <!--recent post end-->

                    </aside>

                    <!--blog sidebar start-->
                </div>
            </div>
        </div>
    </div>

    <!--blog section area end-->

    <!--blog pagination area start-->
    <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog pagination area end-->

@endsection
