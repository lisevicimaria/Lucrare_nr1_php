<?
if(!empty($_POST['name'])) {


    $result = mysqli_query($connection, "SELECT * FROM angajati");

    //mysqli_query($connection, "INSERT INTO students (name, age) VALUES ('{$_POST['name']}', {$_POST['age']})");
    if(mysqli_query($connection, "INSERT INTO angajati SET name = '{$_POST['name']}', department = {$_POST['department']}")) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
} else {
    ?>
    <form action="" method="post">
        Name <input type="text" name="name">
        <br>
        Department <br>
        <select name="department">
            <? for($i = 0; $i < 100; $i++){?>
                <option value="<?=$i;?>"><?=$i;?></option>
            <? }?>
        </select>
        <br>
        <input type="submit">
    </form>

<?}?>