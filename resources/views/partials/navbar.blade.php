{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Belajar Laravel 8</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{  Request::is('/') ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  Request::is('about') ? 'active' : ''  }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  Request::is('posts*') ? 'active' : ''  }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  Request::is('categories*') ? 'active' : ''  }}" href="/categories">Categories</a>
                </li>

            </ul>


            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"> My Dashboard</i></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"> Logout</i></button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{  Request::is('login') ? 'active' : ''  }}"><i class="bi bi-box-arrow-in-right"> Login</i></a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
