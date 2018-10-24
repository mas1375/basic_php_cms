<?php  require VIEW_ROOT . '/templates/header.php'; ?>

<h2> Edit Page </h2>

    <form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST">
        <label for="title">
            Title
            <input type="text" name="title" id="title" value="<?php echo e($page["title"]); ?>">
        </label>

        <label for="label">
             label
             <input type="text" name="label" id="label" value="<?php echo e($page["label"]); ?>">
        </label>

        <label for="slug">
            slug
            <input type="text" name="slug" id="slug" value="<?php echo e($page["slug"]); ?>">
        </label>

        <label for="body">
             body 
             <textarea name="body" id="body" cols="30" rows="10" ><?php echo e($page["body"]); ?></textarea>
        </label>

        <input type="submit" name="submit" id="submit" value="Edit">


        <input type="hidden" name="id"  value="<?php echo e($page["id"]); ?>">

    </form>

<?php  require VIEW_ROOT . '/templates/footer.php'; ?>