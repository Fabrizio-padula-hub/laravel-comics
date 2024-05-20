@extends('layouts.app')

@section('content')

    <div class="hero"></div>
    <div class="my-bg p-4">
        <div class="container">
            {{-- card --}}
            <div class="row">
                @foreach ($comics as $comicItems)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $comicItems['thumb']}}" class="img-fluid" alt="...">
                        </div>
                        <div class="card-body text-white">
                            <p class="card-text">{{ $comicItems['series']}}</p>
                        </div>
                        
                    </div>
                @endforeach
                

            </div>
        </div>
            
    </div>

@endsection