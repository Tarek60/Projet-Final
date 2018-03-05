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