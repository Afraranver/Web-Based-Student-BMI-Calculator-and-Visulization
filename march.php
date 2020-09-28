<table border="1" cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th> March </th>
		
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		$result = $db->prepare("SELECT * FROM mar_campaign ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['March']; ?></td>

	</tr>
	<?php
		}
	?>
</tbody>
</table>