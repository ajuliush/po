<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="/branches">
                    <i class="fa fa-building-o"></i> <span>Branches</span>
                </a>
            </li>
            <li
                class="treeview 
            {{ request()->is('creditors') ? 'menu-open' : '' }}
            {{ request()->is('debtors') ? 'menu-open' : '' }}
                ">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Parties</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">2</span>
                    </span>
                </a>
                <ul class="treeview-menu"
                    style=" {{ request()->is('creditors') || request()->is('debtors') ? 'display: block;' : 'display: none;' }}">
                    <li><a href="/creditors"><i class="fa fa-circle-o"></i> Creditors</a></li>
                    <li><a href="/debtors"><i class="fa fa-circle-o"></i> Debtors</a></li>
                </ul>
            </li>
            <li
                class="treeview  {{ request()->is('locations') ? 'menu-open' : '' }}
                {{ request()->is('cities') ? 'menu-open' : '' }}
                {{ request()->is('provinces') ? 'menu-open' : '' }}
                {{ request()->is('countries') ? 'menu-open' : '' }}
                ">
                <a href="#">
                    <i class="fa fa-map-marker"></i>
                    <span>Locations</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu"
                    style=" {{ request()->is('locations') || request()->is('cities') || request()->is('provinces') || request()->is('countries') ? 'display: block;' : 'display: none;' }}">
                    <li><a href="/locations"><i class="fa fa-circle-o"></i> Locations</a></li>
                    <li><a href="/cities"><i class="fa fa-circle-o"></i> Cities</a>
                    </li>
                    <li><a href="/provinces"><i class="fa fa-circle-o"></i> Provinces</a></li>
                    <li><a href="/countries"><i class="fa fa-circle-o"></i> Countries</a></li>
                </ul>
            </li>
            <li
                class="treeview 
            {{ request()->is('item-categories') ? 'menu-open' : '' }}
            {{ request()->is('item-groups') ? 'menu-open' : '' }}
            {{ request()->is('item-units') ? 'menu-open' : '' }}
            {{ request()->is('currencies') ? 'menu-open' : '' }}
            {{ request()->is('items') ? 'menu-open' : '' }}
            ">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Items</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">5</span>
                    </span>
                </a>
                <ul class="treeview-menu"
                    style=" {{ request()->is('item-categories') ||
                    request()->is('item-groups') ||
                    request()->is('item-units') ||
                    request()->is('currencies') ||
                    request()->is('items')
                        ? 'display: block;'
                        : 'display: none;' }}">
                    <li><a href="/item-categories"><i class="fa fa-circle-o"></i> Item Categories</a></li>
                    <li><a href="/item-groups"><i class="fa fa-circle-o"></i> Item Groups</a></li>
                    <li><a href="/item-units"><i class="fa fa-circle-o"></i> Item Units</a></li>
                    <li><a href="/currencies"><i class="fa fa-circle-o"></i> Currencies</a></li>
                    <li><a href="/items"><i class="fa fa-circle-o"></i> Items</a></li>
                </ul>
            </li>
            <li>
                <a href="/purchase-orders">
                    <i class="fa fa-files-o"></i> <span>Purchase Orders</span>
                    <span class="pull-right-container">
                        <span class="label label-danger pull-right">Progress</span>
                    </span>
                </a>
            </li>
        </ul>
    </section>
</aside>
