<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM departments WHERE id = {$_GET['id']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}

$result = mysqli_query($connection, "SELECT * FROM departments");
?>
<table border="1">
<? while($angajat = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $department['name']?></td>
	<td>
    <a href="?page=department_list&action=delete&id=<?= $department['id']?>" onclick="return confirm('Doriti sa stergeti inregistrarea?')">x</a>
    <a href="?page=department_edit&id=<?= $department['id']?>">m</a>
  </td>
</tr>
<? }?>