<div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                <i class="icon-people"></i>
                <span class="d-md-none ml-2">Users</span>
                <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
            </a>

            <div class="dropdown-menu dropdown-content wmin-md-300">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Users online</span>
                    <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                </div>

                <div class="dropdown-content-body dropdown-scrollable">
                    <ul class="media-list">
                        <li class="media">
                            <div class="mr-3">
                                <img src="{{ asset('backend') }}/global_assets/images/placeholders/placeholder.jpg"
                                    width="36" height="36" class="rounded-circle" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                <span class="d-block text-muted font-size-sm">Lead web developer</span>
                            </div>
                            <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="dropdown-content-footer bg-light">
                    <a href="#" class="text-grey mr-auto">All users</a>
                    <a href="#" class="text-grey"><i class="icon-gear"></i></a>
                </div>
            </div>
        </li>
    </ul>

    <span class="badge bg-pink-400 badge-pill ml-md-3 mr-md-auto">16 orders</span>

    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('backend') }}/global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
                English
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item english active"><img
                        src="{{ asset('backend') }}/global_assets/images/lang/gb.png" class="img-flag" alt="">
                    English</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                <i class="icon-bubbles4"></i>
                <span class="d-md-none ml-2">Messages</span>
                <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Messages</span>
                    <a href="#" class="text-default"><i class="icon-compose"></i></a>
                </div>

                <div class="dropdown-content-body dropdown-scrollable">
                    <ul class="media-list">
                        <li class="media">
                            <div class="mr-3 position-relative">
                                <img src="{{ asset('backend') }}/global_assets/images/placeholders/placeholder.jpg"
                                    width="36" height="36" class="rounded-circle" alt="">
                            </div>

                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">James Alexander</span>
                                        <span class="text-muted float-right font-size-sm">04:58</span>
                                    </a>
                                </div>

                                <span class="text-muted">who knows, maybe that would be the best thing for
                                    me...</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="dropdown-content-footer bg-light">
                    <a href="#" class="text-grey mr-auto">All messages</a>
                    <div>
                        <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i
                                class="icon-radio-unchecked"></i></a>
                        <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i
                                class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown dropdown-user">
            <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('backend') }}/global_assets/images/placeholders/placeholder.jpg"
                    class="rounded-circle mr-2" height="34" alt="">
                <span>{{ Auth::user()->name }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                        class="badge badge-pill bg-indigo-400 ml-auto">58</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="icon-switch2"></i> {{ __('Logout') }}</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</div>
