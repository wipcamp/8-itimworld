<!DOCTYPE html>
<html>
    <head>
        <title>Itim</title>
        <meta charset="utf-8">
        <?php echo HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css');?>
        <?php echo HTML::script('themes/itim_world/assets/js/jquery.min.js');?>
    </head>
    <body>
        <div class="container">
            {!! Theme::content() !!}
        </div>
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
