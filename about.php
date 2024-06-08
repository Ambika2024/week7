<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About William Shakespeare</h1><hr>
    <h2><p>William Shakespeare was born in Stratford-upon-Avon, a bustling market town 100 miles northwest of London, and baptized there on April 26, 1564. His birthday is traditionally celebrated on April 23, which was the date of his death in 1616 and is the feast day of St. George, the patron saint of England. Shakespeare’s father, John, dabbled in farming, wood trading, tanning, leatherwork, money lending and other occupations; he also held a series of municipal positions before falling into debt in the late 1580s. The ambitious son of a tenant farmer, John boosted his social status by marrying Mary Arden, the daughter of an aristocratic landowner. </p></h2>
    <?php
    $team = [
        ["name" => "Tina Packer", "role" => "Founding artistic director"],
        ["name" => "Allyn Burrows", "role" => "President"],
        ["name" => "Ariel Bock", "role" => "Producing associate"],
    ];
    ?>
    <h2> Shakespeare Company</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>

