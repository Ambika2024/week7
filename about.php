<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Us</h1>
    <?php
    $team = [
        ["name" => "John Doe", "role" => "CEO"],
        ["name" => "Jane Smith", "role" => "CTO"],
        ["name" => "Emily Jones", "role" => "CFO"],
    ];
    ?>
    <h2>Our Team</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>
