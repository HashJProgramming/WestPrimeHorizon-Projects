$(document).ready(function () {
    columns = [
      { title: "ID", data: 0 },
      { title: "Name", data: function(row) {
      return (row[1] + " " + row[3] + " " + row[2] + " " + row[4]).toUpperCase();
      }},
      { title: "Birthdate", data: 5 },
      { title: "Age", data: 6 },
      { title: "Sex", data: 7 },
      { title: "Address", data: function(row) {
      return (row[11] + ", " + row[10] + ", " + row[9] + ", " + row[8]).toUpperCase();
      }},
      { title: "Phone", data: 13 },
      { title: "Coruse", data: 16 },
      { title: "Created At", data: 14 },
      { title: "Action", data: 15 },
    ];
    api = "assets/php/functions/teacher/getTeacher.php";
    initializeDataTable(api, columns);
  
    submitForm("#add-form",  api, columns);
    submitForm("#update-form",  api, columns);
    submitForm("#remove-form",  api, columns);
  
    $(document).on("click", 'button[data-bs-target="#update"]', function () {
      var id = $(this).data("id");
      var user_id = $(this).data("user_id");
      var firstname = $(this).data("firstname");
      var lastname = $(this).data("lastname");
      var middlename = $(this).data("middlename");
      var suffix = $(this).data("suffix");
      var birthdate = $(this).data("birthdate");
      var sex = $(this).data("sex");
      var region = $(this).data("region");
      var province = $(this).data("province");
      var municipality = $(this).data("municipality");
      var barangay = $(this).data("barangay");
      var address = $(this).data("address");
      var phone = $(this).data("phone");
      var username = $(this).data("username");
      $('#update input[name="id"]').val(id);
      $('#update input[name="user_id"]').val(user_id);
      $('#update input[name="firstname"]').val(firstname);
      $('#update input[name="lastname"]').val(lastname);
      $('#update input[name="middlename"]').val(middlename);
      $('#update input[name="suffix"]').val(suffix);
      $('#update input[name="birthdate"]').val(birthdate);
      $('#update input[name="sex"]').val(sex);
      $('#update select[name="region"]').val(region);
      $('#update select[name="province"]').val(province);
      $('#update select[name="municipality"]').val(municipality);
      $('#update select[name="barangay"]').val(barangay);
      $('#update input[name="address"]').val(address);
      $('#update input[name="phone"]').val(phone);
      $('#update input[name="username"]').val(username);
    });
  
    $(document).on("click", 'button[data-bs-target="#remove"]', function () {
      var id = $(this).data("id");
      $('#remove input[name="id"]').val(id);
    });
  });
  