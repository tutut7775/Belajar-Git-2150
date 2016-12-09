<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$id = $_GET['a'];                                                                                                      

if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new siswa();
$data = $siswa->readsiswa($id);

$nation = new nationality();
$data_nation = $nation->readAllNationality();

if(empty($data)){
	exit('siswa is not found');
}

$dt = $data[0];

?>

<h1>Edit Data Siswa</h1>
<form action="edit_siswa.php" method="post" enctype="multipart/form-data">
	NIS:<br />
	<input type="text" value="<?php echo $dt['id_siswa']?>"
			name="in_nis" readonly="true"><br />
	Nama Lengkap:<br />
	<input type="text" value="<?php echo $dt['full_name']?>"
			name="in_name"><br />
	Email:<br />
	<input type="text" value="<?php echo $dt['email']?>"
			name="in_email"><br />
	Kewarganegaraan:<br />
	<select name="in_nation">
		<option value="">--pilih negara--</option>
		
		<?php foreach($data_nation as $n) : ?>
		 <?php  $s= ($dt['id_nationality']==$n['id_nationality'])?"selected":"" ?>
		 
		 <option value="<?php echo $n['id_nationality'];?>"<?php echo $s?>>
		 <?php echo $n['nationality']?>
		 </option>
		 <?php endforeach ?>
		  </select><br />
	Foto: <input type="file" name="in_foto">
	<br />
		<input type="submit" name="Kirim" value="Simpan"> 
</form>