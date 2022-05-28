function pageNews() {
  var offset = 1;
  if (document.getElementById("section-news")) {
    var maxpage = document.getElementById("section-news").dataset.page;
  }
  // Declare project amount displayed
  $("#load-more").click(function (event) {
    var button = $(this);

    var textchange = button.find("#text-load-more");
    event.preventDefault();
    $.ajax({
      // Ajax method
      type: "post", // Method post or get
      dataType: "html", //Return data as xml, json, script, or html
      async: true,
      url: "/wp-admin/admin-ajax.php", // Where data was handle
      data: {
        action: "loadmore_update", // Action name, request data for server
        offset: offset, // request product amount would like show for server
      },
      beforeSend: function () {
        textchange.text("Loading...");
      },
      success: function (response) {
        textchange.text("Đọc thêm").prev().before(response);
        $("#section-news").append(response);
        // console.log(response);
        offset++; // Increase project amount displayed
        if (maxpage <= offset) {
          button.hide();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        //Do something when error happens
        console.log("The following error occured: " + textStatus, errorThrown);
      },
    });
  });
}
