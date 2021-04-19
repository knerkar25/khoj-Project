<?php
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');
$role = $user['role'];

?>
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?= $this->request->getAttribute('webroot') . 'img/' ?>backend/superman.png" alt="SUPERP Dashboard">
                    <span class="d-none d-md-inline ml-1">SUPERP</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    <!-- <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
        </div>
    </form> -->
    <div class="nav-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= $controller == 'Dashboard' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Dashboard", "action" => "index"]); ?>">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <?php if ($role == 'SUPER_ADMIN') : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  <?= $controller == 'Users' && $action == 'index' ? 'active' : '' ?> <?= $controller == 'Admins' && $action == 'index' ? 'active' : '' ?><?= $controller == 'Teachers' && $action == 'index' ? 'active' : '' ?><?= $controller == 'Students' && $action == 'index' ? 'active' : '' ?> " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">people</i>
                        <span>Users</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-small" x-placement="top-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-6px, -31px, 0px);">

                        <a class="dropdown-item <?= $controller == 'Admins' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Admins", "action" => "index"]); ?>">Admins</a>
                        <a class="dropdown-item <?= $controller == 'Teachers' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Teachers", "action" => "index"]); ?>">Teachers</a>
                        <a class="dropdown-item <?= $controller == 'Students' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Students", "action" => "index"]); ?>">Students</a>

                    </div>
                </li>
            <?php endif; ?>

            <?php if ($role == 'TEACHER' || $role == 'STUDENT') : ?>
                <li class="nav-item">
                    <a class="nav-link <?= $controller == 'Teachers' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Teachers", "action" => "index"]); ?>">
                        <i class="material-icons">people</i>
                        <span>Teachers</span>
                    </a>
                </li>
            <?php endif; ?>






            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  <?= $controller == 'Exam' && $action == 'index' ? 'active' : '' ?> <?= $controller == 'Examschedule' && $action == 'index' ? 'active' : '' ?><?= $controller == 'Grade' && $action == 'index' ? 'active' : '' ?> " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">hourglass_top</i>
                    <span>Exam</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small" x-placement="top-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-6px, -31px, 0px);">

                    <a class="dropdown-item <?= $controller == 'Exam' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Exam", "action" => "index"]); ?>">Exam</a>
                    <a class="dropdown-item <?= $controller == 'Examschedule' && $action == 'index' ? 'active' : '' ?> " href="<?= $this->Url->build(["controller" => "Examschedule", "action" => "index"]); ?>">Exam Schedule</a>
                    <a class="dropdown-item <?= $controller == 'Grade' && $action == 'index' ? 'active' : '' ?> " href="<?= $this->Url->build(["controller" => "Grade", "action" => "index"]); ?>">Grade</a>
                    <a class="dropdown-item <?= $controller == 'Marks' && $action == 'index' ? 'active' : '' ?> " href="<?= $this->Url->build(["controller" => "Marks", "action" => "index"]); ?>">Marks</a>

                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  <?= $controller == 'Books' && $action == 'index' ? 'active' : '' ?> <?= $controller == 'Issue' && $action == 'index' ? 'active' : '' ?><?= $controller == 'E-book' && $action == 'index' ? 'active' : '' ?> " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">local_library</i>
                    <span>Library</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small" x-placement="top-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-6px, -31px, 0px);">

                    <a class="dropdown-item <?= $controller == 'Books' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Books", "action" => "index"]); ?>">Books</a>
                    <a class="dropdown-item <?= $controller == 'Issue' && $action == 'index' ? 'active' : '' ?> " href="<?= $this->Url->build(["controller" => "Issue", "action" => "index"]); ?>">Issue</a>
                    <!-- <a class="dropdown-item <?= $controller == 'E-book' && $action == 'index' ? 'active' : '' ?> " href="<?= $this->Url->build(["controller" => "E-book", "action" => "index"]); ?>">E-book</a> -->

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  <?= $controller == 'Subjects' && $action == 'index' ? 'active' : '' ?>  <?= $controller == 'Syllabus' && $action == 'index' ? 'active' : '' ?> <?= $controller == 'Assignment' && $action == 'index' ? 'active' : '' ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">school</i>
                    <span>Academic</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small" x-placement="top-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-6px, -31px, 0px);">

                    <a class="dropdown-item <?= $controller == 'Subjects' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Subjects", "action" => "index"]); ?>">Subjects</a>
                    <a class="dropdown-item <?= $controller == 'Syllabus' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Syllabus", "action" => "index"]); ?>">Syllabus</a>
                    <a class="dropdown-item <?= $controller == 'Assignment' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Assignment", "action" => "index"]); ?>">Assignment</a>


                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  <?= $controller == 'Notice' && $action == 'index' ? 'active' : '' ?>  <?= $controller == 'Event' && $action == 'index' ? 'active' : '' ?> <?= $controller == 'Holiday' && $action == 'index' ? 'active' : '' ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">campaign</i>
                    <span>Announcement</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small" x-placement="top-start" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-6px, -31px, 0px);">

                    <a class="dropdown-item <?= $controller == 'Notice' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Notice", "action" => "index"]); ?>">Notice</a>
                    <a class="dropdown-item <?= $controller == 'Event' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Event", "action" => "index"]); ?>">Event</a>
                    <a class="dropdown-item <?= $controller == 'Holiday' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Holiday", "action" => "index"]); ?>">Holiday</a>


                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $controller == 'Message' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Message", "action" => "index"]); ?>">
                    <i class="material-icons">contact_mail</i>
                    <span>Message</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link <?= $controller == 'Attendance' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Attendance", "action" => "index"]); ?>">
                    <i class="material-icons">date_range</i>
                    <span>Attendance</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $controller == 'Transport' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Transport", "action" => "index"]); ?>">
                    <i class="material-icons">directions_bus</i>
                    <span>Transport</span>
                </a>
            </li>

            <?php if ($role == 'SUPER_ADMIN') : ?>
                <li class="nav-item">
                    <a class="nav-link <?= $controller == 'Departments' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Departments", "action" => "index"]); ?>">
                        <i class="material-icons">account_balance</i>
                        <span>Departments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $controller == 'Semester' && $action == 'index' ? 'active' : '' ?>" href="<?= $this->Url->build(["controller" => "Semester", "action" => "index"]); ?>">
                        <i class="material-icons">segment</i>
                        <span>Semester</span>
                    </a>
                </li>
            <?php endif; ?>







        </ul>
    </div>
</aside>