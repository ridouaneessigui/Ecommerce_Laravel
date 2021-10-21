@yield('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">E-COMMERCE</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('/home')}}">Home</a></li>
                <li><a href="{{URL::to('/produit')}}">Produit</a></li>
                <li><a href="{{URL::to('/user')}}">Auth</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right nav-link active">
                        <li><a href="{{URL::to('/panier')}}"><i class="bi bi-cart-check-fill"></i></a></li>
            </ul>
        </div>
    </nav>