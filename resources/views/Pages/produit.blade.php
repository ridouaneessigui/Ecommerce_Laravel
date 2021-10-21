@extends ('Layouts.app')
@section('titre')
    PRODUITs
@endsection
@section('contenu')
<h1>L ' Ensemble De Nos Produits</h1>
    @foreach ($produits as $produit)
        <div class="well">
            <h3>{{ $produit->nom_produit }}</h3>
            <h3>{{ $produit->prix }}</h3>
            <h3>{{ $produit->description }}</h3>
        </div>
    @endforeach
@endsection