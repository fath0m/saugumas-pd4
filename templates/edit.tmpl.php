<?php $this->layout('shared/layout', ['title' => 'Edit password']) ?>

<form method="post">
    <table>
        <tr>
            <td>
                <label for="name">Name</label>
            </td>
            <td colspan="2">
                <input class="w-100" type="text" name="name" id="name" value="<?= $password["name"] ?>" required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="password">Password</label>
            </td>
            <td>
                <input type="text" name="password" id="password" value="<?= password_decrypt($password["password"]) ?>" required>
            </td>
            <td>
                <button
                        type="button"
                        onclick="document.getElementById('password').value = Math.random().toString(36).slice(2);"
                >generate</button>
            </td>
        </tr>

        <tr>
            <td>
                <label for="description">Description</label>
            </td>
            <td colspan="2">
                <textarea class="w-100" name="description" id="description" required><?= $password["description"] ?></textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td colspan="2">
                <button type="submit">Save changes</button>

                <a href="/delete.php?id=<?= $_GET["id"] ?>">
                    Delete
                </a>
            </td>
        </tr>
    </table>
</form>