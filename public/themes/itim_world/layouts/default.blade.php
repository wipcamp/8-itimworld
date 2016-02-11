<!DOCTYPE html>
<html>
    <head>
        <title>WIP Camp #8 : Ways to IT Professional Camp : ค่ายเส้นทางสู่ฝันสู่นัก ไอที</title>
        <link rel="icon" type="image/png" href="http://itim.wip.loc/themes/itim_world/assets/img/favicon.ico">
        {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css')!!}
        {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap-themes.css')!!}
        {!!HTML::style('themes/itim_world/assets/css/style.css')!!}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <div class="container">
            {!! Theme::content() !!}
        </div>
        <?php echo HTML::script('themes/itim_world/assets/js/jquery.min.js');?>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
