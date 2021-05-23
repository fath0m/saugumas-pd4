<?php $this->layout('shared/layout', ['title' => 'Register']) ?>

<form method="post">
    <table>
        <tr>
            <td>
                <label for="username">Username</label>
            </td>
            <td>
                <input type="text" name="username" id="username" required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="password">Password</label>
            </td>
            <td>
                <input type="password" name="password" id="password" required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="password_confirmation">Confirm password</label>
            </td>
            <td>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit">Register</button>
                <a href="/login.php">
                    Have an account already?
                </a>
            </td>
        </tr>
    </table>
</form>