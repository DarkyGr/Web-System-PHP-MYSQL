<!-- ========= | modal | ============-->
<div class="modal fade text-xs-left" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1"><i class="icon-road2"></i> Edit category</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="edit_category_id">
                <div class="form-group">
                    <label for="edit_category_name"> Category name: </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" placeholder="Type the name of the category" class="form-control" id="edit_category_name" autofocus>
                        <div class="form-control-position"><i class="icon-bag"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_category_description"> Description: </label>
                    <div class="position-relative has-icon-left">
                        <textarea type="text" rows="7" placeholder="Type a short description" class="form-control" id="edit_category_description"></textarea>
                        <div class="form-control-position"><i class="icon-file2"></i></div>
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