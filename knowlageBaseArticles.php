<? 

session_start();  // Start the session to handle messages
require("./global.php");

// Check if the form is submitted to create or update an article
if (isset($_POST['create_article'])) {
    // Sanitize and retrieve the form data
    $article_title = mysqli_real_escape_string($con, $_POST['article_title']);
    $article_body = mysqli_real_escape_string($con, $_POST['article_body']);
    $article_category = mysqli_real_escape_string($con, $_POST['article_category']);
    $article_id = mysqli_real_escape_string($con, $_POST['article_id']);

    // Check if we are updating an existing article or creating a new one
    if (!empty($article_id)) {
        // Update existing article
        $query = "UPDATE jeoxillitycrm_articles SET title = '$article_title', body = '$article_body', category = '$article_category', updated_at = NOW() WHERE id = '$article_id'";
        if (mysqli_query($con, $query)) {
            $_SESSION['message'] = "Article updated successfully!";
        } else {
            $_SESSION['message'] = "Error updating article: " . mysqli_error($con);
        }
    } else {
        // Insert new article
        $query = "INSERT INTO jeoxillitycrm_articles (title, body, category, created_at, updated_at) VALUES ('$article_title', '$article_body', '$article_category', NOW(), NOW())";
        if (mysqli_query($con, $query)) {
            $_SESSION['message'] = "Article created successfully!";
        } else {
            $_SESSION['message'] = "Error creating article: " . mysqli_error($con);
        }
    }

    // Redirect to a clean URL to avoid showing the message again on refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle article deletion
if (isset($_GET['delete_article'])) {
    $article_id = mysqli_real_escape_string($con, $_GET['delete_article']);
    $query = "DELETE FROM jeoxillitycrm_articles WHERE id = '$article_id'";
    if (mysqli_query($con, $query)) {
        $_SESSION['message'] = "Article deleted successfully!";
    } else {
        $_SESSION['message'] = "Error deleting article: " . mysqli_error($con);
    }

    // Redirect to avoid message showing on refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle filtering and search query
$filter_category = isset($_GET['category']) ? mysqli_real_escape_string($con, $_GET['category']) : '';
$search_query = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';

// Construct SQL query
$query = "SELECT * FROM jeoxillitycrm_articles WHERE 1=1"; // Base query

// Apply category filter if set
if (!empty($filter_category)) {
    $query .= " AND category = '$filter_category'";
}

// Apply search filter if set
if (!empty($search_query)) {
    $query .= " AND (title LIKE '%$search_query%' OR body LIKE '%$search_query%')";
}

$query .= " ORDER BY created_at DESC";
$articles = mysqli_query($con, $query);


// Default sorting: by 'created_at' in descending order
$sort_by = isset($_GET['sort_by']) ? mysqli_real_escape_string($con, $_GET['sort_by']) : 'created_at';
$order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'ASC' : 'DESC';

// Define allowed columns for sorting to avoid SQL injection
$allowed_columns = ['title', 'category', 'created_at'];

// Ensure the 'sort_by' column is valid
if (!in_array($sort_by, $allowed_columns)) {
    $sort_by = 'created_at';
}

// Modify the SQL query to include the ORDER BY clause
$query = "SELECT * FROM jeoxillitycrm_articles WHERE 1=1"; // Base query

// Apply category filter if set
if (!empty($filter_category)) {
    $query .= " AND category = '$filter_category'";
}

// Apply search filter if set
if (!empty($search_query)) {
    $query .= " AND (title LIKE '%$search_query%' OR body LIKE '%$search_query%')";
}

// Add sorting to the query
$query .= " ORDER BY $sort_by $order";

// Execute the query
$articles = mysqli_query($con, $query);







?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<style>
    .cke_notification_warning {
        display: none;
    }
    a {
    text-decoration: none !important;
}

</style>


</head>

<body class="body-padding body-p-top">

    <!-- preloader start -->

    <div class="preloader d-none">

        <div class="loader">

            <span></span>

            <span></span>

            <span></span>

        </div>

    </div>
    <!-- preloader end -->

    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->


    <!-- profile right sidebar start -->

    <? include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <? include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">

 <!-- Message display -->
 <? if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success" id="message">
                <?= htmlspecialchars($_SESSION['message']); ?>
            </div>
            <? unset($_SESSION['message']); // Clear the message 
            ?>
        <? endif; ?>

        <div class="row">
            <div class="col-12">
                <div class="panel">

                    <div class="panel-header d-flex justify-content-between" style="align-items: center;">
                        <h5>Article Management</h5>
                        <div class="btn-box d-flex gap-2" style="align-items: center;">
                            <!-- Search Input -->
                            <form method="get" class="d-inline-block" style="display: flex; align-items: center;">
                                <input type="text" name="search" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" placeholder="Search articles..." class="form-control" style="height: 38px; width: 250px; padding: 0 10px; border-radius: 4px; border:none" />
                            </form>

                            <!-- Add New Button -->
                            <button class="btn btn-sm btn-primary" style="height: 40px; width:120px" data-bs-toggle="modal" id="create-article-btn" data-bs-target="#createArticleModal">
                                <i class="fa-light fa-plus"></i> Add New
                            </button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-dashed table-hover digi-dataTable task-table table-striped">

                        <thead>
    <tr>
        <th>
            <a href="?sort_by=title&order=<?= (isset($_GET['order']) && $_GET['order'] == 'asc' && $_GET['sort_by'] == 'title') ? 'desc' : 'asc'; ?>">
                Title <?= (isset($_GET['sort_by']) && $_GET['sort_by'] == 'title') ? ($_GET['order'] == 'asc' ? '▲' : '▼') : ''; ?>
            </a>
        </th>
        <th>
            <a href="?sort_by=category&order=<?= (isset($_GET['order']) && $_GET['order'] == 'asc' && $_GET['sort_by'] == 'category') ? 'desc' : 'asc'; ?>">
                Category <?= (isset($_GET['sort_by']) && $_GET['sort_by'] == 'category') ? ($_GET['order'] == 'asc' ? '▲' : '▼') : ''; ?>
            </a>
        </th>
        <th>
            <a href="?sort_by=created_at&order=<?= (isset($_GET['order']) && $_GET['order'] == 'asc' && $_GET['sort_by'] == 'created_at') ? 'desc' : 'asc'; ?>">
                Created At <?= (isset($_GET['sort_by']) && $_GET['sort_by'] == 'created_at') ? ($_GET['order'] == 'asc' ? '▲' : '▼') : ''; ?>
            </a>
        </th>
        <th>Actions</th>
    </tr>
</thead>

                            <!-- <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead> -->

                            <tbody>
    <?php while ($row = mysqli_fetch_assoc($articles)): ?>
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
</tbody>

                            <!-- <tbody>
                                <?php while ($row = mysqli_fetch_assoc($articles)): ?>
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
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>


       
        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>

     <!-- Create Article Modal -->
     <div class="modal fade" id="createArticleModal" tabindex="-1" aria-labelledby="createArticleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="createArticleModalLabel">Create New Article</h2>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <input type="hidden" name="article_id" id="article_id">
                        <div class="mb-3">
                            <label for="article_title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="article_title" name="article_title" required>
                        </div>

                        <div class="mb-3">
    <label for="article_category" class="form-label">Category</label>
    <select class="form-control" id="article_category" name="article_category" required>
        <option value="">Select Category</option>
        <?php
        // Fetch categories from the database
        $query = "SELECT category_name FROM jeoxillitycrm_category";
        $result = mysqli_query($con, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Loop through each category and create an option element
            while ($row = mysqli_fetch_assoc($result)) {
                $category_name = htmlspecialchars($row['category_name']); // Sanitize output
                echo "<option value='$category_name'>$category_name</option>";
            }
        } else {
            // Handle the case where no categories are found
            echo "<option value=''>No categories available</option>";
        }
        ?>
    </select>
</div>

                        <!-- <div class="mb-3">
                            <label for="article_category" class="form-label">Category</label>
                            <select class="form-control" id="article_category" name="article_category" required>
                                <option value="">Select Category</option>
                                <option value="Technology">Technology</option>
                                <option value="Health">Health</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Education">Education</option>
                            </select>
                        </div> -->
                        <div class="mb-3">
                            <label for="article_body" class="form-label">Content</label>
                            <textarea class="form-control " id="article_body" name="article_body"></textarea>
                            <script>
                                CKEDITOR.replace('article_body');
                                  contentsCss: 'body { background-color: white; color: black; }'
                            </script>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="create_article" class="btn btn-sm btn-primary">Save Article</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h2>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this article?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-danger" id="confirm-delete-btn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Article Modal -->
    <div class="modal fade" id="viewArticleModal" tabindex="-1" aria-labelledby="viewArticleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="viewArticleModalLabel">Article View</h2>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <h4 id="view-article-title"></h4>
                    <p id="view-article-category"></p>
                    <div id="view-article-body"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   
    <? include("./includes/views/footerjs.php"); ?>
    <!-- event modal end -->









    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let articleToDelete = null;

            // Auto-hide the message after a few seconds
            setTimeout(function() {
                var message = document.getElementById('message');
                if (message) {
                    message.style.display = 'none';
                }
            }, 3000); // Hide after 3 seconds

            // Handle Edit button click
            document.querySelectorAll('.edit-article-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const articleId = this.getAttribute('data-id');
                    const articleTitle = this.getAttribute('data-title');
                    const articleCategory = this.getAttribute('data-category');
                    const articleBody = this.getAttribute('data-body');

                    document.getElementById('article_id').value = articleId;
                    document.getElementById('article_title').value = articleTitle;
                    document.getElementById('article_category').value = articleCategory;
                    CKEDITOR.instances.article_body.setData(articleBody);
                    document.getElementById('createArticleModalLabel').textContent = 'Edit Article';
                });
            });

            // Handle Create button click (reset the form for a new article)
            document.getElementById('create-article-btn').addEventListener('click', function() {
                document.getElementById('article_id').value = '';
                document.getElementById('article_title').value = '';
                document.getElementById('article_category').value = '';
                CKEDITOR.instances.article_body.setData('');
                document.getElementById('createArticleModalLabel').textContent = 'Create New Article';
            });

            // Handle Delete button click to show confirmation modal
            document.querySelectorAll('.delete-article-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    articleToDelete = this.getAttribute('data-id');
                    var deleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
                    deleteModal.show();
                });
            });

            // Handle confirm delete action
            document.getElementById('confirm-delete-btn').addEventListener('click', function() {
                if (articleToDelete) {
                    window.location.href = '?delete_article=' + articleToDelete;
                }
            });

            // Handle View button click
            document.querySelectorAll('.view-article-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const articleTitle = this.getAttribute('data-title');
                    const articleBody = this.getAttribute('data-body');
                    const articleCategory = this.getAttribute('data-category');

                    document.getElementById('view-article-title').textContent = articleTitle;
                    document.getElementById('view-article-category').textContent = 'Category: ' + articleCategory;
                    document.getElementById('view-article-body').innerHTML = articleBody;
                });
            });
        });
    </script>

</body>

</html>