<div class="card">
    <div class="card-body" style="overflow: hidden;border-radius: .625rem;">
        <img class="auth-form__logo d-table mx-auto mb-3" src="<?= $this->request->getAttribute('webroot') . 'img/backend/' ?>kletter.png" alt="LOGO">
        <h5 class="auth-form__title text-center mb-4">AATAPI FOUNDATION</h5>
        <?= $this->Form->create(null, ['role' => 'form']); ?>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="username" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
        </div>
        <div class="form-group ">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group d-flex justify-content-center ">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
        </div>
        </form>
    </div>


</div>
<div class="auth-form__meta d-flex mt-4">
    <!-- <a href="<?= $this->Url->build(["controller" => "Users", "action" => "forgot_password"]) ?>">Forgot your password?</a> -->
    <!-- <a class="ml-auto" href="register.html">Create new account?</a> -->
</div>