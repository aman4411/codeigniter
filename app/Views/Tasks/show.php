<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Show Task <?= $this->endSection() ?>
<?= $this->section("content") ?>
<h1>Task Detail : </h1>
<a href="<?= site_url("/tasks") ?>">&leftarrow; back to tasks</a>
<ul>
    <li>
        <?= $task["id"] ?>
        <?= $task["description"] ?>
    </li>
</ul>
<div class="row">
<a class="col-1 m-1 btn btn-primary" href="<?= site_url("/tasks/edit/" . $task['id']) ?>"> Edit</a>
<a class="col-1 m-1 btn btn-danger" href="<?= site_url("/tasks/delete/" . $task['id']) ?>"> Delete</a>
</div>
<?= $this->endSection() ?>