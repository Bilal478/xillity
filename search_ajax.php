<?php
require("./global.php");

$search_query = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';

// Modify SQL query to search by both title and category
$query = "SELECT * FROM jeoxillitycrm_articles WHERE 1=1";
if (!empty($search_query)) {
    $query .= " AND (title LIKE '%$search_query%' OR category LIKE '%$search_query%')";
}
$query .= " ORDER BY created_at DESC";
$articles = mysqli_query($con, $query);

// Output the search results dynamically
while ($row = mysqli_fetch_assoc($articles)): ?>
    <tr>
        <td><?= htmlspecialchars($row['title']); ?></td>
        <td><?= htmlspecialchars($row['category']); ?></td>
        <td><?= htmlspecialchars($row['created_at']); ?></td>
        <td>
            <button class="btn btn-warning btn-sm edit-article-btn"
                data-id="<?= $row['id']; ?>"
                data-title="<?= htmlspecialchars($row['title']); ?>"
                data-category="<?= htmlspecialchars($row['category']); ?>"
                data-body="<?= htmlspecialchars($row['body']); ?>"
                data-bs-toggle="modal"
                data-bs-target="#createArticleModal"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger btn-sm delete-article-btn" data-id="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fas fa-trash"></i></button>
            <button class="btn btn-info btn-sm view-article-btn"
                data-title="<?= htmlspecialchars($row['title']); ?>"
                data-body="<?= htmlspecialchars($row['body']); ?>"
                data-category="<?= htmlspecialchars($row['category']); ?>"
                data-bs-toggle="modal"
                data-bs-target="#viewArticleModal"><i class="fas fa-eye"></i></button>
        </td>
    </tr>
<?php endwhile; ?>
