<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <?php
        $uri = service('uri');
        $validation = session('validation');
    ?>

    <div class="d-flex flex-column justify-content-center align-items-center bg-light p-4" style="min-height: 100vh">
        <div class="text-center mb-3">
            <img class="mb-3" src="img/logo.png" alt="" width="100">
            <h1 class="text-capitalize"><?= $uri->getSegment(1) ?></h1>
            <p class="small"><a href="">Already Registerd</a></p>
        </div>

        <?php if(session('success')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session('success') ?>
            </div>
        <?php endif; ?>

        <?= form_open($uri->getSegment(1), ['class' => 'w-100 p-4 bg-white rounded mb-3', 'style' => 'max-width: 400px;']) ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control <?= isset($validation) && $validation->hasError('name') ? 'is-invalid' : '' ?>" id="name" value="<?= old('name') ?>" required>
                <?php if(isset($validation) && $validation->hasError('name')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('name') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>" id="email" value="<?= old('email') ?>" required>
                <?php if(isset($validation) && $validation->hasError('email')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('email') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>" id="password" value="" required>
                <?php if(isset($validation) && $validation->hasError('password')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('password') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group mb-4">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="cofirm_password" class="form-control <?= isset($validation) && $validation->hasError('cofirm_password') ? 'is-invalid' : '' ?>" id="confirm_password" value="" required>
                <?php if(isset($validation) && $validation->hasError('cofirm_password')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('cofirm_password') ?>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-secondary w-100">Submit</button>
        </form>

        <small>CodeIgniter 4 - Authentication &copy; <?= date('Y') ?></small>
    </div>

<?= $this->endSection() ?>


