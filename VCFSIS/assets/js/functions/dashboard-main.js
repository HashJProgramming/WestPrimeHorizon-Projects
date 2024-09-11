$(document).ready(function () {
    columns = [
      { title: "COURSE", data: 1 },
      { title: "SUBJECT", data: 2 },
      { title: "ROOM", data: 3 },
      { title: "TEACHER", data: 4 },
      { title: "DAYS", data: 5 },
      { title: "TIME START", data: 6 },
      { title: "TIME END", data: 7 },
    ];
    api = "assets/php/functions/schedule/getScheduleToday.php";
    initializeDataTable(api, columns);

});