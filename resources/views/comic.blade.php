@extends('layouts.main')
@section('comic')
<section class="comic-detail">
    <img src={{ $comic['thumb'] }} alt="">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic['title'] }} </h1>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <div class="row">
                                    <div class="col">{{ $comic['price'] }}</div>
                                    <div class="col">AVALIBLE</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">CHECK AVAILBILITY</div>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="col">
                <img src={{ asset('images/adv.jpg')}} alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Talent</h3>
                <span>Art by: </span>
                @foreach ($comic['artists'] as $artist)
                <span>{{ $artist }}, </span> 
                @endforeach
                <br>
                <span>Written by: </span>
                @foreach ($comic['writers'] as $writer)
                <span>{{ $writer }}, </span> 
                @endforeach
            </div>
            <div class="col">
                <h3>Specs</h3>
                <span>Series: {{ $comic['series'] }}</span><br>
                <span>US Price: {{ $comic['price'] }}</span><br>
                <span>On Sale Date: {{ $comic['sale_date'] }}</span>
            </div>
        </div>
    </div>
</section>

@endsection