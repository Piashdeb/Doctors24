@extends('layouts.master')
@section('title')
{{$table->title}}
@endsection
@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                @php
                                    $image_path = $table->imageName == null ? asset('public/user_asset/img/blog/main-blog/m-blog-1.jpg') : asset('public/uploads/blog/'.$table->imageName);
                                @endphp
                                <img class="img-fluid" src="{{ $image_path }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a class="active" href="#">{{$table->category['name']}}</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li>
                                        <a href="#">{{$table->user['name']}}
                                            <i class="lnr lnr-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">{{$table->created_at->format('j F, Y')}}
                                            <i class="lnr lnr-calendar-full"></i>
                                        </a>
                                    </li>
                                    @php
                                    $comment_count = $table->comment()->count();
                                    @endphp
                                    <li>
                                        <a href="#">{{$comment_count}} Comments
                                            <i class="lnr lnr-bubble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$table->title}}</h2>
                            <p class="excert">
                                {{$table->description}}
                            </p>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>{{$comment_count}} Comments</h4>
                        @foreach ($comment as $row)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('public/user_asset/img/blog/c1.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5>
                                            <a href="#">{{$row->name}}</a>
                                        </h5>
                                        <p style="margin-bottom: 10px;" class="date">{{$row->created_at->format('j F, Y h:i A')}} </p>
                                        <p style="margin-top: -26px;" class="comment">
                                            {{$row->comment}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="comment-form">
                        @if (isset(Auth::user()->email))
                        <h4>Leave a Reply</h4>
                        <form method="POST" action="{{action('User\BlogController@comment')}}" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" name="blogID" value="{{$table->blogID}}">
                        <input type="hidden" name="userID" value="{{Auth::user()->id}}">
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                    required=""></textarea>
                            </div>
                            <button href="#" class="primary-btn submit_btn">Post Comment</button>
                        </form>
                        @else
                    <h4>If you are not logged in please <span class="text-primary"><a href="{{route('login')}}">login</a></span> and leave a reply.</h4>
                        @endif
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
                    @php
                        $image_path = $item->imageName == null ? asset('public/user_asset/img/blog/main-blog/m-blog-1.jpg') : asset('public/uploads/blog/'.$item->imageName);
                    @endphp
                    <div class="media post_item">
                        <img width="50" height="50" src="{{$image_path}}" alt="post">
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
