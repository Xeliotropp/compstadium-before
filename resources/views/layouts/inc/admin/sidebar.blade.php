<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/dashboard') }}">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Начало</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
        <i class="mdi mdi-view-list menu-icon"></i>
        <span class="menu-title">Категории</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="category">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}"> Добави категория </a>
          </li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}"> Разглеждане на категории</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
        <i class="mdi mdi-plus-circle menu-icon"></i>
        <span class="menu-title">Продукти</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="product">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/product/create') }}"> Добави Продукти </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/product') }}"> Разгледаждане на продукти </a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/brands') }}">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Марки</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/slider') }}">
        <i class="mdi mdi-view-carousel menu-icon"></i>
        <span class="menu-title">Въртележка</span>
      </a>
    </li>
  </ul>
</nav>