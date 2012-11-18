<script type="text/javascript">
$(document).ready(function() {
	$('.edit').editable('/LittleTools/otrs-prioriteit/index.php/ticket/update_priority', {
  		indicator : 'Saving...',
		tooltip   : 'Click to edit...',
	        id   : 'id',
	        name : 'prioriteit'
	     });
 });
</script>

<table>
<thead>
	<td>id</td>
	<td>tn</td>
	<td>title</td>
	<td>field</td>
	<td>value</td>
</thead>
<tbody>
<?php foreach ($tickets as $ticket): ?>
<tr>
    <td width="10%"><?php echo $ticket['id'] ?></td>
    <td width="20%"><?php echo $ticket['tn'] ?></td>
    <td width="50%"><?php echo $ticket['title'] ?></td>
    <td width="10%"><?php echo $ticket['label'] ?></td>
    <td width="10%"><div class="edit" id="<?php echo $ticket['id'] ?>"><?php echo $ticket['value_text'] ?></div></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
