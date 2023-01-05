<?php 
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/supplier.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
		
	<?php include("menus.php"); ?> 
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-default rounded-0 shadow">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
							<h3 class="card-title">Senarai Pembekal</h3>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-end">
							<button type="button" name="add" id="addSupplier" data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-success btn-sm rounded-0"><i class="far fa-plus-square"></i> Tambah Pembekal</button>
						</div>
					</div>					   
					<div class="clear:both"></div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12 table-responsive">
							<table id="supplierList" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ID</th>										
										<th>Nama</th>
										<th>Telefon</th>
										<th>Alamat</th>
										<th>Status</th>										
										<th>Tindakan</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div id="supplierModal" class="modal fade">
        	<div class="modal-dialog modal-dialog-centered">
        			<div class="modal-content">
						<div class="modal-header">
							<h2><i>Tambah Pembekal</i></h2>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
        					<form method="post" id="supplierForm">
								<input type="hidden" name="supplier_id" id="supplier_id" />
								<input type="hidden" name="btn_action" id="btn_action" />
								<div class="mb-3">
									<label>Nama Pembekal</label>
									<input type="text" name="supplier_name" id="supplier_name" class="form-control rounded-0" required />
								</div>	
								<div class="mb-3">
									<label>Telefon</label>
									<input type="text" name="mobile" id="mobile" class="form-control rounded-0" required />
								</div>								
								<div class="mb-3">
									<label>Alamat</label>
									<textarea name="address" id="address" class="form-control rounded-0" rows="5" required></textarea>
								</div>
        					</form>
						</div>
						<div class="modal-footer">
							<button type="submit" name="action" id="action" class="btn btn-success rounded-0 btn-sm" value="addSupplier" form="supplierForm"/>Tambah</button>
							<button type="button" class="btn btn-default border rounded-0 btn-sm" data-bs-dismiss="modal">Tutup</button>
						</div>
					</div>
        	</div>
        </div>	
	</div>	
</div>	
<?php include('inc/footer.php');?>