@extends('layout.master')
@section('title',$posts->title)
@section('content')


    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">POST -  {{$posts->id}}</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="{{route('index')}}">Bosh Sahifa</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="{{route('post.index')}}">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                @auth
                <div class="mb-4 text-right d:flex">
                    @canany(['update','delete'],$posts)
                    <form action="{{route('post.destroy',$posts->id)}}" method="POST">
                        <a class="btn btn-md  bg-success" href="{{route('post.edit',$posts->id)}}" style="color: white"> Tahrirlash</a>
                        @csrf
                        @method("DELETE")
                        <button type="submit"  class="btn btn-sm btn-outline-danger">
                            ochirish
                        </button>
                    </form>
{{--                        <button type="button" onclick="delete_button()" id="form_d" class="btn btn-sm btn-outline-danger">--}}
{{--                            ochirish--}}
{{--                        </button>--}}
                    @endcan
                </div>
                @endauth
                <div class="mb-5">
                    <div class="d-flex mb-2">

                            @foreach($posts->tags as $tag)
                                <a class="text-secondary text-uppercase font-weight-medium" href="">{{$tag->name}}</a>
                                <span class="text-primary px-2">|</span>
                            @endforeach

                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{$posts->created_at}}</a>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-white p-1
                         bg-success text-uppercase font-weight-medium" href="">{{$posts->category->name}}</a>
                    </div>
                    <h1 class="section-title mb-3">{{$posts->title}}</h1>
                </div>

                <div class="mb-5">
                    <img class="img-fluid rounded w-100 mb-4" src="{{asset('storage/posts/'.$posts->img)}}" alt="Image">
                    <p>{{$posts->content}}</p>

                </div>

                <div class="mb-5">
                    <h3 class="mb-4 section-title">{{$posts->comments()->count()}} Comments</h3>

                    @foreach($posts->comments as $comment)

                    <div class="media mb-4">
                        <img src="{{asset('asset/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>{{$comment->user->name}} <small><i>{{$comment->created_at}}</i></small></h6>
                            <p>{{$comment->body}}</p>
{{--                            <button class="btn btn-sm btn-light">Reply</button>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="bg-light rounded p-5">
                    <h3 class="mb-4 section-title">Izoh qoldirish</h3>
{{--                            <div class="form-group col-sm-6">--}}
                            {{--                                <label for="name">Name *</label>--}}
                            {{--                                <input type="text" class="form-control" id="name">--}}
                            {{--                            </div>--}}
                            {{--                            <div class="form-group col-sm-6">--}}
                            {{--                                <label for="email">Email *</label>--}}
                            {{--                                <input type="email" class="form-control" id="email">--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="form-group">--}}
                            {{--                            <label for="website">Website</label>--}}
                            {{--                            <input type="url" class="form-control" id="website">--}}
                            {{--                        </div>--}}

                   @auth
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf

                            <input type="hidden" name="post_id" value="{{$posts->id}}">
                            <div class="form-group">
                                <label for="message">Habar</label>
                                <textarea id="message" cols="30" rows="5" name="body" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Yuborish" class="btn btn-primary">
                            </div>
                        </form>
@else
                       <div>Izoh qoldirish uchun
                           <a href="{{route('login')}}" class="btn btn-primary" >Kirish</a></div>
                    @endauth
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                    <img src="{{asset('asset/img/user.jpg')}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-white mb-3">{{auth()->user()->name?? null}}</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                        ipsum
                        ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>
                <div class="mb-5">
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control" style="padding: 25px;" placeholder="Keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Categories</h3>
                    <ul class="list-inline m-0">
                    @foreach($categories as $category)
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>{{$category['name']}}</a>
                                <span class="badge badge-primary badge-pill">{{$category->posts->count()}}</span>
                            </li>


                        @endforeach
                    </ul>
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Taglar</h3>
                    <div class="d-flex flex-wrap m-n1">
                    @foreach($tags as $tag)
                            <a href="" class="btn btn-outline-secondary m-1">{{$tag->name}}</a>

                        @endforeach
                    </div>
                </div>
                <div class="mb-5">
                    <img src="{{asset('asset/img/blog-1.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Recent Post</h3>
                    @foreach($recent_posts as $posts)
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="{{asset('asset/img/blog-1.jpg')}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="{{$posts->id}}">{{$posts->title}}</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Adminn</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded" src="{{asset('asset/img/blog-2.jpg')}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Elitr diam amet sit elitr magna ipsum ipsum dolor</a>
                            <div class="d-flex">
                                <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>
                                <small class="text-primary px-2">|</small>
                                <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <img src="{{asset('asset/img/blog-2.jpg')}}" alt="" class="img-fluid rounded">
                </div>

                <div class="mb-5">
                    <img src="{{asset('asset/img/blog-3.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div>
                    <h3 class="mb-4 section-title">Plain Text</h3>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no
                    consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos
                    tempor
                    rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
            </div>
        </div>
    </div>
@endsection