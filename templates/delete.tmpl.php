<?php $this->layout('shared/layout', ['title' => 'Delete password']) ?>

<form method="post">
    <p>
        Do you really want to delete your password? After deletion it cannot be recovered.
    </p>

    <button type="submit">Yes, delete the password</button>
</form>