/*
  ./www/js/posts/index.php;
 */

$(function () {
  let offset = 5;

  $("#morePosts").click(function (e) {
    e.preventDefault();
    $.ajax({
      // url: '?older-posts=' + offset,  => Manière moins détaillé
      url: "ajaxMoreAction",
      data: {
        offset: offset,
      },
      method: "get",
      success: function (reponsePHP) {
        // console.log(reponsePHP);

        $("#blog")
          .append(reponsePHP)
          .find(".post-preview:nth-last-child(-n+5)")
          .hide()
          .fadeIn();
        offset += 5;
      },
      error: function () {
        alert("Problème durant la transaction !");
      },
    });
  });
});
