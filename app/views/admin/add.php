<?php  require VIEW_ROOT . '/templates/header.php'; ?>

<h2> Add Page </h2>

    <form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST">
        <label for="title">
            Title
            <input type="text" name="title" id="title">
        </label>

        <label for="title">
             label
             <input type="text" name="label" id="label">
        </label>

        <label for="slug">
            slug
            <input type="text" name="slug" id="slug">
        </label>

        <label for="body">
             body 
             <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </label>

        <input type="submit" name="submit" id="submit" value="Add">

    </form>

<?php  require VIEW_ROOT . '/templates/footer.php'; ?>
