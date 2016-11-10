<?

if ($_GET['action'] == "rename") {

    $nfile = explode(".",$_GET['file_name']);
    ?>
    <form action="index.php" method="post" enctype='multipart/form-data'>
        <h4>Вы не можете изменить расширение файла</h4>
        <input type="hidden" name="old_file" value="<? echo $_GET['file_name']; ?>">
        <input id="name" name="new_name" type="text" placeholder="new name" Value="<? echo $nfile[0]; ?>">
        <input type="submit" name="action" value="rename"/>
        <a href="index.php">cancel</a>
    </form>
    <?
} else {

    ?>
    <form action="index.php?action=add" method="post" enctype='multipart/form-data'>
        <h4>вы можете попробоват загрузить файлы TXT JPG JPEG PNG и GIF</h4>
        <input type="file" name="filename"/>
        <input type="submit"  value="upload"/>
    </form>
    <?
}
?>