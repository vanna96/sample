<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ProductModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{url('product/store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="category">Category</label>
                        <select class="form-control" name="category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" step="any" name="price" value="{{ old('price') }}" maxlength = 10 required>
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="5" required>{{ old('description') }}</textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>