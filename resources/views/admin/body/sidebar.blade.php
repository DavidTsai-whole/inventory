 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->


         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="{{ url('/dashboard') }}" class="waves-effect">
                         <i class="ri-home-fill"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-hotel-fill"></i>
                         <span>管理供應商</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('supplier.all') }}">所有供應商</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-shield-user-fill"></i>
                         <span>管理客戶</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('customer.all') }}">所有客戶</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-delete-back-fill"></i>
                         <span>管理單位</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('unit.all') }}">所有單位</a></li>

                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-apps-2-fill"></i>
                         <span>管理分類</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('category.all') }}">所有分類</a></li>

                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-reddit-fill"></i>
                         <span>管理產品</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('product.all') }}">所有產品</a></li>

                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-oil-fill"></i>
                         <span>管理購買清單</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('purchase.all') }}">所有批准的購買清單</a></li>
                         <li><a href="{{ route('purchase.pending') }}">待批准的購買清單</a></li>


                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-compass-2-fill"></i>
                         <span>管理發票</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('invoice.all') }}">所有批准的發票</a></li>
                         <li><a href="{{ route('invoice.pending.list') }}">待批准的發票</a></li>
                         <li><a href="{{ route('daily.invoice.report') }}">每日發票報告</a></li>


                     </ul>
                 </li>

                 <li class="menu-title">Stock</li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-gift-fill"></i>
                         <span>管理庫存</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('stock.report') }}">庫存報告</a></li>
                         <li><a href="{{ route('stock.supplier.wise') }}">產品/庫存</a></li>

                     </ul>
                 </li>







             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
