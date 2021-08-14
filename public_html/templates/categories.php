<!-- Modal -->
<div class="modal fade" id="form_categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_category" onsubmit="return false">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name"
                            id="category_name" placeholder="Category Name">
                        <small id="cat_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>Parent category</label>
                        <select class="form-control" name="parent_cat" id="parent_cat">
                            <option value="0">Root</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>