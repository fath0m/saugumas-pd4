<?php $this->layout('shared/layout', ['title' => 'New password']) ?>

<form method="post">
    <table>
        <tr>
            <td>
                <label for="name">Name</label>
            </td>
            <td colspan="2">
                <input class="w-100" type="text" name="name" id="name" required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="password">Password</label>
            </td>
            <td>
                <input type="text" name="password" id="password" required>
            </td>
            <td>
                <button type="button">generate</button>
            </td>
        </tr>

        <tr>
            <td>
                <label for="description">Description</label>
            </td>
            <td colspan="2">
                <textarea class="w-100" name="description" id="description" required></textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit">Create</button>
            </td>
        </tr>
    </table>
</form>