$(document).ready(function () {
  var columns = [
    { title: "ID", data: 0 },
    { title: "Name", data: 1 },
    { title: "Description", data: 2},
    { title: "Type", data: 3 },
    { title: "Time", data: 4 },
    { title: "Start Date", data: 5 },
    { title: "End Date", data: 6 },
    { title: "Course Name", data: 7 },
    { title: "Subject Name", data: 8 },
    { title: "Teacher Name", data: 9 },
    { title: "Actions", data: 10 }
];
var api = "assets/php/functions/test/getTest.php";
initializeDataTable(api, columns);
  
    submitForm("#add-form",  api, columns);
    submitForm("#update-form",  api, columns);
    submitForm("#remove-form",  api, columns);
  
    $(document).on("click", 'button[data-bs-target="#update"]', function () {
      var id = $(this).data("id");
      var name = $(this).data("name");
      var description = $(this).data("description");
      var type = $(this).data("type");
      var time = $(this).data("duration");
      var startDate = $(this).data("startdate");
      var endDate = $(this).data("enddate");
      var courseName = $(this).data("course");
      var subjectName = $(this).data("subject");
      var teacherName = $(this).data("teacher");

      $('#update input[name="id"]').val(id);
      $('#update input[name="name"]').val(name);
      $('#update input[name="description"]').val(description);
      $('#update input[name="type"]').val(type);
      $('#update input[name="duration"]').val(time);
      $('#update input[name="startdate"]').val(startDate);
      $('#update input[name="enddate"]').val(endDate);
      $('#update input[name="courseName"]').val(courseName);
      $('#update input[name="subjectName"]').val(subjectName);
      $('#update input[name="teacherName"]').val(teacherName);

    });
  
    $(document).on("click", 'button[data-bs-target="#remove"]', function () {
      var id = $(this).data("id");
      $('#remove input[name="id"]').val(id);
    });

    $(document).on("click", 'button[data-bs-target="#score"]', function () {
      var id = $(this).data("id");
        var score_columns = [
          { title: "No. #", data: 0 },
          { title: "Student Name", data: 1 },
          { title: "Score", data: 2},
      ];
      initializeDataTable('assets/php/functions/test/getScore.php', score_columns, 'POST', {id: id}, '#score-table');

      console.log(id);
    });

  });
  