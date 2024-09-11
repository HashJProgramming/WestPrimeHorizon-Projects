$(document).ready(function () {
    columns = [
      { title: "No.", data: 0 },
      { title: "Content", data: 1 },
      { title: "Is Correct", data: 2 },
      { title: "Actions", data: 3 }
    ];
  
    initializeDataTable(api, columns);
  
    submitForm("#add-form",  api, columns);
    submitForm("#update-form",  api, columns);
    submitForm("#remove-form",  api, columns);

    $(document).on("click", 'a[data-bs-target="#add"]', function () {
      var id = new URLSearchParams(window.location.search).get("id");
      $('#add input[name="question_id"]').val(id);
    });
  
    $(document).on("click", 'button[data-bs-target="#update"]', function () {
      var id = $(this).data("id");
      var content = $(this).data("content");
      console.log(content);
      $('#update input[name="id"]').val(id);
      $('#update input[name="content"]').val(content);
    });
  
    $(document).on("click", 'button[data-bs-target="#remove"]', function () {
      var id = $(this).data("id");
      $('#remove input[name="id"]').val(id);
    });
  });
  