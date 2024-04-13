 <!-- Sidebar -->
 <div class="sidebar d-flex flex-column">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 ml-3 pb-3 mb-3 d-flex">
         
        <div class="info">
            <a href="{{ route('dashboard') }}" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    @include('layouts.SidebarMenu')
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->