<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

      @if(\Auth::user()->role == 1)
      
      <li class="header">Menu Utama</li>

      <li class="menu-sidebar"><a href="{{ url('/admin') }}"><span class="glyphicon glyphicon-edit"></span>Data Tugas Indoor</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/toutdoor') }}"><span class="glyphicon glyphicon-edit"></span>Data Tugas Outdoor</span></a></li>
      
      <li class="menu-sidebar"><a href="{{ url('/verifikasi') }}"><span class="glyphicon glyphicon-check"></span>Verifikasi Indoor</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/voutdoor') }}"><span class="glyphicon glyphicon-check"></span>Verifikasi Outdoor</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/pesan') }}"><span class="glyphicon glyphicon-comment"></span>Pesan</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/data-jadwal') }}"><span class="glyphicon glyphicon-comment"></span>Jadwal OB</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/office-boy') }}"><span class="glyphicon glyphicon-user"></span>Daftar OB</span></a></li>

      @endif

      @if(\Auth::user()->role == null)

      <li class="header">Menu Utama</li>

      <li class="menu-sidebar"><a href="{{ url('/tugas') }}"><span class="glyphicon glyphicon-edit"></span>Tugas Indoor</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/jadwal') }}"><span class="glyphicon glyphicon-comment"></span>Jadwal</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/pesan') }}"><span class="glyphicon glyphicon-comment"></span>Pesan</span></a></li>

      @endif

    @if(\Auth::user()->role == 2)

    <li class="header">Menu Utama</li>

    <li class="menu-sidebar"><a href="{{ url('/outdoor') }}"><span class="glyphicon glyphicon-edit"></span>Tugas Outdoor</span></a></li>

    <li class="menu-sidebar"><a href="{{ url('/jadwal') }}"><span class="glyphicon glyphicon-comment"></span>Jadwal</span></a></li>

    <li class="menu-sidebar"><a href="{{ url('/pesan') }}"><span class="glyphicon glyphicon-comment"></span>Pesan</span></a></li>

    @endif
        
      <li class="header">OTHER</li>

      <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>

        


      </ul>
    </section>