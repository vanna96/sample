<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ProductModalLabel" style="color:red">@lang('sample.delete')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color:red">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @lang('sample.you_sure')
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('sample.no')</button>
            <a href="" id="deleteItem">
                <button type="button" class="btn btn-primary">@lang('sample.yes')</button>
            </a>
        </div>
    </div>
</div>