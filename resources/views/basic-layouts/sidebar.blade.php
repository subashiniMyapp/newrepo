<div class="logo">
    <a href="#">
        <img src="images/icon/logo.png" alt="Cool Admin" />
    </a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
            <li class="has-sub">
                <a class="js-arrow" href="{{route('dashborad')}}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="active">
                <a href="{{route('add-item')}}">
                    <i class="fas fa-chart-bar"></i>new bills</a>
            </li>
            <li>
                <a href="{{route('create-bill')}}">
                    <i class="fas fa-table"></i>add new items</a>
            </li>
            <li>
                <a href="{{route('add-item')}}">
                    <i class="far fa-check-square"></i>Comming soon</a>
            </li>
            <li>
                <a href="{{route('create-bill')}}">
                    <i class="fas fa-calendar-alt"></i>Comming soon</a>
            </li>
            <li>
                <a href="{{route('add-item')}}">
                    <i class="fas fa-map-marker-alt"></i>Comming soon</a>
            </li>

        </ul>
    </nav>
</div>