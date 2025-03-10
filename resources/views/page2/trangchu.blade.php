@extends('master2')

@section('content')

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($slide as $key => $sl)
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $key }}" 
                class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach($slide as $key => $sl)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="asset/source/image/slide/{{ $sl->image }}" class="d-block w-100" alt="Slide Image">
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection
