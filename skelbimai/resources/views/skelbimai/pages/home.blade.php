@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url(images/cat1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12">


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1 class="" data-aos="fade-up">Nemokami skelbimai</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Greitai aplenksime visus</p>
                        </div>
                    </div>

                    <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                        <form method="get" action="/search_action">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                    <input type="text" class="form-control rounded" name ="search" placeholder="Ko ieskai?">
                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="wrap-icon">
                                        <span class="icon icon-room"></span>
                                        <input type="text" class="form-control rounded" name = "location" placeholder="Vieta">
                                    </div>

                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control rounded" name="categoryId" id="categoryId">
                                            <option value="">Visos kategorijos</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                    <input type="submit" class="btn btn-primary btn-block rounded" value="Ieskoti">
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
                        <div class="col-12">
                            <h2 class="d-inline-block">Populiarios paieskos:</h2>
                            <a href="#">iPhone</a>
                            <a href="#">Automobiliai</a>
                            <a href="#">Geles</a>
                            <a href="#">Namai</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h5 mb-4 text-black">Populiariausi skelbimai</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">
                        @foreach($ads as $ad)
                        <div class="d-block d-md-flex listing vertical">
                            <a href="/ad/{{$ad->id}}" class="img d-block" style="background-image: url({{asset('storage/'.$ad->img)}})"></a>
                            <div class="lh-content">
                                <span class="category">{{ $ad->category }}</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="/ad/{{$ad->id}}">{{ $ad->name }}</a></h3>
                                <p>{{ $ad->description }}</p>
                                <p>{{ $ad->price }}</p>
                                <p>{{ $ad->email }}</p>
                                <p>{{ $ad->phone }}</p>
                                <p>{{ $ad->location }}</p>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Populiariausios kategorijos</h2>
                    <p class="color-black-opacity-5">Rasi visko, ko ieskai</p>
                </div>
            </div>
            <div class="overlap-category mb-5">
                <div class="row align-items-stretch no-gutters">
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-car"></span></span>
                            <span class="caption mb-2 d-block">Automobiliai</span>
                            <span class="number">1,921</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-closet"></span></span>
                            <span class="caption mb-2 d-block">Baldai</span>
                            <span class="number">2,339</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-home"></span></span>
                            <span class="caption mb-2 d-block">Nekilnojamas turtas</span>
                            <span class="number">4,398</span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-open-book"></span></span>
                            <span class="caption mb-2 d-block">Knygos ir zurnalai</span>
                            <span class="number">3,298</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-tv"></span></span>
                            <span class="caption mb-2 d-block">Elektronika</span>
                            <span class="number">`2,932</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-pizza"></span></span>
                            <span class="caption mb-2 d-block">Kita</span>
                            <span class="number">183</span>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@stop
