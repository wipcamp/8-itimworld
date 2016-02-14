{!!HTML::script('themes/itim_world/assets/js/plugins/froala/froala_editor.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/align.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/colors.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/entities.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/font_size.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/image.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/line_breaker.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/link.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/lists.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/quick_insert.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/quote.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/save.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/table.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/url.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/plugins/froala/plugins/video.min.js')!!}

<script>
    $(function(){
        $(".answer-box").froalaEditor({
            height: 300,
            toolbarSticky: false,
            codeBeautifier: false,
            imageInsertButtons: ['imageBack', '|', 'imageByURL'],
        });
    });
</script>
