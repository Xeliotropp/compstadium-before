<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/admin/dashboard">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">{{__('Табло')}}</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-categories" aria-expanded="false"
        aria-controls="ui-basic">
        <i class="mdi mdi-circle-outline menu-icon"></i>
        <span class="menu-title">Категории</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic-categories">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/category/create">Добави категория</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/category">Разгледай категория</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/users">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">Потребители</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/brands">
        <i class="mdi mdi-menu menu-icon"></i>
        <span class="menu-title">Марки</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="mdi mdi-sale menu-icon"></i>
        <span class="menu-title">Намаления</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-products" aria-expanded="false"
        aria-controls="ui-basic">
        <i class="mdi mdi-plus menu-icon"></i>
        <span class="menu-title">Продукти</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic-products">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/products/create">Добави продукт</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/products">Разгледай продукти</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>