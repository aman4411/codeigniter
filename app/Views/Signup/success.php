<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Signup Success <?= $this->endSection() ?>
<?= $this->section("content") ?>
<br>
<h1>Account Created</h1>
<br>
<div class="alert alert-success">
    Congratulations !!! Your account has been created successfully. Click 
    <a href="<?= site_url('/login') ?>">Here</a> 
    to Login.
</div>
<?= $this->endSection() ?>