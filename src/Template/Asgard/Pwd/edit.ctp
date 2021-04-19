
    <!-- Page Header -->
    <section class="content-header">
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
                <h3 class="page-title">Edit Pwd</h3>
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
            <div class="col-lg-7 col-sm-12 col-md-12">
                <div class="card card-small mb-4">
                    <div class="card-body p-0 pb-3">
                        <div class="card-body d-flex flex-column">
                            <?= $this->Form->create(null, ['type' => 'file', 'role' => 'form']); ?>

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Please Enter Full Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="birth_date">Date of Birth</label>
                                        <input type="date" name="birth_date" value="<?= $data['birth_date'] ?>" placeholder="Please Enter Date Of Birth" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="MALE"  <?= $data['gender'] == 'MALE' ? 'selected' : ' ' ?>>Male</option>
                                            <option value="FEMALE" <?= $data['gender'] == 'FEMALE' ? 'selected' : ' ' ?>>Female</option>
                                            <option value="OTHERS" <?= $data['gender'] == 'OTHERS' ? 'selected' : ' ' ?>>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="age">Age</label>
                                        <input type="text" name="age" value="<?= $data['age'] ?>" placeholder="Please Enter Age" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" name="mobile" value="<?= $data['mobile'] ?>" pattern="[0-9]{10}" title="Enter Valid Mobile Number" placeholder="Please Enter Mobile Number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="education">Education</label>
                                        <input type="text" name="education" value="<?= $data['education'] ?>" placeholder="Please Enter Education" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="occupation">Occupation</label>
                                        <input type="text" name="occupation" value="<?= $data['occupation'] ?>" placeholder="Please Enter Occupation" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="yearly_salary">Yearly Salary</label>
                                <input type="text" name="yearly_salary" value="<?= $data['yearly_salary'] ?>" placeholder="Please Enter Yearly Salary" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="ration_card">Ration Card</label>
                                        <input type="text" name="ration_card" value="<?= $data['ration_card'] ?>"  placeholder="Please Enter Ration Card" class="form-control" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="aadhar_card">Aadhar Card</label>
                                        <input type="text" name="aadhar_card" value="<?= $data['aadhar_card'] ?>" placeholder="Please Enter Aadhar Card" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" placeholder="Please Enter Address" class="form-control" required><?= $data['address'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pwd_types">Pwd </label>
                                <select class="form-control" name="pwd_types" required>
                                    <option data-display="Select Pwd" value="" disabled selected>Please Select Pwd</option>
                                    <option value="BLINDNESS" <?= $data['pwd_types'] == 'BLINDNESS' ? 'selected' : ' ' ?>>Blindness</option>
                                    <option value="LOW_VISION" <?= $data['pwd_types'] == 'LOW_VISION' ? 'selected' : ' ' ?>>Low Vision</option>
                                    <option value="CEREBRAL_PALSY" <?= $data['pwd_types'] == 'CEREBRAL_PALSY' ? 'selected' : ' ' ?>>Cerebral Palsy</option>
                                    <option value="HEARING_IMPAIRMENT" <?= $data['pwd_types'] == 'HEARING_IMPAIRMENT' ? 'selected' : ' ' ?>>Hearing Impairment</option>
                                    <option value="LEPROSY_CURED_PERSON" <?= $data['pwd_types'] == 'LEPROSY_CURED_PERSON' ? 'selected' : ' ' ?>>Leprosy Cured Person</option>
                                    <option value="LOCOMOTOR_DISABILITY" <?= $data['pwd_types'] == 'LOCOMOTOR_DISABILITY' ? 'selected' : ' ' ?>>Locomotor Disability</option>
                                    <option value="MENTAL_ILLNESS" <?= $data['pwd_types'] == 'MENTAL_ILLNESS' ? 'selected' : ' ' ?>>Mental Illness</option>
                                    <option value="LEARNING_DISABILITIES" <?= $data['pwd_types'] == 'LEARNING_DISABILITIES' ? 'selected' : ' ' ?>>Learning Disability</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="age_disable_certificate">Disablity From Age</label>
                                <input type="text" name="age_disable_certificate" value="<?= $data['age_disable_certificate'] ?>" placeholder="Please Enter Disablity From Age" class="form-control" required>

                            </div>
                            <div class="form-group">
                                <label for="diseases">Diseases</label>
                                <input type="text" name="diseases" value="<?= $data['diseases'] ?>"  placeholder="Please Enter Diseases" class="form-control" required>

                            </div>
                            <div class="form-group">
                                <label for="bank_account">Bank Account</label>
                                <select class="form-control" name="bank_account"   required>
                                    <option value="YES" <?= $data['bank_account'] == 'YES' ? 'selected' : ' ' ?>>Yes</option>
                                    <option value="NO" <?= $data['bank_account'] == 'NO' ? 'selected' : ' ' ?>>No</option>
                                </select>
                            </div>
                            <?php if($data['bank_account'] == 'YES') :?>
                                <div class="form-group" >
                                    <label for="account_number">Enter Bank Account</label>
                                    <input type="number" value="<?= $data['account_number']?>" name="account_number" placeholder="Please Enter Bank Account Number" class="form-control" required>
                                </div>
                            <?php endif; ?>

                            <div class="form-group mb-0 float-right">
                                <button type="submit" class="btn btn-accent sticky-action-btn">Edit Pwd</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


