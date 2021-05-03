        @if(Auth::user())
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">CUSTOMER MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/invoice/list') }}"><i class="fa fa-reply"></i> <span>List Konfirmasi Order</span></a></li>

        </ul>
        @endif

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-bank "></i> <span>Home</span></a></li>

            <li>
                <a href="{{ url('/shopping-cart') }}"><i class="fa  fa-shopping-cart">
                    </i> <span>Shopping Cart</span>
                    <small class="label pull-right bg-maroon-active">{{ count(Cart::content()) }}</small>
                </a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Category Product</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    @foreach(\App\Category::all() as $category)
                        <li>
                            <a href="{{ url('product/category/'.$category->slug) }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ $category->name }} <small class="label pull-right bg-maroon-active">{{ $category->products()->count() }}</small></span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>




        </ul>