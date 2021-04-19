<div class="main-navbar  bg-white">
    <div class="container p-0">
        <!-- Main Navbar -->
        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
            <a class="navbar-brand" href="#" style="line-height: 30px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1 ml-3" style="max-width: 30px;" src="<?= $this->request->getAttribute('webroot') . 'img/' ?>backend/kletter.png" alt="Kartik Dashboard">
                    <span class="d-none d-md-inline ml-1">AATAPI FOUNDATION</span>
                </div>
            </a>

            <ul class="navbar-nav border-left flex-row border-right ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <!-- <img class="user-avatar rounded-circle mr-2" src="#" alt=" User Avatar"> -->
                        <!-- <span class="material-icons-outlined">person</span> -->
                        <i class="material-icons">person</i>
                        <span class="d-none d-md-inline-block"><?php if (!empty($user['username'])) : ?><?= $user['username'] ?><?php else : ?>John Doe<?php endif; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-small">
                        <!-- <a class="dropdown-item" href="user-profile.html"><i class="material-icons"></i> Profile</a> -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="material-icons text-danger"></i> Logout </a>
                    </div>
                </li>
            </ul>
            <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar  d-inline d-lg-none text-center " data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                    <i class="material-icons"></i>
                </a>
            </nav>
        </nav>
    </div> <!-- / .container -->
</div>


<?php
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');
$role = $user['role'];

?>


<!-- MENU BAR -->
<div class="header-navbar collapse d-lg-flex p-0 bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">

                    <li class="nav-item">
                        <a href="<?= $this->Url->build(["controller" => "Dashboard", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Dashboard' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <!-- <?php if ($role == 'DIRECTOR') : ?>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(["controller" => "Admins", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Admins' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Director</a>
                        </li>
                    <?php endif; ?> -->
                    <?php if ($role == 'FIELDMOBILZER') : ?>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(["controller" => "Fieldmobilizer", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Fieldmobilizer' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Field Mobilizer</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(["controller" => "Villageleader", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Villageleader' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Village Leader</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($role == 'VILLAGELEADER') : ?>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build(["controller" => "Villageleader", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Villageleader' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Village Leader</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($role == 'COORDINATOR' || $role == 'DIRECTOR' || $role == 'CEO') : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?= $controller == 'Admins' && $action == 'index' ? 'active' : '' ?> <?= $controller == 'Coordinator' && $action == 'index' ? 'active' : '' ?>" data-toggle="dropdown"><i class="material-icons">people</i>Users</a>
                            <div class="dropdown-menu dropdown-menu-small">
                                <a href="<?= $this->Url->build(["controller" => "Admins", "action" => "index"]); ?>" class="dropdown-item  <?= $controller == 'Admins' && $action == 'index' ? 'active' : '' ?>">Director</a>
                                <a href="<?= $this->Url->build(["controller" => "Coordinator", "action" => "index"]); ?>" class="dropdown-item <?= $controller == 'Coordinator' && $action == 'index' ? 'active' : '' ?>">Co-ordinator</a>
                                <a href="<?= $this->Url->build(["controller" => "Fieldmobilizer", "action" => "index"]); ?>" class="dropdown-item <?= $controller == 'Fieldmobilizer' && $action == 'index' ? 'active' : '' ?>">Field Mobilizer</a>
                                <a href="<?= $this->Url->build(["controller" => "Villageleader", "action" => "index"]); ?>" class="dropdown-item <?= $controller == 'Villageleader' && $action == 'index' ? 'active' : '' ?>">Village leader</a>
                            </div>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a href="<?= $this->Url->build(["controller" => "Pwd", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Pwd' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Pwd</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= $this->Url->build(["controller" => "Scheme", "action" => "index"]); ?>" class="nav-link <?= $controller == 'Scheme' && $action == 'index' ? 'active' : '' ?>"><i class="material-icons">dashboard</i>Scheme</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>