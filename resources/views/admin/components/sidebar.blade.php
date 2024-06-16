<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ route('admin.index') }}">
            <img src="/assets/base/images/brand/logo/logo-inverse.svg" alt="">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">

            <!-- Nav user -->
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.user') }}">
                    <i class="nav-icon fe fe-user me-2"></i> User
                </a>
            </li>

            {{-- nav bar --}}
            @foreach (config('apps.module.module') as $key => $item)
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#navPost{{ $key }}"
                        aria-expanded="false" aria-controls="navPost{{ $key }}">
                        <i class="nav-icon {{ $item['icon'] }} me-2"></i> {{ $item['title'] }}
                    </a>
                    <div id="navPost{{ $key }}" class="collapse" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            @foreach ($item['subModule'] as $subKey => $subModule)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($subModule['route'] ?? '') }}">
                                        {{ $subModule['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</nav>
