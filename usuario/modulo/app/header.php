<br>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link 
      <?php
        if ($accion == "inicio") echo "active";
        ?>
      " href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link 
      <?php
        if ($accion == "mostrar") echo "active";
        ?>
      " href="mostrar">Mostrar Usuario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link
      <?php
        if ($accion == "guardar") echo "active";
        ?>
      " href="guardar">Guardar Usuario</a>
        </li>
    </ul>
</div><br>