<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Create Account <?= $this->endSection() ?>
<?= $this->section("content") ?>
<br>
<h1>Signup</h1>
<?= form_open("/signup/create") ?>
<br>
<div class="container">
    <div class="form-group">
        <label for="description" class="col-3 form-label">Name</label>
        <input type="text" name="name" id="name" class="col-6 form-control" value="<?= old('name') ?>" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="email" class="col-3 form-label">Email</label>
        <input type="email" name="email" id="email" class="col-6 form-control" value="<?= old('email') ?>" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password" class="col-3 form-label">Password</label>
        <input type="password" name="password" id="password" class="col-6 form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="confirmPassword" class="col-3 form-label">Confirm Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" class="col-6 form-control" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <?php if (session()->has('errors')) : ?>
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li style="color: red;"><?= $error ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
    <div class="form-group">
        <input type="submit" class="col-2 btn btn-primary">
    </div>
    <div class="form-group">
        <a href="<?= site_url("/login") ?>" class="col-2">
            Already have account? Login &rightarrow;
        </a>
    </div>
</div>
</form>
<?= $this->endSection() ?>