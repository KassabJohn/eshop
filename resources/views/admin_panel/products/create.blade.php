@extends('admin_panel.adminLayout') @section('content')

    <div class="m-5">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">⬅
                                <a style="color:red;" href="{{route('admin.products')}}">
                                    Back to List</a>
                                <br>
                                <br>
                                <h4 >Create product</h4>
                                <br>
                                <br>
                                <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
                                <br>
                                <div id="empty_image"> </div>
                                <form class="forms-sample" method="post"  id="product_form">
                                    @csrf


                                    <input id="inp_img" name="img" type="hidden" value="">
                                    <br><br>
                                    <div id="for_extension_error"></div>
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" id="Name" name="Name"  value="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="Description">Product Description</label>
                                        <textarea type="textarea" class="form-control" maxlength="60" id="Description" name="Description"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="Category">Category <label style="color:gray;">(click to choose)</label></label>
                                        <select class="form-control form-control-md" id="Category" name="Category">
                                            @php foreach($catlist->all() as $cat) {
                                                echo "<option value=".$cat->id." >".$cat->name." </option>"; $select_attribute=''; } @endphp
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label  >Product Price</label>
                                        <input type="text" class="form-control" name="Price" id="Price" value="">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Product Discounted Price</label>
                                        <input type="text" class="form-control" id="Discounted_Price"  name="Discounted_Price" value="">
                                    </div>
                                    <br>
                                    <br>
                                    <input type="submit" name="saveButton" class="btn btn-success mr-2" id="saveButton" value="Create"  />
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>

        function fileChange(e) {

            document.getElementById('inp_img').value = '';

            for (var i = 0; i < e.target.files.length; i++) {

                var file = e.target.files[i];

                if (file.type == "image/jpeg" || file.type == "image/png") {

                    var reader = new FileReader();
                    reader.onload = function(readerEvent) {

                        var image = new Image();
                        image.onload = function(imageEvent) {

                            var max_size = 600;
                            var w = image.width;
                            var h = image.height;

                            if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                            } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }

                            var canvas = document.createElement('canvas');
                            canvas.width = w;
                            canvas.height = h;
                            canvas.getContext('2d').drawImage(image, 0, 0, w, h);
                            if (file.type == "image/jpeg") {
                                var dataURL = canvas.toDataURL("image/jpeg", 1.0);
                            } else {
                                var dataURL = canvas.toDataURL("image/png");
                            }
                            document.getElementById('inp_img').value += dataURL + '|';
                        }
                        image.src = readerEvent.target.result;
                    }
                    reader.readAsDataURL(file);

                    readURL(this);
                } else {
                    document.getElementById('inp_files').value = '';
                    alert('Please only select images in JPG or PNG format.');
                    return false;
                }
            }

        }

        document.getElementById('inp_files').addEventListener('change', fileChange, false);
    </script>

@endsection
