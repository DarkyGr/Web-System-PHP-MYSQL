<!-- ============== | head | =================-->
<?php  include "layouts/head.php";     ?>
<!--==========================================-->

<!-- =========== | contenido | ===============-->
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Categorias</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main">Dashboard</a></li>
						<li class="breadcrumb-item"><a >Productos</a></li>
						<li class="breadcrumb-item active"><a href="#">Categorias</a></li>
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
								<h4 class="card-title" id="basic-layout-form"><button class="btn btn-sm btn-success">Nueva categoria</button></h4>
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
										<table class="table table-bordered table-sm">
											<thead>
												<tr>
													<th>#</th>
													<th>Nombre</th>
													<th>Descripcion</th>
													<th>Estado</th>
													<th>#</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
											<tfoot>
												<tr>
													<th>#</th>
													<th>Nombre</th>
													<th>Descripcion</th>
													<th>Estado</th>
													<th>#</th>
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

<!--==========================================-->

<!-- ========= | scripts robust | ============-->
<?php  include "layouts/main_scripts.php"; ?>
<!--==========================================-->

<!-- ============= | footer | ================-->
<?php  include "layouts/footer.php";      ?>
<!--==========================================-->