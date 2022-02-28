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
    <div class="card-body-game" style="cursor: pointer">
      <div class="">
              <h1 class="text-center text-black card-title">GAME 1</h1>
            </div>
        </div>
    </div>
</a> 
<a href="/errorMessage" style="text-decoration: none">
  <div class="col">
    <div class="">
      <div class="card-body-game" style="cursor: pointer">
            <h1 class="text-center text-black card-title">GAME 2</h1>
        </div>
    </div>
</div>
</a> 
<a href="/errorMessage" style="text-decoration: none">
  <div class="col">
    <div class="card-body-game" style="cursor: pointer">
      <div class="">
              <h1 class="text-center text-black card-title">GAME 3</h1>
            </div>
        </div>
    </div>
</a> 
<a href="/errorMessage" style="text-decoration: none">
  <div class="col">
    <div class="card-body-game" style="cursor: pointer">
      <div class="">
              <h1 class="text-center text-black card-title">GAME 4</h1>
            </div>
        </div>
    </div>
</a> 
</div>

@endsection
