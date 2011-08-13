<?php

require_once('config.php');

$tasks = $tasks = Doctrine_Core::getTable('Task');
$lista = $tasks->findAll();


?>
<table>

<?php

foreach ($lista as $task) {
?>
   <tr>
        <td><?php echo $task->task ?> </td>
        <td><img src="delete.gif" id="<?php echo $task->id ?>" class="deletar" /></td>
   </tr>

<?php
}
?>

</table>



















