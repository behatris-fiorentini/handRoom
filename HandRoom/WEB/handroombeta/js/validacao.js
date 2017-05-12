$(document).ready(function(){
    $('#alert-msg').hide();
    $('#fechar').css('cursor', 'pointer');

    $('#fechar').click(function (){
        $('#alert-msg').fadeOut(1000);
    })

    $('#btnentrasis').click(function (){
        if($('#emailentra').val() == ''){
            $('#alert-msg').hide;
            $('#msg-error').text('Campos obrigatórios não preenchidos!')
        }
    });

    $('#btnentrasis').click(function (){
        if($('#senhaentra').val()== ''){
            $('#alert-msg').show;
            $('#msg-error').text('Campos obrigatórios não preenchidos!')
        }
    });


});