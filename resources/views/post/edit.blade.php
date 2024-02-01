@extends('layout.master')
@section('title','Postlarni ozgartrish')
@section('content')
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"> Post Tahirlash</h1>
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
   <div class="container mt-lg-5">
       <div class="mb-lg-5">


       </div>
       <div class="row">

           <div class="col-lg-7 mb-5 mb-lg-0">

               <div class="contact-form">
                   <div id="success"></div>
                   <form   action="{{route('post.update',$posts->id)}}" method="post" enctype="multipart/form-data">
                       @csrf
@method("PUT")

                       <div class="control-group">
                           <input type="text" class="form-control  p-4 @error('title') is-invalid @enderror" value="{{$posts->title}}" id="title" name="title" placeholder="Sarlavha"  data-validation-required-message="Ilitmos sarlavhani kiriting" />
                   @error('title')
                           <p class="help-block text-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="control-group mt-3">
                           <img src="{{asset('storage/posts/'.$posts->img)}}" alt="" width="100px" class="mb-2">
                           <input type="file" class="form-control p-4 @error('img') is-invalid @enderror" id="file" name="img" placeholder="Sarlavha"   />
                           <p class="help-block text-danger"></p>
                       </div>

                       <div class="control-group mt-3" >
                           <textarea class="form-control p-4 @error('short_content') is-invalid @enderror" rows="3" id="message"  name="short_content" placeholder="Qisqacha" >{{$posts->short_content}}</textarea>
                           @error('short_content')
                           <p class="help-block text-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="control-group mt-3">
                           <textarea class="form-control p-4  @error('content') is-invalid @enderror" rows="3" id="message" name="content" placeholder="Ma'qola" >{{$posts->content}}</textarea>
                           @error('content')
                           <p class="help-block text-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div>
                           <button class="btn btn-primary  py-3 px-5 mt-3" type="submit" >Saqlash</button>
                           <a class="btn btn-danger py-3 px-5 mt-3" href="{{route('post.show',$posts->id)}}" >Bekor qilish</a>
                       </div>

                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection
