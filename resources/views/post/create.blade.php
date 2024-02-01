@extends('layout.master')
@section('title','Yangi Post qoshish')
@section('content')
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Yangi Post qoshish</h1>
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
                   <form   action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                       @csrf

                       <div class="control-group">
                           <input type="text" class="form-control p-4 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Sarlavha"  data-validation-required-message="Ilitmos sarlavhani kiriting" />
                   @error('title')
                           <p class="help-block text-danger">{{$message}} zaybal </p>
                           @enderror
                       </div>
                       <div class="control-group mt-3">
                           <input type="file" class="form-control p-4 @error('img') is-invalid @enderror" id="file" name="img" placeholder="Sarlavha"  data-validation-required-message="Ilitmos sarlavhani kiriting" />
                           <p class="help-block text-danger"></p>
                       </div>
                       <div class="control-group mt-3">
                           <lable for="category"> Categoriya</lable>
                           <select name="category_id" id="category" class="form-control" @error('category') is-invalid @enderror">
                               @foreach($categories as $category)
                               <option value="{{$category['id']}}">{{$category['name']}}</option>
                               @endforeach
                           </select>

                       </div>
                       <div class="control-group mt-3">
{{--                           <lable for="tag"> Tag</lable>--}}
                           <select name="tags[]" id=tag" multiple class="form-control" @error('category') is-invalid @enderror" >

                           @foreach($tags as $category)
                               <option value="{{$category['id']}}">{{$category['name']}}</option>
                               @endforeach
                               </select>

                       </div>
                       <div class="control-group mt-3" >
                           <textarea class="form-control p-4 @error('title') is-invalid @enderror" rows="3" id="message" name="short_content" placeholder="Qisqacha" data-validation-required-message="Iltimos maqolani qisqacha tarifini kiriting"></textarea>
                           @error('short_content')
                           <p class="help-block text-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="control-group mt-3">
                           <textarea class="form-control p-4  @error('title') is-invalid @enderror" rows="3" id="message" name="content" placeholder="Ma'qola"  data-validation-required-message="Please enter your message"></textarea>
                           @error('content')
                           <p class="help-block text-danger">{{$message}}</p>
                           @enderror
                       </div>
                       <div>
                       </div>                           <button class="btn btn-primary btn-block py-3 px-5 mt-3" type="submit" >Saqlash</button>

                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection
