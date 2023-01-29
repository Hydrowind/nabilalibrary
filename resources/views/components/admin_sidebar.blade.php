<div class="sidebar content-box" style="display: block;">
  <ul class="nav">
      <!-- Main menu -->
      <li class="{{ Route::is('dashboard') ? 'current' : '' }}"><a href="{{ route('dashboard') }}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
      <li class="{{ Route::is('users.librarians') ? 'current' : '' }}"><a href="{{ route('users.librarians') }}"><i class="glyphicon glyphicon-user"></i> Pustakawan</a></li>
      <li class="{{ Route::is('users.student') ? 'current' : '' }}"><a href="{{ route('users.student') }}"><i class="glyphicon glyphicon-user"></i> Siswa</a></li>
      <li class="{{ Route::is('books.index') ? 'current' : '' }}"><a href="{{ route('books.index') }}"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
      <li class="{{ Route::is('transactions.index') ? 'current' : '' }}"><a href="{{ route('transactions.index') }}"><i class="glyphicon glyphicon-sort"></i> Transaksi</a></li>
      <li class="{{ Route::is('report') ? 'current' : '' }}"><a href="{{ route('report') }}"><i class="glyphicon glyphicon-stats"></i> Laporan</a></li>
      <!-- <li><a href="{{ route('books.index') }}"><i class="glyphicon glyphicon-record"></i> Laporan</a></li> -->

      <!-- <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
      <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
      <li class="submenu">
        <a href="#">
          <i class="glyphicon glyphicon-list"></i> Pages
          <span class="caret pull-right"></span>
        </a>

        <ul>
          <li><a href="login.html">Login</a></li>
          <li><a href="signup.html">Signup</a></li>
        </ul>
      </li> -->
  </ul>
</div>