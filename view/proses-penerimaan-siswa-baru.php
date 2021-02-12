<?php
	function default_proses_penerimaan_siswa_baru_platform()
	{
		include('../config/connection.php');
?>
	<div class="page-container">
		<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Proses Penerimaan Siswa Baru</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">PSB</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Penerimaan Siswa Baru</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-body ">
                                	<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="home.php?page=proses-penerimaan-siswa-baru&action=form-add-proses-penerimaan-siswa-baru" id="addRow"
													class="btn btn-info">
														Tambah Proses <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</a>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as
																PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i>
																Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
                                    <div class="table-scrollable">
                                        <table id="example1" class="display" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Proses</th>
                                                    <th>Kode Awalan</th>
                                                    <th>Jumlah</th>
                                                    <th>Keterangan</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            	$number = 1;
                                            	$query = mysqli_query($link,"SELECT * FROM proses_penerimaan_siswa_baru WHERE proses_penerimaan_siswa_baru_active = '1'");
                                            	while($fetch_array = mysqli_fetch_array($query))
                                            	{
                                            ?>
                                                <tr>
                                                    <td><?php echo $number ?></td>
                                                    <td><?php echo $fetch_array['proses'] ?></td>
                                                    <td><?php echo $fetch_array['kode_awalan'] ?></td>
                                                    <td><?php echo $fetch_array['jumlah'] ?></td>
                                                    <td><?php echo $fetch_array['keterangan'] ?></td>
                                                    <td></td>
                                                    <td>
                                                    	<a href="home.php?page=proses-penerimaan-siswa-baru&action=form-edit-proses-penerimaan-siswa-baru&id_proses_penerimaan_siswa_baru=<?php echo $fetch_array['id_proses_penerimaan_siswa_baru'] ?>">	
                                                    		<button type="button"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary">Ubah</button> </a>

														<a href="home.php?page=proses-penerimaan-siswa-baru&action=delete-proses-penerimaan-siswa-baru&id_proses_penerimaan_siswa_baru=<?php echo $fetch_array['id_proses_penerimaan_siswa_baru'] ?>">
															<button type="button"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-danger">Hapus</button> </a>
													</td>
                                                </tr>
                                            <?php
                                            		$number++;
                                            	}
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	}
	function form_add_proses_penerimaan_siswa_baru()
	{
?>
		<div class="page-container">	
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Proses Penerimaan Siswa Baru</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">PSB</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Proses Penerimaan Siswa Baru</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<form method="POST" action="home.php?page=proses-penerimaan-siswa-baru&action=add-proses-penerimaan-siswa-baru">
									<div class="card-body row">
										<div class="col-lg-12 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="departemen">
												<label class="mdl-textfield__label">Departemen</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="nama_proses" name="nama_proses">
												<label class="mdl-textfield__label">Nama Proses</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="kode_awalan" name="kode_awalan">
												<label class="mdl-textfield__label">Kode Awalan</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<textarea class="mdl-textfield__input" rows="4" id="Keterangan" name="Keterangan"></textarea>
												<label class="mdl-textfield__label" for="text7">Keterangan</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20 text-center">
											<button type="submit"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Simpan</button>
											<button type="button"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Batal</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	}
	function form_edit_proses_penerimaan_siswa_baru()
	{
		include('../config/connection.php');

		$fetch_array = mysqli_fetch_array(mysqli_query($link,"SELECT * FROM proses_penerimaan_siswa_baru WHERE id_proses_penerimaan_siswa_baru = '".$_GET['id_proses_penerimaan_siswa_baru']."'"));
?>
		<div class="page-container">	
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Proses Penerimaan Siswa Baru</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">PSB</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Proses Penerimaan Siswa Baru</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<form method="POST" action="home.php?page=proses-penerimaan-siswa-baru&action=edit-proses-penerimaan-siswa-baru">
									<input type="hidden" name="id_proses_penerimaan_siswa_baru" value="<?php echo $fetch_array['id_proses_penerimaan_siswa_baru'] ?>" />
									<div class="card-body row">
										<div class="col-lg-12 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="departemen" value="<?php echo $fetch_array['departemen'] ?>">
												<label class="mdl-textfield__label">Departemen</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="nama_proses" name="nama_proses" value="<?php echo $fetch_array['proses'] ?>">
												<label class="mdl-textfield__label">Nama Proses</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="kode_awalan" name="kode_awalan" value="<?php echo $fetch_array['kode_awalan'] ?>">
												<label class="mdl-textfield__label">Kode Awalan</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<textarea class="mdl-textfield__input" rows="4" id="Keterangan" name="Keterangan"><?php echo $fetch_array['keterangan'] ?></textarea>
												<label class="mdl-textfield__label" for="text7">Keterangan</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20 text-center">
											<button type="submit"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Simpan</button>
											<button type="button"
												class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Batal</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	}
?>