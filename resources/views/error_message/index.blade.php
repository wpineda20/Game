@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <div class="card-body">
                    <span class="material-icons text-white" style="font-size: 4rem">cancel</span>
                    <h2 class="fw-bold text-white">Opps!</h2>
                    <h3 class=" text-white pb-3">You must be logged in to play any of these games.</h3>
                     @if (Route::has('register'))
                                
                                    <a class="btn btn-login shadow-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                               
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
