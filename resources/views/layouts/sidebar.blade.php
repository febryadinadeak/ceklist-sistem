<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

      @if(\Auth::user()->role == 1)

      <li class="menu-sidebar"><a href="{{ url('/tugas') }}"><span class="glyphicon glyphicon-edit"></span>Data Tugas</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/verifikasi') }}"><span class="glyphicon glyphicon-check"></span>Verifikasi</span></a></li>
        
      <li class="menu-sidebar"><a href="{{ url('/laporan') }}"><span class="glyphicon glyphicon-list-alt"></span>Laporan</span></a></li>
        
      <li class="menu-sidebar"><a href="{{ url('/komentar') }}"><span class="glyphicon glyphicon-comment"></span>Komentar</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/office-boy') }}"><span class="glyphicon glyphicon-user"></span>Daftar OB</span></a></li>

      @endif

      @if(\Auth::user()->role == null)

      <li class="menu-sidebar"><a href="{{ url('/tugas') }}"><span class="glyphicon glyphicon-edit"></span>Data Tugas</span></a></li>

      <li class="menu-sidebar"><a href="{{ url('/komentar') }}"><span class="glyphicon glyphicon-comment"></span>Komentar</span></a></li>

      @endif
        
      <li class="header">OTHER</li>

      <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>

        


      </ul>
    </section>