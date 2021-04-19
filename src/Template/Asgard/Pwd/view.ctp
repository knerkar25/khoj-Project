<!-- Page Header -->
<section class="content-header">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
            <h3 class="page-title">View Pwd</h3>
        </div>
        <div class="d-none d-sm-block offset-sm-4 col-4 col-12 col-sm-4 justify-content-end">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(["controller" => "Pwd", "action" => "index"]); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Pwd</li>
            </ol>
        </div>
    </div>
    <!-- End Page Header -->
</section>

<section>
    <div class="row">
        <div class="col-lg-8 mx-auto mt-4">
            <div class="card card-small edit-user-details mb-4">
                <div class="card-header p-0">
                    <div class="edit-user-details__bg">
                        <!-- <img src="<?= $this->request->getAttribute('webroot') . 'img/backend/' ?>background.jpg" alt="Pwd Details Background Image"> -->
                        <label class="edit-user-details__change-background">
                            <i class="material-icons mr-1">receipt_long</i> Pwd Details
                        </label>
                    </div>
                </div>
                <div class="card-body p-0">
                    <form action="#" class="py-4">
                        <div class="form-row mx-4">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Name</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['name'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Gender</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['gender'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Age</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['age'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Date of Birth</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['birth_date'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Mobile Number</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['mobile'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Education</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['education'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Occupation</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['occupation'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Yearly Salary</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['yearly_salary'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Ration Card</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['ration_card'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Aadhar Card</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['aadhar_card'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Address</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['address'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Pwd</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['pwd_types'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Disablity From Age</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['age_disable_certificate'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Diseases</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['diseases'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Bank Account</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['bank_account'] ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Bank Account Number</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['account_number'] ?></p>
                                    </div>
                               
                                    <!-- <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Is Active</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['is_active'] ? 'Yes' : 'No' ?></p>
                                    </div> -->
                                </div>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>