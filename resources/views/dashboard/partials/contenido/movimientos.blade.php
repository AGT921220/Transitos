<li class="{{ ( Route::is('ver_movimientos','agregar_movimiento')) ? 'active' : '' }} treeview">
    <a href="#">
      <i class="fa fa-suitcase"></i> 
      <span>Movimientos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ ( Route::is('ver_movimientos')) ? 'active' : '' }}"><a href="{{ route('ver_movimientos') }}"><i class="fa fa-list"></i>Ver Movimientos</a></li>
      <li class="{{ ( Route::is('agregar_movimiento')) ? 'active' : '' }}"><a href="{{ route('agregar_movimiento') }}"><i class="fa fa-plus"></i>Agregar Movimiento</a></li>
    </ul>
</li>