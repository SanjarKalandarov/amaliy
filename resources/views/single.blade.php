@extends('layout.master')
@section('title','Batafsil')



@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Batafsil</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="{{route('index')}}">Bosh Sahifa</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="{{route('single')}}">Batafsil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">January 01, 2045</a>
                        </div>
                        <h1 class="section-title mb-3">Amet sit kasd ipsum lorem clita ipsum duo clita</h1>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4" src="{{asset('asset/img/carousel-1.jpg')}}" alt="Image">
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur
                            eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores
                            et,
                            consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam
                            nonumy, gubergren sit stet no diam kasd vero.</p>
                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur
                            no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et
                            no
                            diam sit. Dolor erat justo dolore sit invidunt.</p>
                        <h2 class="mb-4">Est dolor lorem et ea</h2>
                        <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="{{asset('asset/img/blog-1.jpg')}}" alt="Image">
                        <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at
                            est
                            sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed
                            rebum
                            eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy
                            diam
                            lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren
                            erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                            sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores
                            takimata
                            dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam
                            eirmod
                            kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata
                            kasd
                            diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren
                            ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est
                            accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna
                            eos
                            magna, justo gubergren labore sit voluptua eos.</p>
                        <h3 class="mb-4">Est dolor lorem et ea</h3>
                        <img class="img-fluid rounded w-50 float-right ml-4 mb-3" src="{{asset('asset/img/blog-2.jpg')}}" alt="Image">
                        <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at
                            est
                            sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed
                            rebum
                            eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy
                            diam
                            lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren
                            erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                            sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores
                            takimata
                            dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam
                            eirmod
                            kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata
                            kasd
                            diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren
                            ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est
                            accusam labore eirmod vero et voluptua. Amet labore clita duo et no.</p>
                    </div>

                    <div class="mb-5">
                        <h3 class="mb-4 section-title">3 Comments</h3>
                        <div class="media mb-4">
                            <img src="{{asset('asset/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="{{asset('asset/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                                <div class="media mt-4">
                                    <img src="{{asset('asset/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>
                                        <button class="btn btn-sm btn-light">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light rounded p-5">
                        <h3 class="mb-4 section-title">Leave a comment</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                        <img src="{{asset('asset/img/user.jpg')}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-white mb-3">John Doe</h3>
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
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Web Design</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Web Development</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Online Marketing</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Keyword Research</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>Email Marketing</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <img src="{{asset('asset/img/blog-1.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Recent Post</h3>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="{{asset('asset/img/blog-1.jpg')}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Elitr diam amet sit elitr magna ipsum ipsum dolor</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
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
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="{{asset('asset/img/blog-3.jpg')}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Elitr diam amet sit elitr magna ipsum ipsum dolor</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                            <img class="img-fluid rounded" src="{{asset('asset/img/blog-1.jpg')}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                            <div class="d-flex flex-column pl-3">
                                <a class="text-dark mb-2" href="">Elitr diam amet sit elitr magna ipsum ipsum dolor</a>
                                <div class="d-flex">
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>
                                    <small class="text-primary px-2">|</small>
                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                </div>
                            </div>
                        </div>
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
                        <h3 class="mb-4 section-title">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-secondary m-1">Design</a>
                            <a href="" class="btn btn-outline-secondary m-1">Development</a>
                            <a href="" class="btn btn-outline-secondary m-1">Marketing</a>
                            <a href="" class="btn btn-outline-secondary m-1">SEO</a>
                            <a href="" class="btn btn-outline-secondary m-1">Writing</a>
                            <a href="" class="btn btn-outline-secondary m-1">Consulting</a>
                        </div>
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
    </div>
    <!-- Detail End -->

@endsection