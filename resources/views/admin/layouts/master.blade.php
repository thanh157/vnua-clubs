<!doctype html>
<html lang="en">

@include('admin.includes.head')

<body>
 <!--Main navbar-->
    @include('admin.includes.header')
    <!--/Main navbar-->

<!-- Page content -->
<div class="page-content">

    @include('admin.includes.sidebar')

    <!-- Main content -->
    <div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Content area -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /content area -->

    </div>
        <!-- /inner content -->
    </div>
    <!-- /main content -->

   
</div>
<!-- /page content -->

 <!-- Footer -->
    @include('admin.includes.footer')
    <!-- /footer -->
</body>
</html>