@yield('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" style="font-size: 30px;font-family: 'Rampart One', cursive;">E-COMMERCE</a>
            </div>
            <ul class="nav navbar-nav dropdown">
                <li><a href="{{URL::to('/home')}}" style="font-family: 'Courier New', Courier;font-size:20px">HOME</a></li>
                <li><a href="{{URL::to('/user')}}" style="font-family: 'Courier New', Courier;font-size:20px">AUTH</a></li>
                <li><a href="{{URL::to('/produit')}}" style="font-family: 'Courier New', Courier;font-size:20px">PRODUIT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right nav-link active">
                        <li ><a href="{{URL::to('/panier')}}"><i class="bi bi-cart-check-fill" style="font-size: 30px"></i></a></li>
            </ul>
        </div>
    </nav>