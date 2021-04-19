<!-- Page Header -->
<section class="content-header">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
            <h3 class="page-title">Add Field Mobilizer</h3>
        </div>
        <div class="d-none d-sm-block offset-sm-4 col-4 col-12 col-sm-4 justify-content-end">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(["controller" => "Fieldmobilizer", "action" => "index"]); ?>">Home</a></li>
                <li class="breadcrumb-item active">Field Mobilizer</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Page Header -->
<section class="content">
    <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12">
            <div class="card card-small mb-4">
                <div class="card-body p-0 pb-3">
                    <div class="card-body d-flex flex-column">
                        <?= $this->Form->create(null, ['type' => 'file', 'role' => 'form']); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Please Enter Your First Name" required> 
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Please Enter Your Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" name="mobile" pattern="[0-9]{10}" title="Enter Valid Mobile Number" placeholder="Please Enter Mobile Number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="username">Username </label>
                            <input type="text" class="form-control" placeholder="Enter UserName" name="username" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="rpassword">Retype Password</label>
                                    <input type="password" class="form-control" id="rpassword" placeholder="Retype Password" name="rpassword" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="role" value="FIELDMOBILZER">
                        </div>
                        <div class="form-group mb-0 float-right">
                            <button type="submit" class="btn btn-accent sticky-action-btn">Add Field Mobilizer</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>