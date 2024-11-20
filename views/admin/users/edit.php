<?php
include_once ROOT_DIR . "views/admin/header.php"
?>
<div class="app-main__inner">
    <h1>FORM EDIT USER</h1>
    <form action="?ctl=user/edit" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="email" value="<?= htmlspecialchars($user['email']) ?>">

        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= htmlspecialchars($user['username']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <?php if (!empty($user['image'])): ?>
                <img src="../images/users/<?= htmlspecialchars($user['image']) ?>" alt="User Image" style="max-width: 300px;">
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="client" <?= $user['role'] === 'client' ? 'selected' : '' ?>>Client</option>
                <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>

</div>

<?php
include_once ROOT_DIR . "views/admin/footer.php"
?>