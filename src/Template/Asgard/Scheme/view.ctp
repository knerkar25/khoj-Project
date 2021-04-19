<!-- Page Header -->
<section class="content-header">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <span class="text-uppercase page-subtitle">AATAPI FOUNDATION</span>
            <h3 class="page-title">View Scheme</h3>
        </div>
        <div class="d-none d-sm-block offset-sm-4 col-4 col-12 col-sm-4 justify-content-end">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(["controller" => "Scheme", "action" => "index"]); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Scheme</li>
            </ol>
        </div>
    </div>
    <!-- End Page Header -->
</section>

<section>
    <div class="row">
        <div class="col-lg-8 mx-auto mt-4">
            <div class="card card-small edit-user-details mb-4">
               
                <div class="card-body p-0">
                    <form action="#" class="py-4">
                        <div class="form-row mx-4">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6 class="form-text m-0"><b>Name</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['name'] ?></p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h6 class="form-text m-0"><b>Description</b></h6>
                                        <p class="form-text text-muted m-0"><?= $data['description'] ?></p>
                                    </div>                                 
                               
                                   
                                </div>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>