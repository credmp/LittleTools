<script type="text/javascript">
$(document).ready(function() {
	$('.edit').editable('/LittleTools/otrs-prioriteit/index.php/ticket/update_priority', {
  		indicator : 'Saving...',
		tooltip   : 'Click to edit...',
	        id   : 'id',
	        name : 'prioriteit'
	     });
});

$(document).ready(function() 
    { 
            $("#myTable").tablesorter( {sortList: [[4,1]]} ); 
        } 
);
</script>

<h1>Tickets</h1>
        
	<div id="body">
<a href="/LittleTools/otrs-prioriteit/index.php/queue">Back</a>
<table width="100%" id="myTable" class="tablesorter">
<thead>
	<th>id</th>
	<th>tn</th>
	<th>title</th>
	<th>field</th>
	<th>value</th>
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
</div>
