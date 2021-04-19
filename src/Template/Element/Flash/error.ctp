<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="flash-message flash-error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->

<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <i class="fa fa-times mx-2"></i>
    <strong><?= $message ?></strong> 
</div>