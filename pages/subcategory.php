<!-- ============== | head | =================-->
<?php  
session_start();
if (isset($_SESSION["user"])) {
	# code...
include "layouts/head.php";     ?>
<!--==========================================-->

<!-- =========== | body | ===============-->
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Subcategories</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../pages/welcome.php">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="">Products</a></li>
						<li class="breadcrumb-item active"><a href="">Subcategories</a></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="content-body">
			<section id="basic-form-layouts">
				<div class="row match-height">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title" id="basic-layout-form">
									<button class="btn btn-sm btn-success" id="btn_new_subcategory" data-toggle="modal" data-target="#create_subcategory">New subcategory</button>
								</h4>
								<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
										<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="card-body collapse in">
								<div class="card-block">
									<div class="table-responsive">
										<table id="table_subcategory" class="table table-bordered table-sm">
											<thead>
												<tr>
													<th width="5%">Actions</th>
													<th width="5%">ID</th>
													<th width="30%">Name</th>
													<th width="50%">Category</th>
													<th width="10%">Status</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
											<tfoot>
												<tr>
													<th width="5%">Actions</th>
													<th width="5%">ID</th>
													<th width="30%">Name</th>
													<th width="50%">Category</th>
													<th width="10%">Status</th>
												</tr>
											</tfoot>
										</table>
                    				</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
<!--==========================================-->

<!-- ========= | modals | ============-->
<?php  include "modals/subcategory/CreateSubcategoryModal.php";
	include "modals/subcategory/EditSubcategoryModal.php";?>
<!--==========================================-->

<!-- ========= | scripts robust | ============-->
<?php  include "layouts/main_scripts.php"; ?>
<!--==========================================-->

<!-- ========= | custom scripts | ============-->
<script src="../app-assets/plugins/DataTables/datatables.min.js"></script>
<script src="../app-assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
<script src="../app-assets/plugins/Toastr/toastr.min.js"></script>
<script src="../assets/js/Subcategory.js"></script>
<!--==========================================-->

<!-- ============= | footer | ================-->
<?php  include "layouts/footer.php";      
}else {
	header("location:../");
}?>
<!--==========================================-->