// Partie AJAX
$(document).ready(function () {
    $('.profilePicture').click(function () {
        $.post(
                'controllers/modification-profilController.php', {
                    picture: $(this).attr('id')
                }, function (data) {
            if (data == 'Success') {
                location.href = 'actualite.php'
            } else {
                console.log('Pas ok');
            }
        });
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

$(function () {
    $('.btnCommentResponse').click(function () {
        if ($(this).parent('div').children('.formCommentResponse').css('display') == 'block') {
            $(this).parent('div').children('.formCommentResponse').css('display', 'none');
        } else {
            $(this).parent('div').children('.formCommentResponse').css('display', 'block');
        }
    });
});

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
                $('#chatInput').val('');
            }
    ), JSON

});

$('.chat-message').animate({scrollTop: height});