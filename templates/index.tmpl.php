<?php $this->layout('shared/layout', ['title' => 'Passwords']) ?>

<form>
    <table>
        <tr>
            <th>
                <input name="search" type="text" required value="<?= $_GET["search"] ?? "" ?>" />
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
                <?= isset($_GET["search"]) ? "No passwords were found." : "You don't have any passwords yet." ?>
            </td>
        </tr>
    <?php endif; ?>

    <script>
        function textToClipboard(text) {
            var dummy = document.createElement("textarea");
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);
            alert("Password has been copied");
        }
    </script>


    <?php foreach ($passwords as $index => $password): ?>
        <tr id="pw_<?= $index ?>">
            <td>
                <?= $this->e($password["name"]) ?>
            </td>

            <td>

                <?php if (isset($_GET["$index"])): ?>
                    <?= password_decrypt($password["password"]) ?>
                    (<a href="#" onclick="textToClipboard(`<?= password_decrypt($password["password"]) ?>`)">copy</a>)
                <?php else: ?>
                    <a href="<?= querystring_append("$index=show") ?>">
                        ***************
                    </a>
                <?php endif; ?>

            </td>

            <td>
                <?= $this->e($password["description"]) ?>
            </td>

            <td align="right">
                <a href="/edit.php?id=<?= $index ?>">
                    edit
                </a>
            </td>

        </tr>
    <?php endforeach; ?>

</table>