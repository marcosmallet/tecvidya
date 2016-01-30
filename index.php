<?php
header ('Content-type: text/html; charset=utf-8');
$JSON_Data = @json_decode(file_get_contents('https://tecvidya.herokuapp.com/api/usersList.php'), TRUE);
//$JSON_Data = @json_decode(file_get_contents('http://localhost/tecvidya/apis/usersList.php'), TRUE);
?>
<html>
<head>
</head>
<body>
<table border="1">
<tr>
<td> Photo </td>
<td> ID </td>
<td> Name </td>
<td> Following </td>
<td> Ranking </td>
</tr>
<?php
foreach($JSON_Data as $item){
?>
<tr>
<td><img width="25%" height="25%" src="<?=$item['user_photo']; ?>"></td>
<td><?=$item['user_id'];?></td>
<td><?=$item['user_name'];?></td>
<td><?=$item['isFollowing'];?></td>
<td><?=$item['ranking'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>