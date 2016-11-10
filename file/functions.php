<?php
$dir = 'catalog';
$vowels = array(".", "..", "/", "//", "\\", ";", ":");
$filename = $_FILES['filename']['name'];


//======================== удаление файл =======
if (($_GET['action'] == 'del') AND (isset($_GET['file_name']))) {
    function del_files($dir)
    {
        if(unlink($dir . "/" . $_GET['file_name'])) ;?>

        <h3>файл удален</h3>
        <meta http-equiv="refresh" content="2; url=index.php">
        <?
    }

    del_files($dir);
}

//======================== добавление файла =======
if (($_GET['action'] == "add") AND (isset($_FILES['filename']['name']))) {

    $type = $_FILES['filename']['type'];
    $size = $_FILES['filename']['size'];
    if (($type != "image/jpg") AND ($type != "image/jpeg") AND ($type != "text/plain"))
        echo "<h3>Запрещённая закачка</h3>";
    ?>
    <meta http-equiv="refresh" content="2; url=index.php"><?
    exit;
    if ($size > 502400)
        echo "<h3>Недопустимый размер файла</h3>";
    ?>
    <meta http-equiv="refresh" content="2; url=index.php"><?
    exit;



    function add_files($dir, $filename)
    {
        $uploadfile = $dir . "/" . basename($_FILES['filename']['name']);

// Копируем файл из каталога для временного хранения файлов:
        if (copy($_FILES['filename']['tmp_name'], $uploadfile)) {
            echo "<h3>Файл успешно загружен на сервер</h3>";
        } else {
            echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
            exit;
        }
        ?>
        <meta http-equiv="refresh" content="2; url=index.php">
        <?
    }

    add_files($dir, $filename);
}

//======================== переименование файл =======

if (($_POST['action'] == 'rename') AND (isset($_POST['new_name'])) AND (isset($_POST['old_file']))) {

    $_POST['new_name'] = str_replace($vowels, "", $_POST['new_name']);
    function rename_files($dir)
    {
        $efile = explode(".", $_POST['old_file']);
        rename($dir . "/" . $_POST['old_file'], $dir . "/" . $_POST['new_name'] . "." . $efile[1]);
    }

    rename_files($dir, $_POST['new_name'], $_POST['old_file']);
    ?>
    <meta http-equiv="refresh" content="2; url=index.php">
    <?
}


// ==================== список файлов
function list_files($dir)
{
    $files = scandir($dir);
    ?>
    <ol>
        <?
        foreach ($files as $fls) {
            if (($fls != ".") AND ($fls != "..")) {
                echo "<li>";
                $efile = explode(".", $fls);

                if (($efile[1] == "jpg") OR ($efile[1] == "jpeg") OR ($efile[1] == "gif") OR ($efile[1] == "png")) {
                    ?>
                    <img src="<? echo $dir . '/' . $fls; ?>" alt="" height="50">
                    <?
                }else{?>
                    <img src="icotxt.png" alt="" height="50">
                <?}
echo  "<span style=\"margin-left:70px;\">".$fls."</span>
<span style=\"float:right;\">
<a href=\"?action=view&file_name=" . $fls . "\"> <img src=\"view.png\" height=\"50\"> </a>
<a href=\"?action=rename&file_name=" . $fls . "\"> <img src=\"rename.png\" height=\"50\"> </a>
<a href=\"?action=del&file_name=" . $fls . "\"> <img src=\"del.png\" height=\"50\" onclick =\"return confirm('Удалить?')\";> </a>
</span>
</li>";

            }
        } ?>
    </ol>
    <?
}


?>