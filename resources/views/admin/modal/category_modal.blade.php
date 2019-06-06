<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="CategoryModalLabel"><i class="fa fa-pencil" aria-hidden="true"></i>@lang('sample.create_category')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xs-12">    
                <div class="form-group">
                    <label for="name">@lang('sample.name')</label>
                    <input type="text" name="name" id="categoryModalId" class="form-control" placeholder="@lang('sample.name')" required>
                </div> 
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="close_modal">@lang('sample.close')</button>
            <button type="button" class="btn btn-primary" id="save_change">@lang('sample.save_changes')</button>
        </div>
    </div>
</div>