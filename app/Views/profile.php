<?= $this->extend('layouts/app') ?>

<?= $this->section('header') ?>
    <?= $this->include('templates/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('components/profile_card') ?>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('templates/footer') ?>
<?= $this->endSection() ?>
