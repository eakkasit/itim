<?php
require("../connect.php");
if ($_POST) {

    $sql_save = "INSERT INTO `tim_content` (`title`, `content`) VALUES ('".$_POST['subject']."', '".$_POST['detail']."')";
    $query_save = mysql_query($sql_save);
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-envelope"></i>

                        <h3 class="box-title">Add Content</h3>
                        <!-- tools box -->
                        <!--<div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>-->
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form action="" method="post">
<!--                            <div class="form-group">-->
<!--                                <input type="text" class="form-control" name="title" placeholder="Email to:">-->
<!--                            </div>-->
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="ชื่อเรื่อง">
                            </div>
                            <div>
                            <textarea name="detail" class="textarea" placeholder="Message" style="width: 100%; font-size: 14px;  border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                            <div class="box-footer clearfix">
                                <input type="submit" class="pull-right btn btn-default" id="sendEmail">Save
                                <i class="fa fa-arrow-circle-right"></i></input>
                            </div>
                        </form>
                    </div>

                </div>

            </section>
            <!-- /.Left col -->

        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- TinyMCE FileManager -->
<script src="../tinymce/static/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        menubar: false,
        statusbar: true,
        height: "500",
        selector: "textarea", theme: "modern",
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
        image_advtab: false,
        external_filemanager_path: "../tinymce/static/tinymce/js/tinymce/filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "filemanager/plugin.min.js"}
    });
</script>
<!-- TinyMCE FileManager -->