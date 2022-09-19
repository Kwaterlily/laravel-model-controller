@extends('layouts.main')

@section('title', 'home')
    
@section('main-content')

<h1 class="mb-3">{{ env('APP_NAME') }}</h1>
<section id="books">
    <div class="d-flex flex-wrap">

      {{-- Card --}}
        @forelse ($movies as $movie)
        <div class="card me-3 my-3 text-bg-dark" style="width: 18rem;">
            <img src={{"/images/Pulp-Fiction.jpeg"}} class="card-img-top" alt="...">
            <div class="card-body ">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
              <address class="card-text text-muted description address">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, amet. Obcaecati aperiam iusto blanditiis velit necessitatibus cupiditate.</address>
              <p class="card-text text-muted">{{ $movie->nationality }}</p>
              <p class="card-text text-muted">{{ $movie->date }}</p>
              <p class="card-text text-muted">{{ $movie->vote }}</p>
              <a href="#" class="card-link">Scopri di più</a>
            </div>
          </div>
          @empty
          <h3>Nessun film disponibile</h3>
          @endforelse
    </div>
</section>
@endsection

  </div>
</div>