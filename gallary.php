<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Example</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.js"></script>

    <style>
        .sized{
            width: 100px;
            float: left;
        }
    </style>




</head>
<body>
<br><br><br>
<section class="container">
    <img class="img-thumbnail sized" src="image/1.jpg">
    <img class="img-thumbnail sized" src="image/2.jpg">
    <img class="img-thumbnail sized" src="image/3.jpg">
    <img class="img-thumbnail sized" src="image/4.jpg">
    <img class="img-thumbnail sized" src="image/5.jpg">
    <img class="img-thumbnail sized" src="image/6.jpg">
    <img class="img-thumbnail sized" src="image/7.jpg">
    <img class="img-thumbnail sized" src="image/8.jpg">
    <img class="img-thumbnail sized" src="image/9.jpg">
    <img class="img-thumbnail sized" src="image/10.jpg">
    <button id="button">Next</button>
</section>
<hr>

<img id="img" class="img-thumbnail" src="image/1.jpg">

<script type="text/javascript">
    $(document).ready(function(){
        var i = 1;
        $('#button').click(function(){
            setInterval(function(){
            i++;
          var url = 'image/'+i+'.jpg';
         $('#img').attr('src',url);
          if(i == 10){i = 0}
            }, 1500);
      });
    })
</script>

</body>
</html>