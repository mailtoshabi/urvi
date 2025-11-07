<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">@lang('translation.Dashboards')</span>
                    </a>
                </li>

                {{-- <li class="menu-title" data-key="t-apps">@lang('translation.Apps')</li> --}}




                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">@lang('translation.Sale_Manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.batches.index') }}" data-key="t-user-grid">@lang('translation.Sales')</a></li>
                        <li><a href="{{ route('admin.orders.index') }}" data-key="t-user-grid">@lang('translation.Sales')</a></li>
                        <li><a href="{{ route('admin.sales.index') }}" data-key="t-user-grid">Sales</a></li>
                        <li><a href="{{ route('admin.sale_returns.index') }}" data-key="t-user-list">@lang('translation.Sales_Return')</a></li>
                    </ul>
                </li> --}}



                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">@lang('translation.Customer_Manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.customers.index') }}" data-key="t-read-email">@lang('translation.Customers')</a></li>
                        <li><a href="{{ route('admin.customers.active.orders') }}" data-key="t-user-grid">@lang('translation.Active_orders')</a></li>
                        <li><a href="{{ route('admin.customers.history.orders') }}" data-key="t-user-grid">@lang('translation.History_orders')</a></li>
                        <li><a href="{{ route('admin.customers.order.return') }}" data-key="t-user-list">@lang('translation.Sales_Return')</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="shopping-cart"></i>
                        <span data-key="t-ecommerce">@lang('translation.Vendor_Manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.sellers.request.list') }}" key="t-products">@lang('translation.Vednor_Request_List')</a></li>
                        <li><a href="{{ route('admin.sellers.approved.list') }}" key="t-products">@lang('translation.Vednor_Approved_List')</a></li>
                        <li><a href="{{ route('admin.products.items.all') }}" data-key="t-read-email">@lang('translation.Product_Item_Manage_List')</a></li>
                        <li><a href="{{ route('admin.branches.index') }}" data-key="t-read-email">@lang('translation.Branch_Manage')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">@lang('translation.Tickets')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.customers.tickets.index') }}" data-key="t-read-email">@lang('translation.Customer_Tickets')</a></li>
                        <li><a href="{{ route('admin.sellers.tickets.index') }}" data-key="t-orders">@lang('translation.Seller_Tickets')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">@lang('translation.Sale_Manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.orders.active') }}" data-key="t-user-grid">@lang('translation.Active_orders')</a></li>
                        <li><a href="{{ route('admin.orders.history') }}" data-key="t-user-grid">@lang('translation.History_orders')</a></li>
                        <li><a href="{{ route('admin.orders.return') }}" data-key="t-user-grid">@lang('translation.Sales_Return')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">@lang('translation.Shipping_Manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.drivers.index') }}" data-key="t-read-email">@lang('translation.Drivers')</a></li>
                        <li><a href="{{ route('admin.shippers.index') }}" data-key="t-user-grid">@lang('translation.Shipping_Organization')</a></li>
                        <li><a href="{{ route('admin.deliveries.orders.active') }}" data-key="t-user-grid">@lang('translation.Active_deliveries')</a></li>
                        <li><a href="{{ route('admin.deliveries.orders.history') }}" data-key="t-user-grid">@lang('translation.History_deliveries')</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Project Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.projects.create') }}" key="t-products">Add Project</a></li>
                                <li><a href="{{ route('admin.projects.index') }}" data-key="t-product-detail">Projects</a></li>
                                {{-- <li><a href="{{ route('admin.products.items.all') }}" data-key="t-read-email">@lang('translation.Product_Item_Manage_List')</a></li> --}}
                    </ul>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">@lang('translation.Branch_Manage')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.branches.create') }}" data-key="t-inbox">@lang('translation.Add_Branch')</a></li>
                        <li><a href="{{ route('admin.branches.index') }}" data-key="t-read-email">@lang('translation.Branches')</a></li>
                        <li><a href="{{ route('admin.branches.active.orders') }}" data-key="t-user-grid">@lang('translation.Active_orders')</a></li>
                        <li><a href="{{ route('admin.branches.history.orders') }}" data-key="t-user-grid">@lang('translation.History_orders')</a></li>
                        <li><a href="{{ route('admin.branches.order.return') }}" data-key="t-user-list">@lang('translation.Sales_Return')</a></li>

                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Research Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.researches.create') }}" key="t-products">Add Researches</a></li>
                        <li><a href="{{ route('admin.researches.index') }}" data-key="t-product-detail">Researches</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Event Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.events.create') }}" key="t-products">Add Events</a></li>
                        <li><a href="{{ route('admin.events.index') }}" data-key="t-product-detail">Events</a></li>
                        {{-- <li><a href="{{ route('admin.categories.create') }}" data-key="t-inbox">Add Type</a></li>
                        <li><a href="{{ route('admin.categories.index') }}" data-key="t-read-email">Types</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Awards & Reconginition</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.awards.create') }}" key="t-products">Add Awards</a></li>
                        <li><a href="{{ route('admin.awards.index') }}" data-key="t-product-detail">Awards</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Competitions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.competitions.create') }}" key="t-products">Add Competitions</a></li>
                        <li><a href="{{ route('admin.competitions.index') }}" data-key="t-product-detail">Competition Lists</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Media Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.medias.create') }}" key="t-products">Add Media</a></li>
                        <li><a href="{{ route('admin.medias.index') }}" data-key="t-product-detail">Medias</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts">@lang('translation.User_Management')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.users.index') }}" data-key="t-user-grid">@lang('translation.Users')</a></li>
                        <li><a href="{{ route('admin.users.create') }}" data-key="t-user-grid">@lang('translation.Add_User')</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">

                        <i data-feather="settings"></i>
                        <span data-key="t-contacts">@lang('translation.Settings')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.settings.index') }}" data-key="t-read-email">@lang('translation.General_Settings')</a></li>
                        <li><a href="{{ route('admin.settings.change.password') }}" data-key="t-user-grid">@lang('translation.Change_Password')</a></li>
                    </ul>
                </li>
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
