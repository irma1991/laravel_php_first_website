@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/cat1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Redaguoti skelbima</h1>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            @if ($errors->any())
                <div class = "alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md mb-5"  data-aos="fade">
                    <form method = "POST" action="/ad_update2" class="p-5 bg-white">
                        @csrf
                        <input type="hidden" name="id" value="{{$ad->id}}">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Skelbimo ID</label>
                                <input type="text" id="category" name="category" class="form-control" value="{{ $ad->catId }}">
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Skelbimo pavadinimas</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $ad->name }}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Aprasymas</label>
                                <textarea name="description" cols="30" rows="7" class="form-control">{{ $ad->description }}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Nuotraukos</label>
                                <input type="file" id="image" name="image" class="form-control" value="{{ $ad->img }}">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Kaina</label>
                                <input type="number" id="price" name="price" class="form-control" value="{{ $ad->price }}">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">El. pastas</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ $ad->email }}">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Telefonas</label>
                                <input type="tel" id="phone" name="phone" class="form-control" value="{{ $ad->phone }}">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Vietove</label>
                                <input type="text" id="location" name="location" class="form-control" value="{{ $ad->location }}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" id = "submit" name="submit" value="Patvirtinti" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@stop