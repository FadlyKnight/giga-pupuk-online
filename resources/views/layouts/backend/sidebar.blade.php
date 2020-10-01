  <!--- Sidemenu -->
  <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <!--<li class="menu-title">Navigation</li>-->

            <li>
                <a href="#">
                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                    <i class="fa fa-envira"></i><span> Produk </span>
                </a>
            </li>
            <li>
                <a href="{{ route('jasa.index')}}">
                    <i class="fa fa-truck"></i><span> Jasa </span>
                </a>
            </li>
            <li>
                <a href="{{ route('pemesanan.index')}}">
                    <i class="fa fa-cart-arrow-down"></i><span> Pemesanan </span>
                </a>
            </li>
            <li>
                <a href="{{ route('member.index')}}">
                {{-- <a href="#"> --}}
                    <i class="fa fa-user"></i><span> Member </span>
                </a>
            </li>
            <li>
                <a href="{{ route('diskon.index') }}">
                    <i class="fa fa-tag"></i><span> Diskon </span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="fa fa-gears"></i><span> Settings </span> <span class="menu-arrow"></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{ route('slider.index')}}">Slider</a></li>
                    <li><a href="{{ route('testi.index')}}">Testimoni</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">                                 
                    <i class="fa fa-power-off"></i><span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        

        </ul>

    </div>
    <!-- Sidebar -->