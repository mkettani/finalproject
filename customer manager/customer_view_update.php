
<?php include '../view/header.php'; ?>
<div id="main">

    <h2>Customer Search</h2>
    <div id="content">
        <!-- display a search form -->
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="display_customers" />
            <label>Last Name:</label>
            <input type="input" name="last_name" value="<?php echo $last_name; ?>" />
            <input type="submit" value="Search" />
        </form>
