<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form class="" action="/register" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name:</label>
                                <input class="form-control" type="text" name="firstname" id="firstname"
                                    value="<?= set_value('firstname') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="lastname">First Name:</label>
                                <input class="form-control" type="text" name="lastname" id="lastname"
                                    value="<?= set_value('lastname') ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input class="form-control" type="text" name="email" id="email"
                                    value="<?= set_value('email') ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input class="form-control" type="password" name="password" id="password" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password_confirm">Confirm Password:</label>
                                <input class="form-control" type="password" name="password_confirm"
                                    id="password_confirm" value="">
                            </div>
                        </div>
                        <?php if(isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/">Already have an account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>