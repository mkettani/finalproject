<?php
require('../model/database.php');
require('../model/customer_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'search_customers';
}

if ($action == 'search_customers') {
    include('customer_search.php');
} else if ($action == 'display_customers') {
    $last_name = $_POST['last_name'];
    if (empty($last_name)) {
        $message = 'You must enter a last name.';
    } else {
        $customers = get_customers_by_last_name($last_name);
    }
    include('customer_search.php');
} else if ($action == 'display_customer') {
    $customer_id = $_POST['customer_id'];
    $customer = get_customer($customer_id);
    include('customer_display.php');
} else if ($action == 'update_customer') {
    $customer_id = $_POST['customer_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $country_code = $_POST['country_code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    update_customer($customer_id, $first_name, $last_name,
            $address, $city, $state, $postal_code, $country_code,
            $phone, $email, $password);

    include('customer_search.php');
}
