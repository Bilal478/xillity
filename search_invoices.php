<?php
require("./global.php");

$search_query = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';

// Modify SQL query to search by id, title OR client_id
$query = "SELECT * FROM " . $g_projectSlug . "_invoices 
          WHERE id LIKE '%$search_query%' 
          OR title LIKE '%$search_query%' 
          OR client_id LIKE '%$search_query%' 
          ORDER BY timeAdded DESC";

$results = mysqli_query($con, $query);

// Output the search results dynamically
while ($row = mysqli_fetch_assoc($results)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><a href="?view=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
        <td><?php echo $row['client_id']; ?></td>
        <td><strong>$ <?php echo $row['total']; ?></strong></td>
        <td><?php echo date('Y-m-d', $row['timeAdded']); ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
            <div class="btn-group">
                <a href="?action=add&invoiceId=<?php echo $row['id']; ?>" class="btn"><i class="fa-light fa-pen"></i></a>
                <a href="?view=<?php echo $row['id']; ?>" class="btn"><i class="fa-light fa-eye"></i></a>
                <a data-toggle="modal" data-target="#delete_record" data-url="?delete-record=<?php echo $row['id']; ?>" href="#" class="btn"><i class="fa-light fa-trash"></i></a>
            </div>
        </td>
    </tr>
<?php
}
?>
