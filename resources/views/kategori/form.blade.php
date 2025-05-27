<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
  <div class="modal-dialog" role="document">
    <form action = "{{route('kategori.store')}}" method="post" class="form-horizontal">
        @csrf 
        @method('post')
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" ></h4>
        </div>
        <div class="modal-body">
            <div class="form-group row">
              <label for="nama_kategori" class="col-md-4 col-md-offset-1 control-label">Kategori</label>
              <div class="col-md-6">
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
              <span class="help-block with-errors"></span>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type ="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
          <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Close</button>
        </div>
      </div>
    </form>
  </div>
</div>