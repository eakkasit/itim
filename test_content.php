<?php
require ('connect.php');
header('Content-type: text/html; charset=utf-8');
$sql = "select * from tim_content WHERE id = '".$_GET['id']."'";
$query = mysql_query($sql);
$rs = mysql_fetch_assoc($query);
//echo "<pre>";
//print_r($rs);
//echo "</pre>";
$title = $rs['title'];
$detail = $rs['content'];

?>
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

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h4>Header</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="content">
                <div class="title">
                    <center>
                        <?php
                            echo $title;
                        ?>
                    </center>

                </div>
                <div class="content">
                    <?php
                        echo $detail;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
