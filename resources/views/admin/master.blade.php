<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('admin.include.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('admin.include.leftsidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')



  @include('admin.include.footer')


</div>


@include('admin.include.script')
</body>
</html>
