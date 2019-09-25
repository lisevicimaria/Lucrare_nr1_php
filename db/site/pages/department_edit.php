<?
$result = mysqli_query($connection, "SELECT * FROM departments WHERE id = {$_GET['id']}");
$angajat = mysqli_fetch_assoc($result);

if(!empty($_POST['name'])) {


    $result = mysqli_query($connection, "SELECT * FROM departments");

    if(mysqli_query($connection, "UPDATE departments SET name = '{$_POST['name']}'} WHERE id = {$_GET['id']}")) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
} else {
    ?>
    <form action="" method="post">
        Name <input type="text" name="name" value="<?= $department['name']?>">
        <input type="submit">
    </form>

<?}?>