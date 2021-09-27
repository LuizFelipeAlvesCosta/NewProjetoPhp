<?php

$file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';


if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>
    <ul class="sidebar-menu">

        <li class="treeview">
            <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Produtos</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__('Listar'),
                        ['controller' => 'Control', 'action' => 'index']) ?>
                    </li>
            </ul>
        </li>

    </ul>
<?php } ?>
