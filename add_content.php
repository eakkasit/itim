<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Content</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    <!-- TinyMCE FileManager -->
    <script src="./tinymce/static/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            menubar:false,
            statusbar: true,
            height : "500",
            selector: "textarea",theme: "modern",
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar1: "bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | styleselect",
            toolbar2: "undo redo | responsivefilemanager | link unlink | image | forecolor backcolor  | preview code ",
            image_advtab: false ,
            external_filemanager_path:"tinymce/static/tinymce/js/tinymce/filemanager/",
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
        });
    </script>
    <!-- TinyMCE FileManager -->
    </meta>
</head>
<body>
<form>
    <div class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <label class="label control-label col-md-6">ชื่อเรื่อง</label>
                <div class="col-md-6">
                    <input type="text" name="title" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
            </div>
        </div>
    </div>

</form>
</body>
</html>