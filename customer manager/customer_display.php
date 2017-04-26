<?php include '../view/header.php'; ?>
<div id="main">
  <div id="content">
        <!-- display a table of customer information -->
        <h2>View/Update Customer</h2>
        <form action="" method="post" id="aligned">
            <input type="hidden" name="action" value="update_customer" />
            <input type="hidden" name="customer_id" value="<?php echo $customer['customerID']; ?>" />

