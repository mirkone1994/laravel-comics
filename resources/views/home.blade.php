@extends('layouts.main')
@section('comics')
<section id="comics">
    <span id="upper-button">CURRENT SERIES</span>
    <section class="comics-grid container">
        @foreach ($comics as $comic)
        <div class="comics-card">
            <a href="{{ url("/comics/$loop->index") }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a>
            <h3>{{ $comic['series'] }}</h3>
        </div>
        @endforeach
    </section>
    <span>LOAD MORE</span>
</section>
@endsection