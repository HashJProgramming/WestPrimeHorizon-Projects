<?php
include 'functions/get-data.php';

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_gms', 'root', '');

if(isset($_GET['filter'])){
    $sql = 'SELECT *, DATE_FORMAT(created_at, "%Y-%m-%d %h:%i %p") AS created_at  FROM violations WHERE type = "'.$_GET['filter'].'"';
} else{
    $sql = 'SELECT *, DATE_FORMAT(created_at, "%Y-%m-%d %h:%i %p") AS created_at  FROM violations';
}
  

$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table 
foreach ($results as $row) {
?>
    <tr>
        <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
        <?php
            get_student($row['student_id']);
        ?>
            <td class="border-0 align-middle"><strong><?php echo $row['type']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['offense']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['level']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['created_at']; ?></strong></td>

    </tr>
        
<?php
}


