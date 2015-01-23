<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Example</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.js"></script>

    <style>
        .test{
            font-size: 20px;
        }
    </style>




</head>
<body>


<section class="container">
<div>
    <h1>Hello World</h1>
    <h2>I am Heading</h2>
    <button>Click Me</button>
    <p>I am a Paragraph</p>
</div>

    <script type="text/javascript">
        $(document).ready(function(){
            //alert('I am Ready')
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            //$('h2').addClass('test');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            //$('p').click(function(){
               //$('h2').addClass('test');
            });
        })
    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            //$('button').click(function(){
                //$('h2').addClass('test');
        });
        })
    </script>



    <script type="text/javascript">
        $(document).ready(function(){
            $('button').click(function(){
                $('h2').hide();
            });
        })
    </script>

</section>
</body>
</html>