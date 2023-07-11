<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Home <?= $this->endSection() ?>
<?= $this->section("content") ?>
<br>
    <?php if(current_user()): ?>
        <h1>Welcome <?= esc(current_user()->name) ?></h1> 
        <a href="<?= site_url('/logout') ?>" class="btn btn-primary">Logout</a>
    <?php else: ?>
        <a href="<?= site_url('/login') ?>" class="btn btn-primary">Login</a>
    <?php endif ?>
<?= $this->endSection() ?>