{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Image Uploading for Campaing</h3>
        <form action="{{ url('/uploadfile')}}"  accept="image/*" method="post" enctype="multipart/form-data">
           @csrf
            <div class="input-form">
                <label for="image">Image Upload</label>
                <input type="file" name="image">
            </div>
            <div class="input-form">
                <input type="submit" name="upload" value="upload">
            </div>
        </form>
    </div>
</body>
</html> --}}