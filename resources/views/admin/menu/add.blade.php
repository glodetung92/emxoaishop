@extends('admin.main')

@section('head')
    {{-- CKeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@endsection

@section('content')
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="menu" class="form-control" id="menu" placeholder="Enter name">
                  </div>

                  <div class="form-group">
                    <label>Category Parent</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Parent Category</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" id="editor" class="form-control"></textarea>
                  </div>

                 <div class="form-group">
                    <label>Active</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" value="1" id="active" name="active" checked="">
                        <label for="active" class="custom-control-label">Yes</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" value="0" id="no_active" name="active">
                        <label for="noactive" class="custom-control-label">No</label>
                    </div>

                  </div>

                </div>


                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </div>
                @csrf
            </form>
@endsection

@section('footer')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


@endsection
