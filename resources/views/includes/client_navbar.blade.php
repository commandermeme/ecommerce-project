<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/stores') }}">Globe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-5">
                    <a class="nav-link" href="{{ route('stores.index') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cart.index') }}" class="nav-link"><i class="fa fa-shopping-cart"></i> Shopping Cart <span class="badge badge-danger">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>