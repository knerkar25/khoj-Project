    <?php
    $role = $user['role'];
    ?>
    <!-- Page Header -->
    <section class="content-header">
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
                <h3 class="page-title">Pwd</h3>
            </div>
            <div class="d-none d-sm-block offset-sm-4 col-4 col-12 col-sm-4 justify-content-end">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build(["controller" => "Pwd", "action" => "index"]); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Pwd</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">

                    <div class="p-0 text-center">
                        <div class="card-body d-flex flex-column">
                            <?= $this->Form->create(null, ['type' => 'get', 'class' => 'quick-post-form']); ?>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="filter">
                                            <option data-display="Filter" value="">Select Filter</option>
                                            <option value="name" <?= $filter == 'name' ? 'selected' : '' ?>>Name</option>
                                            <option value="mobile" <?= $filter == 'mobile' ? 'selected' : '' ?>>Mobile</option>
                                            <option value="aadhar_card" <?= $filter == 'aadhar_card' ? 'selected' : '' ?>>Aadhar Card</option>
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

                                <?php if ($role == 'COORDINATOR' || $role == 'FIELDMOBILZER' || $role == 'VILLAGELEADER' || $role == 'CEO') : ?>

                                    <div class="col-lg-6 col-sm-6 col-md-6 d-flex justify-content-end align-items-center">
                                        <a class="btn btn-accent fab-btn" href="<?= $this->Url->build(["controller" => "Pwd", "action" => "add"]); ?>" data-toggle="tooltip" title="Add Department">
                                            <i class="material-icons">add</i>
                                            <span>Add Pwd</span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col" class="border-0">Name</th>
                                            <th scope="col" class="border-0">Birth Date</th>
                                            <th scope="col" class="border-0">Mobile</th>
                                            <th scope="col" class="border-0">Aadhar Card</th>
                                            <th scope="col" class="border-0 ">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $key => $val) : ?>
                                            <tr>
                                                <td><?= $val['name'] ?></td>
                                                <td><?= $val['birth_date'] ?></td>
                                                <td><?= $val['mobile'] ?></td>
                                                <td><?= $val['aadhar_card'] ?></td>
                                                <td class="action-btn-container">
                                                    <div class="btn-group btn-group-sm " role="group" aria-label="Table row actions">
                                                        <a href="<?= $this->Url->build(["controller" => "Pwd", "action" => "view", $val['id']]); ?>" type="button" class="btn btn-white active-light" data-toggle="tooltip" title="View Department">
                                                            <i class="material-icons white">visibility</i>
                                                        </a>
                                                        <?php if ($role == 'COORDINATOR' || $role == 'FIELDMOBILZER' || $role == 'VILLAGELEADER' || $role == 'CEO') : ?>

                                                            <a href="<?= $this->Url->build(["controller" => "Pwd", "action" => "edit", $val['id']]); ?>" type="button" class="btn btn-white active-light" data-toggle="tooltip" title="Edit Department">
                                                                <i class="material-icons"></i>
                                                            </a>
                                                            <a href="<?= $this->Url->build(["controller" => "Pwd", "action" => "delete", $val['id']]); ?>" type="button" class="btn btn-danger" data-toggle="tooltip" title="Delete Department">
                                                                <i class="material-icons white"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div> 
                                                </td>
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