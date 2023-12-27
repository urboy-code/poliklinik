<!DOCTYPE html>
<html lang="en">

@include('admin-layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        @include('admin-layout.navbar')

        @include('admin-layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('admin-layout.breadcrumb')

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin-layout.footer')

    </div>
    <!-- ./wrapper -->

    @include('admin-layout.script')
</body>

</html>
