$(document).ready(function () {
    columns = [
      { title: "ID", data: 0 },
      { title: "NAME", data: 1 },
      { title: "DESCRIPTION", data: 2 },
      { title: "CREATED AT", data: 3 },
      { title: "ACTION", data: 4 },
    ];
    api = "assets/php/functions/course/getCourse.php";
    initializeDataTable(api, columns);
  
    submitForm("#add-form",  api, columns);
    submitForm("#update-form",  api, columns);
    submitForm("#remove-form",  api, columns);
  
    $(document).on("click", 'button[data-bs-target="#update"]', function () {
      var id = $(this).data("id");
      var name = $(this).data("name");
      var description = $(this).data("description");
      $('#update input[name="id"]').val(id);
      $('#update input[name="name"]').val(name);
      $('#update textarea[name="description"]').val(description);
    });
  
    $(document).on("click", 'button[data-bs-target="#remove"]', function () {
      var id = $(this).data("id");
      $('#remove input[name="id"]').val(id);
    });
  });
  