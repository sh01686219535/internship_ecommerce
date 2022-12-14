@extends('frontEnd.sub_master')
@section('title')
   Blog Details
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
                            <li><a href="blog-left.html">fashion</a></li>
                            <li>></li>
                            <li>blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog body area start-->
    <div class="blog_area blog_details">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                        <div class="blog_thumb">
                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog9.jpg" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <h3 class="post_title">Blog image post</h3>
                            <div class="post_meta">
                                <span><i class="ion-person"></i> Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span>|</span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                            </div>
                            <div class="post_content">
                                <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                <blockquote>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                </blockquote>
                                <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                            </div>
                            <div class="entry_content">
                                <div class="post_meta">
                                    <span>Tags: </span>
                                    <span><a href="#">, fashion</a></span>
                                    <span><a href="#">, t-shirt</a></span>
                                    <span><a href="#">, white</a></span>
                                </div>

                                <div class="social_sharing">

                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="related_posts">
                            <h3>Related posts</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="{{asset('frontEndAsset')}}/assets/img/blog/blog1.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Gallery</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="{{asset('frontEndAsset')}}/assets/img/blog/blog2.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Audio</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related column_3">
                                        <div class="related_thumb">
                                            <img src="{{asset('frontEndAsset')}}/assets/img/blog/blog3.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Video</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_box">
                            <h3>3 Comments	</h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Demo</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="{{asset('frontEndAsset')}}/assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment" ></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
                                        <input id="author"  type="text">

                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="email">Email </label>
                                        <input id="email"  type="text">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="website">Website </label>
                                        <input id="website"  type="text">
                                    </div>
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                            </form>
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

@endsection
