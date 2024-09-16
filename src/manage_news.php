<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . "/../lib/util_var.php";
require_once __DIR__ . "/../config/config_hd.php";
require_once __DIR__ . "/../config/configuration.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
</head>

<body class="bg-white w-full h-full flex flex-col">
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <?php require_once __DIR__ . "/../template/main_menu.php"; ?>
            <div class="flex flex-col w-full h-screen px-10 py-8 gap-y-5">
                <?php
                if (isset($_GET['id'])) {
                    echo "NEWS ID :" . htmlspecialchars($_GET['id']);
                } else {
                    echo "ไม่มีการส่งค่า ID";
                }
                ?>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>
    </div>
</body>

</html>
<?php ?>