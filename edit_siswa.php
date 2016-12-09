 <?php
	
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	if(!isset($_POST['Kirim'])){
		exit('Access Forbiden');
	}
	$siswa = new Siswa();

	if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.jpg')){
		exit('Error Upload File');
	}
	
	//print_r($_FILES);
	
	$data['input_name'] = $_POST['in_name'];
	$data['input_email'] = $_POST['in_email'];
	$data['input_nationality'] = $_POST['in_nation'];
	$data['foto'] = 'img/'.$_POST['in_nis'].'.jpg';
	
	$siswa->updateSiswa($_POST['in_nis'], $data);
	
	echo "Data siswa Berhasil diupdate<br />";
	echo "<a href='u_siswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>";
	?>