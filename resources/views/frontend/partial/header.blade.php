<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets/frontend/images/kolopatriotiv-logo2.png')}}" class="img-fluid" alt="Image not found">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">War</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('charity-foundations') ? 'active' : '' }}" href="{{route('charity.foundations')}}">Charity foundations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('children-of-war') ? 'active' : '' }}" href="{{route('children-war')}}">Children of war</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('Children-stories*') ? 'active' : '' }}" href="{{route('children.stories')}}">Children's stories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{route('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{route('contact.us')}}">Contact</a>
              </li>
            </ul>
            <div class="d-flex">
                <a href="{{route('donate.create')}}" class="btn btn-primary rounded-1" type="submit">Donation</a>
            </div>
          </div>
        </div>
    </nav>
</header>