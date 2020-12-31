/*
  ./www/js/posts/index.php;
 */

$(function () {
  let offset = 10;

  $("#older-posts").click(function (e) {
    e.preventDefault();
    $.ajax({
      // url: '?older-posts=' + offset,  => Manière moins détaillé
      url: "?ajax=older-posts",
      data: {
        offset: offset,
      },
      method: "get",
      success: function (reponsePHP) {
        $("#liste-posts")
          .append(reponsePHP)
          .find(".post-preview:nth-last-child(-n+10)")
          .hide()
          .fadeIn();
        offset += 10;
      },
      error: function () {
        alert("Problème durant la transaction !");
      },
    });
  });
});
