
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
 <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php elseif ($customers) : ?>
            <h2>Results</h2>
            <table>
                <tr>
 <th>Name</th>
                    <th>Email Address</th>
                    <th>City</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($customers as $customer) : ?>
                <tr>
