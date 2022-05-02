$(document).ready(function(){
    $('form').submit(function(e){
        e.preventDefault()
        var form = this;
        $.ajax({
            url: 'routes.php',
            method: 'POST',
            data: {
                ano: $(this).serialize()
            },
        success: function(data){
            $('.alert').fadeIn('fast')
            $('.seculo').html(data)
        }
        })
    })
})