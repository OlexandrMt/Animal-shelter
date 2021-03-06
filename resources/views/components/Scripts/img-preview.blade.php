@props(['img', 'imgPreview'])

<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $('#{{$img}}').change(function () {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            if (input.files[0].type.match('image.*')) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#{{$imgPreview}}').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                console.log('ошибка, не изображение');
            }
        } else {
            console.log('хьюстон у нас проблема');
        }
    });
    $(document).ready(function(){
       $('form').submit(function(){
           $(this).find('input[type=submit], button[type=submit]').prop('disabled', true);
        });
      });
</script>
