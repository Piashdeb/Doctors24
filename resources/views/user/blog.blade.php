@extends('layouts.master')
@section('title')
Blog
@endsection
@section('content')
<!--================ Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-left">
                <h2>Blog</h2>
                <div class="page_link">
                    <a href="#">Home</a>
                    <a href="#">Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="blog_left_sidebar">
                @foreach($table as $row)
                <article class="row blog_item">
                    <div class="col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a class="active" href="#">{{$row->category->name}}</a>
                            </div>
                            <ul class="blog_meta list">
                                <li>
                                    <a href="#">{{$row->user['name']}}
                                        <i class="lnr lnr-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">{{$row->created_at->format('j F, Y')}}
                                        <i class="lnr lnr-calendar-full"></i>
                                    </a>
                                </li>
                                @php
                                $comment_count = $row->comment()->count();
                                @endphp
                                <li>
                                    <a href="#">{{$comment_count}} Comments
                                        <i class="lnr lnr-bubble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @php
                    $image_path = $row->imageName == null ? asset('public/user_asset/img/blog/main-blog/m-blog-1.jpg') : asset('public/uploads/blog/'.$row->imageName);
                @endphp
                    <div class="col-md-9">
                        <div class="blog_post">
                            <img src="{{ $image_path }}" alt="">
                            <div class="blog_details">
                                <a href="{{action('User\BlogController@single_blog',['id' => $row->blogID])}}">
                                    <h2>{{$row->title}}</h2>
                                </a>
                                <p>{{Str::limit($row->description, 200, ' ...')}}</p>
                            <a href="{{action('User\BlogController@single_blog',['id' => $row->blogID])}}" class="white_bg_btn">View More</a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                <nav class="blog-pagination justify-content-center d-flex">
                    {{$table->links()}}
                </nav>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget post_category_widget">
                    <h4 class="widget_title">Post Catgories</h4>
                    <ul class="list cat-list">
                        @foreach ($category as $row)
                            <li>
                                <a href="{{action('User\BlogController@category_wise',['id' => $row->blogcatID])}}" class="d-flex justify-content-between">
                                    <p>{{$row->name}}</p>
                                    <p>{{$row->blog()->count()}}</p>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                    <div class="br"></div>
                </aside>
                <aside class="single_sidebar_widget popular_post_widget">
                    <h3 class="widget_title">Popular Posts</h3>
                    @foreach ($blog as $item)
                    <div class="media post_item">
                        <img src="{{asset('public/user_asset/img/blog/popular-post/post1.jpg')}}" alt="post">
                        <div class="media-body">
                            <a href="{{action('User\BlogController@single_blog',['id' => $item->blogID])}}">
                                <h3>{{$item->title}}</h3>
                            </a>
                            <p>{{$item->created_at->format('j F, Y')}}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="br"></div>
                </aside>
            </div>
        </div>
    </div>
</div>
</section>
<!--================Blog Area =================-->
@endsection
