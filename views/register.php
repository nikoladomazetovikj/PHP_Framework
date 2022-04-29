<div class="container-fluid mt-5">
    <div class="container">
        <div class="card mx-auto col-6">
            <div class="card-header">
                <h6>Register</h6>
            </div>
            <div class="card-body">
                <form action="/register" method="POST">
                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-2 col-form-label">Fisrtname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="confirmpassword">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>