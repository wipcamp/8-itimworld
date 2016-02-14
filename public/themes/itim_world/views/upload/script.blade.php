
{!!HTML::script('themes/itim_world/assets/js/upload/fileinput.js')!!}
{!!HTML::script('themes/itim_world/assets/js/upload/fileinput_locale_th.js')!!}
<script>
	 $('#avatar').fileinput({
        language: 'th',
        uploadUrl: '{{Config.getCapp.url}}',
        allowedFileExtensions : ['jpg', 'png','jpeg']
    });

</script>