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
    <div class="btn">
        <button class="edit">แก้ไข</button>
        <button class="delete">ลบ</button>
    </div>
</div>
<?php endforeach ?>