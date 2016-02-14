
{!!HTML::script('themes/itim_world/assets/js/upload/fileinput.js')!!}
{!!HTML::script('themes/itim_world/assets/js/upload/fileinput_locale_th.js')!!}
<script>
	$(document).on('ready', function() {
	$('#avatar').fileinput({
        language: 'th',
        allowedFileExtensions : ['jpg', 'png','jpeg'],
        showUpload: false,
		showCaption: false,
        showRemove: false,
        showPreview: false,
    });
});

</script>