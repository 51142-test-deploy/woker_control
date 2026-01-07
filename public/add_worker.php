<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add woker</title>
    <link rel="stylesheet" href="../public/style_sheet/style.css">
</head>

<body>
    <nav>
        <h2>woorker management</h2>
        <ul>
            <li><a href="main.html">พนักงาน</a></li>
        </ul>
        <ul>
            <li><a href="#">เพื่มพนักงาน</a></li>
        </ul>
    </nav>
    <main>
        <div class="content">
            <form action="">
                <div class="name">
                    <p><strong>ชื่อ-นามสกุล</strong></p>
                    <input type="text" placeholder="ชื่อ" name="name">
                </div>
                <div class="last-name">
                    <p><strong>นามสกุล</strong></p>
                    <input type="text" placeholder="นามสกุล" name="surname">
                </div>
                <div class="role">
                    <p><strong>role</strong></p>
                    <input type="text" placeholder="ตำแหน่ง" name="position">
                </div>
                <div class="salaly">
                    <p><strong>เงินเดือน</strong></p>
                    <input type="text" placeholder="เงินเดือน" name="salary">
                </div>
                <div class="btn-box">
                    <button type="submit">เพิ่มพนักงาน</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>