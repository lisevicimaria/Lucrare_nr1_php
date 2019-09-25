<?
$result = mysqli_query($connection, "SELECT * FROM angajati WHERE id = {$_GET['id']}");
$angajat = mysqli_fetch_assoc($result);

if(!empty($_POST['name'])) {


    $result = mysqli_query($connection, "SELECT * FROM angajati");

    if(mysqli_query($connection, "UPDATE angajati SET name = '{$_POST['name']}', department = {$_POST['department']}, phone = {$_POST['telefon']} WHERE id = {$_GET['id']}")) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
} else {
    ?>
    <form action="" method="post">
        Name <input type="text" name="name" value="<?= $angajat['name']?>">
        <br>
        Department <br>
        <select name="department">
            <? for($i = 0; $i < 100; $i++){?>
                <option value="<?=$i;?>" <?= $i == $angajat['department']?'selected':'';?>><?=$i;?></option>
            <? }?>
        </select>
        <br>
        <input type="submit">
        <br>
        Telefon <input type="number" name="telefon" value="<?= $angajat['telefon']?>">
    </form>

<?}?>