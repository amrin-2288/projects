<?php  
  include('session.php')  
?>  
  
<!DOCTYPE html>  
<html>  
<head>  
    <title>IMAGIX-USER</title>  
    <!-- Latest CSS which is minified and compiled -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <!-- References: https://github.com/fancyapps/fancyBox -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
  
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Playfair+Display&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Playfair+Display&family=Roboto+Condensed&display=swap');
    body
    {
        background-color:white;
    }
    ::-webkit-scrollbar {
    width: 2em;
} 
    .gallery  
    {  
        display: inline-block;  
        margin-top: 20px;  
    }  
    .close-icon{  
    border-radius: 50%;  
        position: absolute;  
        right: 5px;  
        top: -10px;  
        padding: 5px 8px;  
    }  
        .form-image-upload{  
            background: white none repeat scroll 0 0;  
            padding: 15px;
            margin-top:12px;
            padding-right:0px; 
        }
        strong{
    color:black;
    background-color:white;
}
.alert{
    background-color:white;
    text-align:center;
    border:none;
    margin-top:-20px;
    margin-bottom:-5px;
}
.text-center
{
    color:white;
    text-decoration:none;
    background-color:white;
    font-weight:500px;
}
.col-md-5
{
    font-size:large;
}
.thumbnail
{
    background-color:white;
}
.thumbnail:hover
{
    background-color:white;
}


li{
font-size:xx-large;

margin-right: 15px;
font-family: 'Times New Roman', Times, serif;
padding-top:15px;
}
nav{
    background-color:black;
    height:80px;
    margin-top:-18px;
    margin-left:30px;
}
#title
{
margin-top: 20px;
}
#usname
{
color: white;
margin-left: 600px;
font-size: medium;
font-family: 'Roboto Condensed', sans-serif;
letter-spacing:1px;
}
#logout
{
display: inline;
font-size:x-large;
color: black;
background-color: azure;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-family: 'Roboto Condensed', sans-serif;
width: 60px;
margin-left:10px;
letter-spacing:1px;
}
a
{
text-decoration:none;
color:black;
}
a:visited
{
text-decoration:none;
color:black;
}
a:hover
{
text-decoration:none;
color:white;
background-color:green;
}
#logout:hover
{
color:white;
background-color:green;
}
p
{
text-align: center;
color:black;
font-size:medium;
margin-top:10px;
}
#l1
{   
margin-left: 65px;
color: rgb(245, 3, 245);
margin-right: -5px;

}
#l2
{
color:blue;
margin-right: -5px;
}
#l3
{
color: rgb(7, 247, 7);
margin-right: -5px;
}
#l4
{
color:yellow;
margin-right: -5px;
}
#l5
{
color: orange;
margin-right: -5px;
}
#l6
{
color: red;
margin-right: -5px;
}
span{
    letter-spacing:5px;
}  
    </style>  
</head>  
<body>
<nav>
  <ul>
    <div id="title">
   <li><span id="l1">I</span><span id="l2">M</span><span id="l3">A</span><span id="l4">G</span><span id="l5">I</span><span id="l6">X</span><span id="usname"><?php echo $loggedin_session;?></span>
   <span id="logout"><a href="logout.php">LogOut</a></span></li>
   
   
</div>
</ul>
 </nav>
 <p>You are now logged in.<p>   
  
<div class="container">  
  
 
    <form action="upload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">  
  
        <?php if(!empty($_SESSION['error'])){ ?>  
            <div class="alert alert-danger">  
                <strong>Whoops!</strong> Our input faces some problems. <br><br>  
                <ul>  
                    <li><?php echo $_SESSION['error']; ?></li>  
                </ul>  
            </div>  
        <?php unset($_SESSION['error']); } ?>  
  
        <?php if(!empty($_SESSION['success'])){ ?>  
        <div class="alert alert-success alert-block">  
            <button type="button" class="close" data-dismiss="alert"></button>
                <strong><?php echo $_SESSION['success']; ?></strong>  
        </div>  
        <?php unset($_SESSION['success']); } ?>  
  
        <div class="row">  
            <div class="col-md-5">  
                <strong>Title:</strong>  
                <input type="text" name="title" class="form-control" placeholder="Title">  
            </div>  
            <div class="col-md-5">  
                <strong>Image:</strong>  
                <input type="file" name="image" class="form-control">  
            </div>  
            <div class="col-md-2">  
                <br/>  
                <button type="submit" class="btn btn-success">Upload</button>  
            </div>  
        </div>  
  
    </form>   
  
    <div class="row">  
    <div class='list-group gallery'>  
  
            <?php  
            require('db_config.php');  
  
            $sql = "SELECT * FROM `image_gallery` where userid='$loggedin_id'";  
            $images = $mysqli->query($sql);  
  
            while($image = $images->fetch_assoc()){  
  
            ?>  
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>  
                    <a class="thumbnail fancybox" rel="ligthbox" href="uploads/<?php echo $image['image'] ?>">  
                        <img class="img-responsive" alt="" src="uploads/<?php echo $image['image'] ?>" />  
                        <div class='text-center'>  
                            <h4 class='text-muted'><?php echo $image['title'] ?></h4>  
                        </div> <!-- text-center / end -->  
                    </a>  
                    <form action="Delete.php" method="POST">  
                    <input type="hidden" name="id" value="<?php echo $image['id'] ?>">  
                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>  
                    </form>  
                </div> <!-- col-6 / end -->  
            <?php } ?>  
  
        </div> <!-- list-group / end -->  
    </div> <!-- row / end -->  
</div> <!-- container / end -->  
  
</body>  
  
<script type="text/javascript">  
    $(document).ready(function(){  
        $(".fancybox").fancybox({  
            openEffect: "",  
            closeEffect: "none"  
        });  
    });  
</script>  
</html>  