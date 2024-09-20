<?php
include 'includes/header.php';
include 'includes/config.php';

// Fetch activities from the database
$sql = "SELECT * FROM activities ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<div class="container my-5">
    <h2 class="mb-4">Our Activities</h2>
    <div class="row">
        <?php if ($result->num_rows > 0): ?>
            <?php while($activity = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo htmlspecialchars($activity['image_path']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($activity['title']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($activity['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($activity['description']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No activities found.</p>
        <?php endif; ?>
    </div>
</div>

<?php
$conn->close();
include 'includes/footer.php';
?>
