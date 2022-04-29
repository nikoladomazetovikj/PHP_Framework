<div class="container-fluid mt-5">
    <div class="container">
        <div class="card mx-auto col-6">
            <div class="card-header">
                <h6>Register</h6>
            </div>
            <div class="card-body">
                <!-- form -->
                <?php $form = app\core\form\Form::begin('/register', 'post') ?>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'firstname') ?>
                </div>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'lastname') ?>
                </div>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'email')->emailField() ?>
                </div>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'password')->passwordField() ?>
                </div>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'confirmpassword')->passwordField() ?>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <?php app\core\form\Form::end() ?>
            </div>
        </div>
    </div>
</div>