<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Delete Task <?= $this->endSection() ?>
<?= $this->section("content") ?>
<br>
<h1>Delete Task</h1>
<br>
<p>Are you sure you want to delete task with id = <?= $taskId ?></p>
<?= form_open("/tasks/delete/" . $taskId) ?>
<br>
<div class="container">
    <div class="form-group">
        <input type="submit" class="col-2 btn btn-danger" value="Delete">
        <a href="<?= site_url("/tasks/" . $taskId) ?>" class="col-2 btn btn-success">
            Cancel
        </a>
    </div>
</div>
</form>
<?= $this->endSection() ?>