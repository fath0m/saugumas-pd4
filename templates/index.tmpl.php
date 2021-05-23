<?php $this->layout('shared/layout', ['title' => 'Passwords']) ?>

<form>
    <table>
        <tr>
            <th>
                <input name="search" type="text" required />
            </th>
            <th>
                <button type="submit">Search</button>
            </th>
        </tr>
    </table>
</form>

<br />

<table class="w-100 passwords-table">
    <tr>
        <th align="left">
            Name
        </th>

        <th align="left">
            Password
        </th>

        <th align="left">
            Description
        </th>

        <th>

        </th>
    </tr>

    <?php if(!sizeof($passwords)): ?>
        <tr>
            <td colspan="100%">
                You don't have any passwords yet.
            </td>
        </tr>
    <?php endif; ?>


    <?php foreach ($passwords as $index => $password): ?>
        <tr id="pw_<?= $index ?>">
            <td>
                <?= $this->e($password["name"]) ?>
            </td>

            <td>

                <?php if (isset($_GET["$index"])): ?>
                    <?= password_decrypt($password["password"]) ?>
                <?php else: ?>
                    <a href="?<?= $index ?>=show#pw_<?= $index ?>">
                        ***************
                    </a>
                <?php endif; ?>

            </td>

            <td>
                <?= $this->e($password["description"]) ?>
            </td>

            <td align="right">
                <a href="#">
                    edit
                </a>
            </td>

        </tr>
    <?php endforeach; ?>

</table>