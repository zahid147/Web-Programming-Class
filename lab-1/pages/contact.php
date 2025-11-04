<?php include "header.php"; ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Contact Us</h1>

    <?php
    $firstName = '';
    $lastName = '';
    $fullName = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $fullName = trim("$firstName $lastName");
    }
    ?>

    <form action="" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control"
                   placeholder="Your first name" value="<?= $firstName ?>" required>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control"
                   placeholder="Your last name" value="<?= $lastName ?>" required>
        </div>

        <div class="mb-3">
            <label for="FullName" class="form-label">Full Name</label>
            <input type="text" name="FullName" id="FullName" class="form-control"
                   placeholder="Your full name" value="<?= $fullName ?>" readonly>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </div>
    </form>
</div>

<?php include "footer.php"; ?>
