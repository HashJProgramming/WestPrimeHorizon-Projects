<?php
function month_chart()
{
    global $db;
    $sql = "SELECT MONTH(created_at) AS month, COUNT(*) AS student_count
                FROM students
                WHERE YEAR(created_at) = :currentYear
                GROUP BY MONTH(created_at)
                ORDER BY MONTH(created_at)";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':currentYear', date('Y'));
    $stmt->execute();

    $labels = [];
    $data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $monthName = date("F", mktime(0, 0, 0, $row['month'], 10));  // Get the full month name
        $labels[] = $monthName;  // Label for each month
        $data[] = $row['student_count'];  // Count of students for that month
    }

    // Fill in the missing months with 0 counts if necessary
    $allMonths = array_map(function ($m) {
        return date("F", mktime(0, 0, 0, $m, 10));
    }, range(1, 12));
    $missingMonths = array_diff($allMonths, $labels);

    foreach ($missingMonths as $month) {
        $labels[] = $month;
        $data[] = 0;  // Assume no students for these months
    }

    $chartData = [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Students',
                'fill' => true,
                'data' => $data,
                'backgroundColor' => 'rgba(78, 115, 223, 0.05)',
                'borderColor' => 'rgba(78, 115, 223, 1)'
            ]
        ]
    ];

    $chartDataJson = json_encode($chartData);

?>
    <canvas data-bss-chart='{"type":"line","data":<?php echo $chartDataJson; ?>,"options":{"maintainAspectRatio":false,"legend":{"display":false,"labels":{"fontStyle":"normal"}},"title":{"fontStyle":"normal"},"scales":{"xAxes":[{"gridLines":{"color":"rgb(234, 236, 244)","zeroLineColor":"rgb(234, 236, 244)","drawBorder":false,"drawTicks":false,"borderDash":["2"],"zeroLineBorderDash":["2"],"drawOnChartArea":false},"ticks":{"fontColor":"#858796","fontStyle":"normal","padding":20}}],"yAxes":[{"gridLines":{"color":"rgb(234, 236, 244)","zeroLineColor":"rgb(234, 236, 244)","drawBorder":false,"drawTicks":false,"borderDash":["2"],"zeroLineBorderDash":["2"]},"ticks":{"fontColor":"#858796","fontStyle":"normal","padding":20}}]}}}'></canvas>
<?php
}

function year_chart()
{
    global $db;
    $sql = "SELECT YEAR(created_at) AS year, COUNT(*) AS student_count
               FROM students
               WHERE YEAR(created_at) <= YEAR(CURRENT_TIMESTAMP)
               GROUP BY YEAR(created_at)
               ORDER BY YEAR(created_at)";

    $stmt = $db->prepare($sql);
    $stmt->execute();

    $labels = [];
    $data = [];
    // Fetch the data and prepare the chart data
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $labels[] = $row['year'];  // Year for the label
        $data[] = $row['student_count'];  // Count of students for that year
    }

    $chartData = [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Students',
                'fill' => true,
                'data' => $data,
                'backgroundColor' => 'rgba(78, 115, 223, 0.05)',
                'borderColor' => 'rgba(78, 115, 223, 1)'
            ]
        ]
    ];

    $chartDataJson = json_encode($chartData);

?>
    <canvas data-bss-chart='{"type":"line","data":<?php echo $chartDataJson; ?>,"options":{"maintainAspectRatio":false,"legend":{"display":false,"labels":{"fontStyle":"normal"}},"title":{"fontStyle":"normal"},"scales":{"xAxes":[{"gridLines":{"color":"rgb(234, 236, 244)","zeroLineColor":"rgb(234, 236, 244)","drawBorder":false,"drawTicks":false,"borderDash":["2"],"zeroLineBorderDash":["2"],"drawOnChartArea":false},"ticks":{"fontColor":"#858796","fontStyle":"normal","padding":20}}],"yAxes":[{"gridLines":{"color":"rgb(234, 236, 244)","zeroLineColor":"rgb(234, 236, 244)","drawBorder":false,"drawTicks":false,"borderDash":["2"],"zeroLineBorderDash":["2"]},"ticks":{"fontColor":"#858796","fontStyle":"normal","padding":20}}]}}}'></canvas>
<?php
}
