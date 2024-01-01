<h5 class="accordion-header" id="headingThree">
    <button class="ps-0 nav-link accordion-button  font-weight-bold collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class=" ms-3 ni ni-bullet-list-67 text-danger text-sm opacity-10"></i>
        <span
            class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">
            User Management</span>

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
                    <span class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">role</span>
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
                    <span class="nav-link-text ms-1 {{Auth::user()->nav_dark_mode == 1 ? '' : 'text-dark'}}">Activity
                        Log</span>
                </a>
            </li>
        </ul>
    </div>
</div>