<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Example</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.js"></script>

    <style>
        #div2{
            display: none;
        }
    </style>




</head>
<body>

<section class="container">
    <button>Click Me</button>
    <h1>Md. Shahlal Hossain</h1>
</section>


<section class="container" id="div2">
    <div class="well">
        <h1>Hello World</h1>
        <p>
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
            I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph I am a Paragraph
        </p>
    </div>
</section>

    <script type="text/javascript">
        $(document).ready(function(){
            $('button').click(function(){
                $('h1').addClass("well");
                $('#div2').show();
            });
        });
    </script>


</body>
</html>