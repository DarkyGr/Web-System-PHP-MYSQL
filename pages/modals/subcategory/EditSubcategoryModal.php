<!-- ========= | modal | ============-->
<div class="modal fade text-xs-left" id="edit_subcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1"><i class="icon-road2"></i> Edit Subcategory</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="edit_subcategory_id">
                <div class="form-group">
                    <label for="edit_subcategory_name"> Subcategory name: </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" class="form-control" id="edit_subcategory_name" autofocus>
                        <div class="form-control-position"><i class="icon-bag"></i></div>
                    </div>
                </div>
                <div class="form-group">
					<label for="edit_corresponding_category"> Category: </label>
                    <div class="position-relative has-icon-left">
                        <select id="edit_corresponding_category" class="form-control"></select>
						<div class="form-control-position"><i class="icon-list"></i></div>						
                    </div>
                </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn red btn-outline-danger" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn green btn-outline-success" onclick="UpdateCategory();">Save</button>
			</div>
		</div>
	</div>
</div>
<!--==========================================-->