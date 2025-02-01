<?php include 'inc/header.php'; ?>

<?php 
    $sql = 'SELECT * FROM feedbacks';
    $result = mysqli_query($conn, $sql);
    $feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

        <h2>Feedback</h2>
        <?php if(empty($feedbacks)): ?>
            <p class="lead mt3">There is no feedback</p>
        <?php endif; ?>
        <?php foreach($feedbacks as $each_feedback): ?>
            <div class="card my-3 w-75">
                <div class="card-body text-center">
                    <h3><?php echo $each_feedback['name'] ?></h3>
                    <p><?php echo $each_feedback['body'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
<?php include 'inc/footer.php'; ?>