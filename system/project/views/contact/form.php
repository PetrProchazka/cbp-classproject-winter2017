<h1>The contact form</h1>

<form action="" method="post">

    <label for="email_input">
        Email:<br />
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" id="email_input" />
    </label>
    <br />
    <label for="text_input">
        Text:<br />
        <textarea name="text" id="text_input"></textarea>
    </label>
    <br />
    <label for="newsletter_input">
        Receive newsletter:<br />
        <input type="checkbox" name="newsletter" value="1" checked id="newsletter_input" />
    </label>
    <br />
    <input type="submit" value="Submit" />

</form>