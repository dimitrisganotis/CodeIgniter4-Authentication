<div class="card border-primary mb-5 mx-auto" style="max-width: 25rem;">
    <div class="card-header"><?= $user->id.'. '.$user->name ?></div>

    <div class="card-body text-primary">
        <h5 class="card-title"><?= $user->email ?></h5>
        <p class="card-text">
            <ul class="list-group">
                <li class="list-group-item">email_verified_at: <?= $user->email_verified_at ?></li>
                <li class="list-group-item">password: <?= $user->password ?></li>
                <li class="list-group-item">created_at: <?= $user->created_at ?></li>
                <li class="list-group-item">updated_at: <?= $user->updated_at ?></li>
            </ul>
        </p>
    </div>
</div>