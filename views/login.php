<div class="container-fluid mt-5">
    <div class="container">
        <div class="card mx-auto col-6">
            <div class="card-header">
                <h6>Login</h6>
            </div>
            <div class="card-body">
                <!-- form -->
                <?php $form = app\core\form\Form::begin('/login', 'post') ?>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'email')->emailField() ?>
                </div>
                <div class="row mb-3">
                    <?php echo $form->field($model, 'password')->passwordField() ?>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <?php app\core\form\Form::end() ?>
            </div>
        </div>
    </div>
</div>