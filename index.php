<?php
header ('Content-type: text/html; charset=utf-8');
$JSON_Data = @json_decode(file_get_contents('https://tecvidya-php.herokuapp.com/api/usersList.php'), TRUE);
?>
<html>
	<head>
		<link rel="stylesheet" href="./css/bootstrap.min.css">
	</head>
	<body>
		<div class="table-responsive container-fluid">
			<h1>Listagem de Usuários</h1>
			<br>
			<table class="table table-hover">
				<tr>
					<th> # </th>
					<th> Name </th>
					<th> Following </th>
					<th> Ranking </th>
					<th> Photo </th>
				</tr>
				<?php
				foreach($JSON_Data as $item){
				?>
				<tr>
					<td><?=$item['user_id'];?></td>
					<td><?=$item['user_name'];?></td>
					<td align="center">
						<div class="checkbox">
					      <input type="checkbox" <?= ($item['isFollowing'] == true) ? "checked" : "";?> >
					 	</div>
					 </td>
					<td><?=$item['ranking'];?></td>
					<td><img width="10%" height="10%" class="img-responsive" alt="Responsive image" src="<?=$item['user_photo']; ?>"></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</body>
</html>