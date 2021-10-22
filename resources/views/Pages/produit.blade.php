@extends ('Layouts.app')
@section('titre')
    PRODUITs
@endsection
@section('contenu')
<h1 style="margin-left: 50px">Nos Produits</h1>
    @foreach ($produits as $produit)
    <div class="container-fluid">
      <div class="row">
        <div class="well well-md-7" style="padding-bottom: 20%">
            <div class="col-md-6">
            <h4 >{{ $produit->nom_produit }}</h4>
            <p >{{ $produit->description }}</p>
            <small>{{ $produit->prix }}</small>
            </div>
            <div class="col-md-4">
                <img src="{{URL::asset('/image/' . $produit->nom_image. '')}}" height="200" width="200" style="">
            </div>
                <div class="col-md-2">
                <button type="button" class="btn btn-info" >+</button>
                <button type="button" class="btn btn-danger" >-</button>

            </div>
            
         </div>
      </div>
    </div>
    @endforeach
    {{$produits->links()}}
@endsection