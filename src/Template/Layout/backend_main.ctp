<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AATAPI <?= $page_title ?></title>
    <meta name="description" content="aatapi foundation">
    <meta name="author" content="Aatapi foundation">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="57x57" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-57x57.png">
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="../../../webroot/img/favicon/apple-icon-57x57.png"> -->
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= $this->request->getAttribute('webroot') . 'img/' ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?= $this->Html->css(['backend/shards-dashboards.1.1.0.min', 'backend/extras.1.1.0.min', 'backend/flash', 'backend/imgupload', 'backend/extra']) ?>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <?= $this->Html->css(['../js/vue_backend/plugins/vue-select/vue-select-v3']) ?>

</head>

<body class="h-100">
    <!-- <?= $this->element('asgard/colorToggle') ?> -->
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->


            <!-- End Main Sidebar -->
            <main class="main-content col-lg-12 col-md-12 col-sm-12 p-0">
                <?= $this->element('asgard/topbar') ?>
                <!-- / .main-navbar -->

                <!-- FLASH MESSAGE STARTS -->
                <?= $this->Flash->render() ?>
                <!-- FLASH MESSAGE ENDS -->

                <div class="main-content-container container">
                    <?= $this->fetch('content'); ?>
                </div>
                <footer class="main-footer d-flex justify-content-center p-2 px-3 bg-white border-top fixed-bottom" >
                   
                    <span class="copyright my-auto mr-2"  >Copyright © 2021 Aatapi Foundation Kartik</span>
                </footer>
             </main>

        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are You Sure to LOGOUT</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= $this->Url->build(["controller" => "Users", "action" => "logout"]); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>



    <script>
        var baseUrlForImage = '<?= $this->request->getAttribute('webroot ') . 'img/backend/' ?>';
        var baseUrlForCss = '<?= $this->request->getAttribute('webroot') . 'backend ' ?>';
    </script>
    <?= $this->Html->script(['services', 'backend/extras.1.1.0.min', 'backend/shards-dashboards.1.1.0.min', 'backend/app-blog-overview.1.1.0', 'backend/imgupload', 'lodash.min', 'ckeditor']) ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- VueJS Libraries -->
    <?php if (env('DEBUG') == 'true') : ?>
        <?= $this->Html->script(['vue_backend/libs/vue']) ?>
    <?php else : ?>
        <?= $this->Html->script(['vue_backend/libs/vue.min']) ?>
    <?php endif; ?>
    <div>
        <input type="hidden" id="base-url" value="<?= $this->Url->build('/', ['escape' => false, 'fullBase' => true]); ?>" />
    </div>

    <?= $this->Html->script(['vue_backend/plugins/typeahead/vue-bootstrap-type-ahead.umd.min', 'vue_backend/plugins/vue-select/vue-select-v3']) ?>

    <?= $this->Html->script(['vue_backend/index']) ?>
    <!-- VueJS Components -->
    <?= $this->fetch('vue-components'); ?>
    <script>
        $(document).ready(function() {
            $('.multi-select').selectpicker();

        })
        // setTimeout(() => {
        //     $('.alert').css('display', 'none');
        // }, 5000);

        $(document).ready(function() {
            $('#table_id').DataTable();
        });

        function myPassword() {
            var x = document.getElementById("my_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }


        $('.alert').fadeOut(4000);
    </script>
</body>
<?= $this->fetch('extra-scripts'); ?>



</html>