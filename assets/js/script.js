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

// Update commentaires

//function updateComment() {
//    $.post(
//            '../controllers/commentairesController.php',
//    {
//        updateComment: $('#commentText').text()
//    },
//            )
//}