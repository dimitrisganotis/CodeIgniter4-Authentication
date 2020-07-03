<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="d-flex flex-column justify-content-center align-items-center bg-light p-4" style="min-height: 100vh">
        <div class="text-center mb-3">
            <img class="mb-3" src="img/logo.png" alt="" width="100">
            <h1 class="">Register</h1>
            <p class="small"><a href="">Already Registerd</a></p>
        </div>

        <?= form_open('register', ['class' => 'w-100 p-4 bg-white rounded mb-3', 'style' => 'max-width: 400px;']) ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control <?= !empty($errors['name']) ? 'is-invalid' : '' ?>" id="name" value="<?= set_value('name') ?>">
                <?php if(!empty($errors['name'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['name'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control <?= !empty($errors['email']) ? 'is-invalid' : '' ?>" id="email" aria-describedby="emailHelp">
                <?php if(!empty($errors['email'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control <?= !empty($errors['password']) ? 'is-invalid' : '' ?>" id="password" aria-describedby="emailHelp">
                <?php if(!empty($errors['password'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group mb-4">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="cofirm_password" class="form-control <?= !empty($errors['cofirm_password']) ? 'is-invalid' : '' ?>" id="confirm_password">
                <?php if(!empty($errors['cofirm_password'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['cofirm_password'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-secondary w-100">Submit</button>
        </form>

        <small>CodeIgniter 4 - Authentication &copy; <?= date('Y') ?></small>
    </div>

<?= $this->endSection() ?>


