
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="nav-icon icon-home"></i> Dashboard
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ url('/products') }}">
                    <i class="nav-icon icon-basket-loaded"></i> Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/orders') }}">
                    <i class="nav-icon icon-credit-card"></i> Orders
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ url('/analytics') }}">
                    <i class="nav-icon icon-graph"></i> Analytics
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ url('/coupons') }}">
                    <i class="nav-icon icon-tag"></i> Coupons
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ url('/queries') }}">
                    <i class="nav-icon icon-layers"></i> Queries
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-feed"></i> Feedback
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ url('/blacklist') }}">
                    <i class="nav-icon fa fa-stop-circle-o"></i> Blacklist
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="#">
                    <i class="nav-icon fa fa-code"></i> Developer
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-pencil"></i> Theme
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ url('/user_pages') }}">
                    <i class="nav-icon icon-book-open"></i> Pages
                </a>
            </li>
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>