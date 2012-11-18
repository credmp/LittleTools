<script type="text/javascript">
$(document).ready(function() 
    { 
            $("#myTable").tablesorter( {sortList: [[4,1]]} ); 
        } 
);  
</script>



<h1>Queues</h1>

	<div id="body">
<table id="myTable" class="tablesorter">
<thead>
    <th>id</th>
    <th>name</th>
    <th>name</th>
</thead>
<tbody>
<?php foreach ($queue as $news_item): ?>
<tr>
    <td><?php echo $news_item['id'] ?></td>
    <td><?php echo $news_item['name'] ?></td>
    <td><a href="ticket/queue/<?php echo $news_item['name'] ?>">View queue</a></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
