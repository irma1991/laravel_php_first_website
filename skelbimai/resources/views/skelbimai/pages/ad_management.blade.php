@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/cat1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Skelbimu tvarkymas</h1>
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
                        @foreach($errors_>all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md mb-5"  data-aos="fade">
                    <form class="p-5 bg-white">
                        <div class="row form-group">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <a href = "/ad_form"><button type="button" class="btn btn-primary">Prideti skelbima</button></a>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <table class="table-responsive table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Pavadinimas</th>
                                        <th scope="col">Aprasymas</th>
                                        <th scope="col">Kaina</th>
                                        <th scope="col">El. pastas</th>
                                        <th scope="col">Telefonas</th>
                                        <th scope="col">Vietove</th>
                                        <th scope="col">Redaguoti</th>
                                        <th scope="col">Trinti</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    @foreach($ads as $ad)
                                            <td>{{ $ad->catId }}</td>
                                            <td>{{ $ad->name }}</td>
                                            <td>{{ $ad->description }}</td>
                                            <td>{{ $ad->price }}</td>
                                            <td>{{ $ad->email }}</td>
                                            <td>{{ $ad->phone }}</td>
                                            <td>{{ $ad->location }}</td>
                                            <td><a class = "btn btn-danger" href = "/ad_update/{{$ad->id}}">Redaguoti</a></td>
                                            <td><a class = "btn btn-danger" href = "/ad_delete/{{$ad->id}}">Trinti</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop