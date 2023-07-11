<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Update Task <?= $this->endSection() ?>
<?= $this->section("content") ?>
<br>
<h1>Add Task</h1>
<?= form_open("/tasks/update/" . $task['id']) ?>
<br>
<div class="container">
    <div class="form-group">
        <label for="description" class="col-3 form-label">Task Description</label>
        <input type="text" name="description" id="description" class="col-6 form-control"
         value="<?= esc($task['description']) ?>">
    </div>
    <br>
    <div class="form-group">
        <?php if(session()->has('errors')): ?>
            <ul>
                <?php foreach(session('errors') as $error): ?>
                    <li style="color: red;"><?= $error ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
    <div class="form-group">
        <input type="submit" class="col-2 btn btn-primary">
        <a href="<?= site_url("/tasks/" . $task['id']) ?>" class="col-2 btn btn-danger">
            Cancel
        </a>
    </div>
</div>
</form>
<?= $this->endSection() ?>