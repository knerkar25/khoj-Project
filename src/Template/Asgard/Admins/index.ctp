<?php
$role = $user['role'];
?>

<!-- Page Header -->
<section class="content-header">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
            <h3 class="page-title">Directors</h3>
        </div>
        <div class="d-none d-sm-block offset-sm-4 col-4 col-12 col-sm-4 justify-content-end">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(["controller" => "Admins", "action" => "index"]); ?>">Home</a></li>
                <li class="breadcrumb-item active">Directors</li>
            </ol>
        </div>
    </div>
    <!-- End Page Header -->
</section>

<section class="content">
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Records</h6>
                </div>
                <div class="p-0 text-center">
                    <div class="card-body d-flex flex-column">
                        <?= $this->Form->create(null, ['type' => 'get', 'class' => 'quick-post-form']); ?>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="filter">
                                        <option data-display="Filter" value="" selected disabled>Select Filter</option>
                                        <option value="first_name" <?= $filter == 'first_name' ? 'selected' : '' ?>>First Name</option>
                                        <option value="last_name" <?= $filter == 'last_name' ? 'selected' : '' ?>>Last Name</option>
                                        <option value="username" <?= $filter == 'username' ? 'selected' : '' ?>>Username</option>
                                        <option value="mobile" <?= $filter == 'mobile' ? 'selected' : '' ?>>Mobile</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-6 d-flex">
                                <div class="form-group w-100">
                                    <input type="text" class="form-control" name="search" value="<?= $search ?>" placeholder="Search Here...">
                                </div>
                                <div class="form-group pl-3">
                                    <button type="submit" class="btn btn-accent">Search</button>
                                </div>
                            </div>

                            <?php if ($role == 'DIRECTOR' || $role == 'CEO') : ?>
                                <div class="col-lg-6 col-sm-6 col-md-6 d-flex justify-content-end align-items-center">
                                    <a class="btn btn-accent fab-btn" href="<?= $this->Url->build(["controller" => "admins", "action" => "add"]); ?>" data-toggle="tooltip" title="Add Admin">
                                        <i class="material-icons">add</i>
                                        <span>Add Director</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col" class="border-0">Full Name</th>
                                        <th scope="col" class="border-0">Username</th>
                                        <th scope="col" class="border-0">Mobile</th>
                                        <th scope="col" class="border-0">Registered At</th>
                                        <?php if ($role == 'DIRECTOR' || $role == 'CEO') : ?>
                                            <th scope="col" class="border-0">Actions</th>
                                        <?php endif; ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $val) : ?>
                                        <tr>
                                            <td><?= $val['first_name'] ?> <?= $val['last_name'] ?></td>
                                            <td><?= $val['username'] ?></td>
                                            <td><?= $val['mobile'] ?></td>
                                            <td><?= date('jS F Y', strtotime($val['created_at'])) ?></td>
                                            <?php if ($role == 'DIRECTOR' || $role == 'CEO') : ?>
                                                <td class="action-btn-container">
                                                    <div class="btn-group btn-group-sm d-flex justify-content-center" role="group" aria-label="Table row actions">

                                                        <a href="<?= $this->Url->build(["controller" => "admins", "action" => "delete", $val['id']]); ?>" type="button" class="btn btn-danger" data-toggle="tooltip" title="Delete Admin">
                                                            <i class="material-icons white"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer" style="background: #fbfbfb;">
                        <!-- Pagination -->
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-5 d-flex">
                                <div class="">
                                    <?= $this->Paginator->counter('Showing {{start}} to {{end}} of {{count}} entries') ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers d-flex justify-content-end">
                                    <ul class="pagination">
                                        <?php
                                        echo $this->Paginator->prev(__('Previous'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                                        echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
                                        echo $this->Paginator->next(__('Next'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>