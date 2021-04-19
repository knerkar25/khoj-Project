<!-- Page Header -->
<section class="content-header">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
            <h3 class="page-title">Edit Scheme</h3>
        </div>
        <div class="d-none d-sm-block offset-sm-4 col-4 col-12 col-sm-4 justify-content-end">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(["controller" => "Scheme", "action" => "index"]); ?>">Home</a></li>
                <li class="breadcrumb-item active">Scheme</li>
            </ol>
        </div>
    </div>
    <!-- End Page Header -->
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-7 col-sm-12 col-md-12">
            <div class="card card-small mb-4">
                <div class="card-body p-0 pb-3">
                    <div class="card-body d-flex flex-column">
                        <?= $this->Form->create(null, ['type' => 'file', 'role' => 'form']); ?>

                        <div class="form-group">
                            <label for="dept_name">Scheme Name</label>
                            <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Please Enter Scheme Name" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Please Enter Description" class="form-control" required><?= $data['description'] ?></textarea>
                        </div>

                        <div class="form-group mb-0 float-right">
                            <button type="submit" class="btn btn-accent sticky-action-btn">Edit Scheme</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>