@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div class="row row-cols-1 row-cols-md-2 g-4">
            <a href="/errorMessage" style="text-decoration: none">
              <div class="col">
                <div class="card-body-memory text-center" style="cursor: pointer">
                  <div class="">
                    <span class="material-icons" style="font-size: 5rem">smart_toy</span>
                          <h1 class="text-center card-title">Memory Game</h1>
                        </div>
                    </div>
                </div>
            </a> 
            <a href="/errorMessage" style="text-decoration: none">
              <div class="col">
                <div class="">
                  <div class="card-body-numbers text-center" style="cursor: pointer">
                    <span class="material-icons" style="font-size: 5rem">extension</span>
                        <h1 class="text-center card-title">Numbers Puzzle</h1>
                    </div>
                </div>
            </div>
            </a> 
</div>

@endsection
