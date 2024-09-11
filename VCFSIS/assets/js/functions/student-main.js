$(document).ready(function () {
  columns = [
    { title: "ID", data: 0 },
    { title: "USERNAME", data: 1 },
    { title: "COURSE NAME", data: 2 },
    { title: "FIRST NAME", data: 3 },
    { title: "LAST NAME", data: 4 },
    { title: "MIDDLE NAME", data: 5 },
    { title: "SUFFIX", data: 6 },
    { title: "BIRTHDATE", data: 7 },
    { title: "SEX", data: 8 },
    { title: "REGION", data: 9 },
    { title: "PROVINCE", data: 10 },
    { title: "MUNICIPALITY", data: 11 },
    { title: "BARANGAY", data: 12 },
    { title: "ADDRESS", data: 13 },
    { title: "PHONE", data: 14 },
    { title: "GUARDIAN", data: 15 },
    { title: "PHONE", data: 16 },
    { title: "ADDRESS", data: 17 },
    { title: "RELATIONSHIP", data: 18 },
    { title: "OCCUPATION", data: 19 },
    { title: "ELEMENTARY", data: 20 },
    { title: "ADDRESS", data: 21 },
    { title: "YEAR GRADUATED", data: 22 },
    { title: "SECONDARY", data: 23 },
    { title: "ADDRESS", data: 24 },
    { title: "YEAR GRADUATED", data: 25 },
    { title: "LAST SCHOOL ATTENDED", data: 26 },
    { title: "ADDRESS", data: 27 },
    { title: "YEAR GRADUATED", data: 28 },
    { title: "NEW STUDENT", data: 29 },
    { title: "SCHOOL YEAR", data: 30 },
    { title: "STATUS", data: 31 },
    { title: "CREATED AT", data: 32 },
    { title: "ACTION", data: 33 },
  ];

  api = "assets/php/functions/student/getStudent.php";
  initializeDataTable(api, columns);

  submitForm("#add-form", api, columns);
  submitForm("#update-form", api, columns);
  submitForm("#remove-form", api, columns);

  $(document).on("click", 'button[data-bs-target="#update"]', function () {
    var id = $(this).data("id");
    var user_username = $(this).data("user_username");
    var course_name = $(this).data("course_name");
    var firstname = $(this).data("firstname");
    var middlename = $(this).data("middlename");
    var lastname = $(this).data("lastname");
    var suffix = $(this).data("suffix");
    var birthdate = $(this).data("birthdate");
    var sex = $(this).data("sex");
    var region = $(this).data("region");
    var province = $(this).data("province");
    var municipality = $(this).data("municipality");
    var barangay = $(this).data("barangay");
    var address = $(this).data("address");
    var phone = $(this).data("phone");
    var guardian = $(this).data("guardian");
    var guardian_phone = $(this).data("guardian_phone");
    var guardian_address = $(this).data("guardian_address");
    var guardian_relationship = $(this).data("guardian_relationship");
    var guardian_occupation = $(this).data("guardian_occupation");
    var elementary = $(this).data("elementary");
    var elementary_address = $(this).data("elementary_address");
    var elementary_year_graduated = $(this).data("elementary_year_graduated");
    var secondary = $(this).data("secondary");
    var secondary_address = $(this).data("secondary_address");
    var secondary_year_graduated = $(this).data("secondary_year_graduated");
    var school_last_attended = $(this).data("school_last_attended");
    var school_last_attended_address = $(this).data(
      "school_last_attended_address"
    );
    var school_last_attended_year_graduated = $(this).data(
      "school_last_attended_year_graduated"
    );
    var new_student = $(this).data("new_student");
    var school_year = $(this).data("school_year");
    var status = $(this).data("status");

    $('#update input[name="id"]').val(id);
    $('#update input[name="username"]').val(user_username);
    $('#update input[name="course"]').val(course_name);
    $('#update input[name="firstname"]').val(firstname);
    $('#update input[name="middlename"]').val(middlename);
    $('#update input[name="lastname"]').val(lastname);
    $('#update input[name="suffix"]').val(suffix);
    $('#update input[name="birthdate"]').val(birthdate);
    $('#update input[name="sex"]').val(sex);
    $('#update input[name="region"]').val(region);
    $('#update input[name="province"]').val(province);
    $('#update input[name="municipality"]').val(municipality);
    $('#update input[name="barangay"]').val(barangay);
    $('#update input[name="address"]').val(address);
    $('#update input[name="phone"]').val(phone);
    $('#update input[name="guardian_name"]').val(guardian);
    $('#update input[name="guardian_phone"]').val(guardian_phone);
    $('#update input[name="guardian_address"]').val(guardian_address);
    $('#update input[name="guardian_relationship"]').val(guardian_relationship);
    $('#update input[name="guardian_occupation"]').val(guardian_occupation);
    $('#update input[name="elementary_name"]').val(elementary);
    $('#update input[name="elementary_address"]').val(elementary_address);
    $('#update input[name="elementary_graduated"]').val(elementary_year_graduated);
    $('#update input[name="secondary_name"]').val(secondary);
    $('#update input[name="secondary_address"]').val(secondary_address);
    $('#update input[name="secondary_graduated"]').val(secondary_year_graduated);
    $('#update input[name="last_school_name"]').val(school_last_attended);
    $('#update input[name="school_last_attended_address"]').val(school_last_attended_address);
    $('#update input[name="last_school_graduated"]').val(school_last_attended_year_graduated);
    $('#update input[name="new_student"]').val(new_student);
    $('#update input[name="school_year"]').val(school_year);
    $('#update input[name="status"]').val(status);
  });

  $(document).on("click", 'button[data-bs-target="#remove"]', function () {
    var id = $(this).data("id");
    $('#remove input[name="id"]').val(id);
  });
});
