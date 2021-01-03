/*
  ./www/js/posts/index.php;
 */

$(function () {
  $("#subscribersAdd").click(function (e) {
    e.preventDefault();
    let email = $("#email").val();

    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

    if (isEmail(email)) {
      $.ajax({
        url: "ajaxSubscribersAdd",
        data: {
          email: email,
        },
        method: "post",
        success: function (reponsePHP) {
          if (reponsePHP) {
            $("#confirmation").html(reponsePHP).hide().fadeIn();
          } else {
            $("#confirmation")
              .html(
                "échec de l'ajout de votre émail, il y est probablement déja."
              )
              .hide()
              .fadeIn();
          }
        },
        error: function () {
          alert("Problème durant la transaction !");
        },
      });
    } else {
      $("#confirmation").html("Email invalide").hide().fadeIn();
    }
  });
});
