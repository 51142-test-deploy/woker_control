<?php foreach($datas as $data): ?>
<div class="woker-card">
    <div class="info">
        <div class="name">
            <?= $data['worker_name'] ?>
        </div>
        <div class="role">
            <?= $data['worker_role'] ?>
        </div>
        <div class="salaly">
            <?= $data['worker_salary'] ?>
        </div>
    </div>
    <form method="post" class="btn">
        <input name="delete_target" type="hidden" value="<?= $data['worker_name'] ?>">
        <input name="target_name" type="hidden" value="<?= $data['worker_name'] ?>">

        <button class="edit">แก้ไข</button>
        <button name="delete_btn" class="delete">ลบ</button>
    </form>
</div>
<?php endforeach ?>