$(document).ready(function () {
  var columns = [
    { title: "No  .", data: 0 },
    { title: "Content", data: 1 },
    { title: "Actions", data: 2 },
  ];
  initializeDataTable(api, columns);
  initializeTinyMCE("default-editor-add", "");

  submitForm("#add-form", api, columns);
  submitForm("#remove-form", api, columns);

  $(document).on("click", 'a[data-bs-target="#add"]', function () {
    initializeTinyMCE("default-editor-add", "");
    var id = new URLSearchParams(window.location.search).get("id");
    $('#add input[name="test_id"]').val(id);
  });

  $(document).on("click", 'button[data-bs-target="#update"]', function () {
    var id = $(this).data("id");
    var content = $(this).data("content");

    // getContent from API Post
    $.post(
      "assets/php/functions/questions/getContent.php",
      { id: id },
      function (response) {
        if (response.status === "success") {
          var content = response.data.content;
          initializeTinyMCE("default-editor-update", content);
        } else {
          console.error(response.message);
        }
      },
      "json"
    );

    $('#update input[name="id"]').val(id);
    $('#update input[name="content"]').val(content);
  });

  $(document).on("submit", "#update-form", function (event) {
    event.preventDefault();

    var id = $(this).find('input[name="id"]').val();
    var tinyMCEContent = tinymce.get("default-editor-update").getContent();
    var form = $(this);

    $.ajax({
      type: "POST",
      url: "assets/php/functions/questions/update.php",
      data: { id: id, content: tinyMCEContent },
      success: function (data) {
        var result = JSON.parse(data);
        showSweetAlert(
          result.status.toUpperCase(),
          result.message,
          result.status,
          2000
        );
        clearForm(form);
        initializeDataTable(api, columns);
      },
      error: function (data) {
        var result = JSON.parse(data);
        showSweetAlert(
          result.status.toUpperCase(),
          result.message,
          result.status,
          2000
        );
        clearForm(form);
      },
    });
  });

  $(document).on("click", 'button[data-bs-target="#remove"]', function () {
    var id = $(this).data("id");
    $('#remove input[name="id"]').val(id);
  });
});
