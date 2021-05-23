<?php $this->layout('shared/layout', ['title' => 'Login']) ?>

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
            <td></td>
            <td>
                <button type="submit">Login</button>
                <a href="/register.php">
                    Don't have an account yet?
                </a>
            </td>
        </tr>
    </table>
</form>