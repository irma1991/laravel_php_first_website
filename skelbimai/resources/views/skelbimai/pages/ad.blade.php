@extends('skelbimai/main')
@section('content')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/cat1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="mb-4" style="margin-top: -150px;">
                    <div class="slide-one-item home-slider owl-carousel">
                        <div><img src="{{asset('storage/'.$ad->img)}}" alt="Image" class="img-fluid rounded"></div>
                    </div>
                </div>

                <h4 class="h5 mb-4 text-black">{{ $ad->category }}</h4>
                <a href  = "/ad/{{ $ad->id }}"><h3>Pavadinimas: {{ $ad->name }}</h3></a>
                <p>Aprasymas: {{ $ad->description }}</p>
                <p>Kaina: {{ $ad->price }}</p>
                <p>El. pastas: {{ $ad->email }}</p>
                <p>Telefonas: {{ $ad->phone }}</p>
                <p>Vietove: {{ $ad->location }}</p>
                <form method="POST" action="/comment/{{$ad->id}}">
                    @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-black" for="message">Komentaras</label>
                        <textarea name="comment" cols="30" rows="7" class="form-control" placeholder="Parasykite savo komentara"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary bg-primary text-white rounded">Saugoti</button>
                </form>
            </div>
        </div>
        @if(count($ad->comments))
            <div class = "comments my-3">
                <h4>Komentarai</h4>
                @foreach($ad->comments as $mainComment)
                    <div class="alert alert-dark" role="alert">
                        <p>{{$mainComment->name}}</li>
                        <p>{{$mainComment->created_at}}</p>
                        <p>{{$mainComment->comment}}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@stop