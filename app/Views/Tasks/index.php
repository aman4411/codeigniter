<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?> Tasks <?= $this->endSection() ?>
<?= $this->section("content") ?>
<h1>Tasks View</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <a href="<?= site_url("/tasks/" . $task["id"]) ?>">
                <?= $task["description"] ?>
            </a>

        </li>
    <?php endforeach ?>
</ul>
<br>
<a href="<?= site_url("/tasks/new") ?>">Create new task</a>
<?= $this->endSection() ?>