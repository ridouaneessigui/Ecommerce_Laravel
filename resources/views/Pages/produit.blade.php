@extends ('Layouts.app')
@section('titre')
    PRODUITs
@endsection
@section('contenu')
<h1 style="margin-left: 50px">Nos Produits</h1>
    @foreach ($produits as $produit)
        <div class="well well-md-min - 1" style="padding-right: 500px">
            <h4 >{{ $produit->nom_produit }}</h4>
            <p >{{ $produit->description }}</p>
            <small>{{ $produit->prix }}</small>
            <button type="button" class="btn btn-info" style="margin-left: 170%">+</button>
        </div>
    @endforeach
@endsection