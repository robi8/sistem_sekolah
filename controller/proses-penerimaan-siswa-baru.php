<?php
	switch($_GET['action'])
	{
		default:
			default_proses_penerimaan_siswa_baru_platform();
		break;

		case "form-add-proses-penerimaan-siswa-baru":
			form_add_proses_penerimaan_siswa_baru();
		break;

		case "add-proses-penerimaan-siswa-baru":
			$id_proses_penerimaan_siswa_baru = sequence("proses_penerimaan_siswa_baru", "id_proses_penerimaan_siswa_baru");
			
			mysqli_query($link,"INSERT INTO `proses_penerimaan_siswa_baru`(`id_proses_penerimaan_siswa_baru`, `proses`, `kode_awalan`, `jumlah`, `keterangan`, `status`, `proses_penerimaan_siswa_baru_update`, `user_id`, `proses_penerimaan_siswa_baru_active`) VALUES ('".$id_proses_penerimaan_siswa_baru."','".$_POST['nama_proses']."','".$_POST['kode_awalan']."','".$_POST['jumlah']."','".$_POST['keterangan']."','','".$today."','','1')");
			
			header("location:../view/home.php?page=proses-penerimaan-siswa-baru");
		break;

		case "form-edit-proses-penerimaan-siswa-baru":
			form_edit_proses_penerimaan_siswa_baru();
		break;

		case "edit-proses-penerimaan-siswa-baru":
			
			mysqli_query($link,"UPDATE proses_penerimaan_siswa_baru SET proses = '".$_POST['nama_proses']."', kode_awalan = '".$_POST['kode_awalan']."', keterangan = '".$_POST['keterangan']."'  WHERE id_proses_penerimaan_siswa_baru = '".$_POST['id_proses_penerimaan_siswa_baru']."'");
			
			header("location:../view/home.php?page=proses-penerimaan-siswa-baru");
		break;

		case "delete-proses-penerimaan-siswa-baru":
			
			mysqli_query($link,"UPDATE proses_penerimaan_siswa_baru SET proses_penerimaan_siswa_baru_active = '0'  WHERE id_proses_penerimaan_siswa_baru = '".$_GET['id_proses_penerimaan_siswa_baru']."'");
			
			header("location:../view/home.php?page=proses-penerimaan-siswa-baru");
		break;
		
	}
?>