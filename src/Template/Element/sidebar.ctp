<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-home"></i> <span>Dar Attalib</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?= $webroot ?>production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenue,</span>
                <h2>Youssef El Kasmi</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Navigation</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-apple-alt"></i> Gestion de produits <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?= $this->Html->link("Liste de produits", ['controller' => 'Products', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link("Ajouter un produit", ['controller' => 'Products', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-truck"></i> Gestion de fournisseurs <span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?= $this->Html->link("Liste de fournisseurs", ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link("Ajouter un fournisseur", ['controller' => 'Suppliers', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-file-invoice"></i> Gestion de bons <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?= $this->Html->link('Liste des bons', ['controller' => 'Vouchers', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Ajouter un bon', ['controller' => 'Vouchers', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Gestion d'employés <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?= $this->Html->link('Liste des employés', ['controller' => 'Employees', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Ajouter un employé', ['controller' => 'Employees', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /sidebar menu -->

</div>
</div>