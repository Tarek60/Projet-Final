
$(document).ready(function () {
    // Partie AJAX pour l'image de profil
    $('.profilePicture').click(function () {
        $.post(
                'controllers/modification-profilController.php', {
                    picture: $(this).attr('id')
         });
    });




// Partie jQuery

$(function () {
    $('.btnCommentUpdate').click(function () {
        if ($(this).parent('div').children('.formCommentUpdate').css('display') == 'block') {
            $(this).parent('div').children('.formCommentUpdate').css('display', 'none');
        } else {
            $(this).parent('div').children('.formCommentUpdate').css('display', 'block');
        }
    });
});

// Partie AJAX du chat

$('#sendButton').click(function (e) {
    e.preventDefault();
    $.post(
            'controllers/overchatController.php', {
                message: $('#chatInput').val(),
                ajaxReady: 'message'
            },
            function (data) {
                var data = JSON.parse(data);
                $('.chat-message').empty();
                $.each(data, function (key, value) {

                    var display = '<div class="message-content" id="message-content">'
                            + '<a href="profil.php?userId=' + value.id_owprjt_users + '" id="userName"> '
                            + '<img src="assets/img/profil/' + value.picProfileName + '" id="user-picture"/>'
                            + '<span>' + value.userName + '</span>'
                            + '</a>'
                            + '<span id="user-message"> : ' + value.content + '</span>'
                            + '</div>';
                    $('.chat-message').append(display);
                });
                $('#chatInput').val('');
                $('.chat-box').scrollTop($('.chat-box')[0].scrollHeight);
            }
    ), 'JSON'

});


setInterval(function () {

    $.post(
            'controllers/overchatController.php', {
                ajaxReady: 'message'
            },
            function (data) {
                var data = JSON.parse(data);
                $('.chat-message').empty();
                console.log(data);
                $.each(data, function (key, value) {

                    var display = '<div class="message-content" id="message-content">'
                            + '<a href="profil.php?userId=' + value.id_owprjt_users + '" id="userName"> '
                            + '<img src="assets/img/profil/' + value.picProfileName + '" id="user-picture"/>'
                            + '<span>' + value.userName + '</span>'
                            + '</a>'
                            + '<span id="user-message"> : ' + value.content + '</span>'
                            + '</div>';
                    $('.chat-message').append(display);
                });
                $('.chat-box').scrollTop($('.chat-box')[0].scrollHeight);
            }
    ), 'JSON'

}, 4000);

$('.chat-box').scrollTop($('.chat-box')[0].scrollHeight);

});