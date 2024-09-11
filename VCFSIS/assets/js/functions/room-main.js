$(document).ready(function () {
    columns = [
      { title: "ID", data: 0 },
      { title: "ROOM #", data: 1 },
      { title: "FLOOR", data: 2 },
      { title: "TYPE", data: 3 },
      { title: "CREATED AT", data: 4 },
      { title: "ACTION", data: 5 },
    ];
    api = "assets/php/functions/room/getRoom.php";
    initializeDataTable(api, columns);
  
    submitForm("#add-form",  api, columns);
    submitForm("#update-form",  api, columns);
    submitForm("#remove-form",  api, columns);
  
    $(document).on("click", 'button[data-bs-target="#update"]', function () {
      var id = $(this).data("id");
      var name = $(this).data("name");
      var type = $(this).data("type");
      var floor = $(this).data("floor");
      $('#update input[name="id"]').val(id);
      $('#update input[name="name"]').val(name);
      $('#update select[name="type"]').val(type);
      $('#update select[name="floor"]').val(floor);
    });
  
    $(document).on("click", 'button[data-bs-target="#remove"]', function () {
      var id = $(this).data("id");
      $('#remove input[name="id"]').val(id);
    });
  });
  