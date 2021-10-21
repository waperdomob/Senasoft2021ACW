
<header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Normas del Juego </a></li>
                </ul>
                <nav class="header-nav ms-auto me-4">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch"
                            autocomplete="off" value="light" onchange="handleThemeChange(this)">
                        <label class="btn btn-primary" for="btn-light-theme">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
                            </svg>
                        </label>
                        <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off"
                            value="dark" onchange="handleThemeChange(this)">
                        <label class="btn btn-primary" for="btn-dark-theme">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                            </svg>
                        </label>
                    </div>
                </nav>
                <ul class="header-nav me-3">
                  
                    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <p>button</p>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">


                            <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a
                                class="dropdown-item" href="#">
                                <div class="message">
                                    <div class="py-3 me-3 float-start">
                                        
                                    </div>
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">Just now</small></div>
                                    <div class="text-truncate font-weight-bold"><span class="text-danger">!</span>
                                        Important message</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="message">
                                    
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">5 minutes ago</small></div>
                                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="message">
                                    <div class="py-3 me-3 float-start">
                                        
                                    </div>
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="message">
                                    
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">4:03 PM</small></div>
                                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all
                                    messages</strong></a>
                        </div>
                    </li>
                </ul>
                <ul class="header-nav me-4">
                    <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0"
                            data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-md"><h5>Name</h5></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </div>
                    </li>
                </ul>
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                    </svg>
                </button>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <h5>Nombre de usuario</h5>
                </nav>
            </div>
        </header>
