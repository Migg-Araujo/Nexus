<?php include 'header.php';?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/contact.css"/>

<main>
    <h1>Contact Us</h1>
    <form action="?" method="POST">
        <div class="double">
            <input class="normal" type="text" name="first_name" placeholder="First Name" autocomplete="off" required>
            <input class="normal" type="text" name="last_name" placeholder="Last Name" autocomplete="off" required>
        </div>
        <div class="solo">
            <input class="normal" type="text" name="email" placeholder="Your Email" autocomplete="off" required>
        </div>
        <div class="solo">
            <textarea name="message" cols="30" rows="10" class="msg" required placeholder="Your Message..."></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</main>
<?php include 'footer.php';?>