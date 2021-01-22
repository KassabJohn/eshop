@extends('admin_panel.adminLayout') @section('content')

    <a style="color:green;" href="{{route('admin.products')}}">
        Back to List</a>
    <br>
    <br>
    <h4 >Create product</h4>
    <br>
    <img  id="imageHolder" src="" alt="add image" height="300" width="300"/>
    <br>
    <input  type="file" name="inp_files" id="inp_files" multiple="multiple" >
    <br>
    <div id="empty_image"> </div>
    <form method="post"  id="product_form">
        <div class="form-group">
        @csrf
        <input id="inp_img" name="img" type="hidden" value="">
        <br><br>
        <div>
            <label  >Product Name*</label>
            <input type="text" id="Name" name="Name"  value="">
        </div>
        <div>
            <label  for="Description">Product Description*</label>
            <textarea type="textarea" id="Description" name="Description"></textarea>
        </div>
        <div>
            <label for="Category">Category</label>
            <select id="Category" name="Category">
                @php foreach($catlist->all() as $cat) {
                echo "<option value=".$cat->id." >".$cat->name." </option>"; $select_attribute=''; } @endphp
            </select>
        </div>
        <div>
            <label  >Product Price*</label>
            <input type="text" name="Price" id="Price" value="">
        </div>
        <div>
            <label  >Product Discounted Price*</label>
            <input type="text" id="Discounted_Price"  name="Discounted_Price" value="">
        </div>
        </div>
        <input type="submit" name="saveButton" class="btn btn-success mr-2" id="saveButton" value="Create"  />
    </form>

    <script>

        function fileChange(e) {

            document.getElementById('inp_img').value = '';

            for (let i = 0; i < e.target.files.length; i++) {

                let file = e.target.files[i];

                if (file.type == "image/jpeg" || file.type == "image/png") {

                    let reader = new FileReader();
                    reader.onload = function(readerEvent) {

                        let image = new Image();
                        image.onload = function(imageEvent) {

                            let max_size = 600;
                            let w = image.width;
                            let h = image.height;

                            if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                            } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }

                            let canvas = document.createElement('canvas');
                            canvas.width = w;
                            canvas.height = h;
                            canvas.getContext('2d').drawImage(image, 0, 0, w, h);
                            if (file.type == "image/jpeg") {
                                let dataURL = canvas.toDataURL("image/jpeg", 1.0);
                            } else {
                                let dataURL = canvas.toDataURL("image/png");
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
