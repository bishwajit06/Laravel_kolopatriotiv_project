<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('assets/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('admin/posts*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.posts.index')}}" class="nav-link {{ Request::is('admin/posts') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.posts.create')}}" class="nav-link {{ Request::is('admin/posts/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Request::is('admin/categories*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.categories.index')}}" class="nav-link {{ Request::is('admin/categories') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.categories.create')}}" class="nav-link {{ Request::is('admin/categories/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Request::is('admin/tags*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/tags*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tag
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.tags.index')}}" class="nav-link {{ Request::is('admin/tags') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.tags.create')}}" class="nav-link {{ Request::is('admin/tags/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Tag</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">To Do</li>
          <li class="nav-item {{ Request::is('admin/contact*') ? 'menu-open' : '' }}">
            <a href="{{route('admin.contact.index')}}" class="nav-link {{ Request::is('admin/contact*') ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Message
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Frontend Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a target="_blank" class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>War</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Donation</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link {{ Request::is('charity-foundations') ? 'active' : '' }}" href="{{route('charity.foundations')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Charity foundations</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link {{ Request::is('children-of-war') ? 'active' : '' }}" href="{{route('children-war')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Children of war</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link {{ Request::is('Children-stories*') ? 'active' : '' }}" href="{{route('children.stories')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Children's stories</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{route('about')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{route('contact.us')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Logout</p>
                </a>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>