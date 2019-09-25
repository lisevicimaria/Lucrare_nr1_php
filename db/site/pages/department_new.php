<?
if(!empty($_POST['name'])) {


    $result = mysqli_query($connection, "SELECT * FROM departments");

    if(mysqli_query($connection, "INSERT INTO departments SET name = '{$_POST['name']}'}")) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
} else {
    ?>
    <form action="" method="post">
        Name <input type="text" name="name">
        <input type="submit">
    </form>

<?}?>