$(document).on('click', '#send', function(e) {
    e.preventDefault();
    //hide response if it's visible
    $('#response').hide();
    //we grab all fields values to create our email
    var name = $('#name').val();
    var email = $('#email').val();
    var objet = $('#objet').val();
    var message = $('#message').val();
    if (name === '' || email === '' || message === '' || objet === '') {
        //all fields are rquired so if one of them is empty the function returns
        return;
    }
    //if it's all right we proceed
    $.ajax({
        type: 'post',
        //our baseurl variable in action will call the sendemail() method in our default controller
        url: baseurl + 'sendemail',
        data: { name: name, email: email, objet: objet, message: message },
        success: function(result) {
            //Ajax call success and we can show the value returned by our controller function
            $('#response').html(result).fadeIn('slow').delay(3000).fadeOut('slow');
            $('#name').val('');
            $('#email').val('');
            $('#objet').val('');
            $('#message').val('');
        },
        error: function(result) {
            //Ajax call failed, so we inform the user something went wrong
            $('#response').html('Server unavailable now: please, retry later.').fadeIn('slow').delay(3000).fadeOut('slow');
            $('#name').val('');
            $('#email').val('');
            $('#objet').val('');
            $('#message').val('');
        }
    });
});