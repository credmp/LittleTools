<table>
<thead>
    <td>id</td>
    <td>name</td>
    <td>name</td>
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
