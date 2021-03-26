
$(function(){
    $('#form-data').submit(function(event){
        let route = $('#form-data').data('route');
        let form_data = $(this);
        $('.alert').remove();
        $.ajax({
            type: 'POST',
            url: route,
            data: form_data.serialize(),
            success: function(Response){
                console.log(Response);
                if(Response.answer){
                    $('#result_form').append('<p class="alert">Ответ: '+ Response.answer +'</p>');
                }
            }
        });
        event.preventDefault();
    });
});
