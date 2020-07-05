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
            <p class="small"><a href="">Not a user?</a></p>
        </div>

        <?php if(session('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="width: 400px;">
                <?= session('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if(session('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="width: 400px;">
                <?= session('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?= form_open($uri->getSegment(1), ['class' => 'w-100 p-4 bg-white rounded mb-3', 'style' => 'max-width: 400px;']) ?>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>" id="email" value="<?= old('email') ?>">
                <?php if(isset($validation) && $validation->hasError('email')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('email') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>" id="password" value="">
                <?php if(isset($validation) && $validation->hasError('password')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('password') ?>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-secondary w-100">Submit</button>
        </form>

        <small>CodeIgniter 4 - Authentication &copy; <?= date('Y') ?></small>
    </div>
<?= $this->endSection() ?>
