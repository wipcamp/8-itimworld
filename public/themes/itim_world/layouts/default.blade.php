<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <?php echo HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css');?>
    </head>
    <body>
        <div class="container">
            {!! Theme::content() !!}
        </div>
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
