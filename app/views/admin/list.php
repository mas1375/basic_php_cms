<?php  require VIEW_ROOT . '/templates/header.php'; ?>

    <?php if(empty($pages)): ?>
        <p> No Pages at the moment.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <td>label</td>
                    <td>title</td>
                    <td>slug</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pages as $page ): ?>
                    <tr>
                        <td><?php echo e($page['label']); ?></td>
                        <td><?php echo e($page['title']); ?></td>
                        <td><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo e($page['slug']); ?>"><?php echo e($page['slug']); ?></a></td>
                        <td><a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($page['id']); ?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($page['id']); ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?php endif; ?>

        <a href="<?php echo BASE_URL; ?>/admin/add.php"> Add New Page </a>

<?php  require VIEW_ROOT . '/templates/footer.php'; ?>
