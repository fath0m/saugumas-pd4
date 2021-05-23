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

<table class="w-100">
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

    <?php foreach ($passwords as $index => $password): ?>
        <tr>
            <td>
                <?= $this->e($password["name"]) ?>
            </td>

            <td>
                <a href="?<?= $index ?>=show">
                    ***************
                </a>
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