<!-- HEADER -->
        <header class="top-header d-flex justify-content-between align-items-center">

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-primary"
                        onclick="toggleSidebar()">
                    <i class="bi bi-list"></i>
                </button>

                <h5 class="mb-0 d-none d-sm-block">Admin Dashboard</h5>
            </div>

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light position-relative">
                    <i class="bi bi-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </button>

                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle"
                            data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-1"></i>
                        Admin
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#profile">Profile</a></li>
                        <li><a class="dropdown-item" href="#settings">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>

        </header>