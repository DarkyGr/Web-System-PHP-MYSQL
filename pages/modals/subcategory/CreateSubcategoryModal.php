<!-- ========= | modal | ============-->
<div class="modal fade text-xs-left" id="create_subcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1"><i class="icon-road2"></i> New subcategory</h4>
			</div>
			<div class="modal-body">
                <div class="form-group">
                    <label for="subcategory_name"> Subcategory name: </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" placeholder="Type the name of the subcategory" class="form-control" id="subcategory_name" autofocus>
                        <div class="form-control-position"><i class="icon-bag"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subcategory_description"> Category: </label>
                    <div class="position-relative has-icon-left">
                        <select id="corresponding_category" class="form-control">
							<div class="form-control-position"><i class="icon-bag"></i></div>
						</select>
                    </div>
                </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn red btn-outline-danger" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn green btn-outline-success" onclick="NewSubcategory();">Save</button>
			</div>
		</div>
	</div>
</div>
<!--==========================================-->