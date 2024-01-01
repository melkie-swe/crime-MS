<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a href="{{ route('home') }}" target="_blank">
            <img src="./img/balance2.jpeg" alt="main_logo" style="height: 200px;width: 250px;">
            <!-- <img src="./img/fano.jpg" alt="main_logo" style="height: 180px;width: 250px;"> -->

        </a>
    </div><br><br> <br>
    <hr class="horizontal dark mt-300">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">System Management</h6>
            </li>
            <div class="row">
                <div class="col-md-20 mx-auto">
                    <div class="accordion" id="accordionRental">
                        <!-- user Management role, permission and Activity log -->
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingOne">
                                <button class="ps-0 nav-link accordion-button  font-weight-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    <i class=" ms-3 fa fa-users text-danger text-lg opacity-30"></i>
                                    <span
                                        class="ms-2 text-uppercase text-md font-weight-bolder opacity-10 mb-0 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">
                                        User Management</span>

                                </button>
                            </h5>
                            <div id="collapseOne"
                                class="accordion-collapse collapse {{in_array(Route::currentRouteName(),['users.index','permissions.index','roles.index']) ? 'show' : ''}}"
                                aria-labelledby="headingOne" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8 mt-n3">
                                    <ul class="nav ">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}"
                                                href="{{ route('users.index') }}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">users</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('permissions.index')}}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">permission</span>
                                            </a>
                                        </li>
                                        @canany(['create-role', 'edit-role', 'delete-role'])

                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}"
                                                href="{{ route('roles.index') }}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">role</span>
                                            </a>
                                        </li>
                                        @endcanany
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'logactivity.index' ? 'active' : '' }}"
                                                href="{{route('logactivity.index')}}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">Activity
                                                    Log</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Crime Management -->
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingTwo">
                                <button class="ps-0 nav-link accordion-button  font-weight-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <i class=" ms-3 fa fa-balance-scale text-danger text-lg opacity-10"></i>
                                    <span
                                        class="ms-2 text-uppercase text-xs font-weight-bolder opacity-100 mb-0 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">
                                        Crime Management</span>

                                </button>
                            </h5>
                            <div id="collapseTwo"
                                class="accordion-collapse collapse {{in_array(Route::currentRouteName(),['users.index','permissions.index','roles.index']) ? 'show' : ''}}"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8 mt-n3">
                                    <ul class="nav ">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}"
                                                href="{{ route('users.index') }}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">users</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('permissions.index')}}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">permission</span>
                                            </a>
                                        </li>
                                        @canany(['create-role', 'edit-role', 'delete-role'])

                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}"
                                                href="{{ route('roles.index') }}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">role</span>
                                            </a>
                                        </li>
                                        @endcanany
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'logactivity.index' ? 'active' : '' }}"
                                                href="{{route('logactivity.index')}}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">Activity
                                                    Log</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- prision Management -->
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingThree">
                                <button class="ps-0 nav-link accordion-button  font-weight-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <i class=" ms-3 fa fa-university text-danger text-lg opacity-10"></i>
                                    <span
                                        class="ms-2 text-uppercase text-xs font-weight-bolder opacity-100 mb-0 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">
                                        Prision Management</span>

                                </button>
                            </h5>
                            <div id="collapseThree"
                                class="accordion-collapse collapse {{in_array(Route::currentRouteName(),['users.index','permissions.index','roles.index']) ? 'show' : ''}}"
                                aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                <div class="accordion-body text-sm opacity-8 mt-n3">
                                    <ul class="nav ">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}"
                                                href="{{ route('users.index') }}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">users</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('permissions.index')}}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">permission</span>
                                            </a>
                                        </li>
                                        @canany(['create-role', 'edit-role', 'delete-role'])

                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}"
                                                href="{{ route('roles.index') }}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">role</span>
                                            </a>
                                        </li>
                                        @endcanany
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteName() == 'logactivity.index' ? 'active' : '' }}"
                                                href="{{route('logactivity.index')}}">
                                                <div
                                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                                                </div>
                                                <span
                                                    class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">Activity
                                                    Log</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"
                    href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'tables') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'tables']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{  str_contains(request()->url(), 'billing') == true ? 'active' : '' }}"
                    href="{{ route('page', ['page' => 'billing']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}"
                    href="{{ route('virtual-reality') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}" href="{{ route('rtl') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
        </ul>
    </div>

</aside>