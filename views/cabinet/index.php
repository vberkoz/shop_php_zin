<?php include_once ROOT . '/views/layouts/header.php'?>

<div>
    <h2>User cabinet</h2>
    <h3>You are signed in as <?php echo $user['username']; ?>!</h3>
    <ul style="list-style-type: none; margin: 0;">
        <li class="category-item"><a href="/cabinet/edit">Edit user data</a></li>
        <li class="category-item"><a href="/cabinet/history">Purchases list</a></li>
    </ul>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>