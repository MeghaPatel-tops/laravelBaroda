<!DOCTYPE html>
<html lang="en">
@include('admin.template.head')
<body>

<div class="d-flex">

    <!-- Sidebar -->
     @include('admin.template.sidebar')

    <!-- Main Content -->
    <div class="content">

        <!-- Navbar -->
        @include('admin.template.navbar')

        <!-- Page Content -->
        <div class="container-fluid p-4">
           

        @yield('content')

        </div>

    </div>

</div>

</body>
</html>