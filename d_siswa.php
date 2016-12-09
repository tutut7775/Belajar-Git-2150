<?php

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	$id=$_GET['a'];
	if(! is_numeric($id)){
		exit('Access Forbiden');
	}
	
	$siswa = new Siswa();
	$data=$siswa->readSiswa($id);
	
	if(empty($data)){
		exit('Data Not Found');
	}
	
	$dt = $data[0];
	//print_r($dt);
?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>

	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>

	</tr>
	<?php endforeach ?>

</table>