<?php
	
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	$siswa = new Siswa();
	$data=$siswa->readAllSiswa();
	
	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		<th>DETAIL</th>
		<th>ACTION</th>
		<th>DELETE</th>
		<th>TAMBAH</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>
		<td><a href="d_siswa.php?a=<?php echo $a['id_siswa'] ?>">
		Detail
		</a>
		</td>
		<td><a href="u_siswa.php?a=<?php echo $a['id_siswa'] ?>">
		Edit
		</a>
		</td>
		<td><a href="delsiswa.php?a=<?php echo $a['id_siswa'] ?>">
		Delete
		</a>
		</td>
		<td><a href="add_siswa.php?a=<?php echo $a['id_siswa'] ?>">
		Tambah
		</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>