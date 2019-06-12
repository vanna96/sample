<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="" method="POST" id="deleteItem">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                
                <button type="submit" class="btn btn-primary">@lang('sample.yes')</button>
                
            </div>
    </form>
    </div>
</div>