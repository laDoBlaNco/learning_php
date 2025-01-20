<?php
declare(strict_types=1);

// we need to include the class definitions on all pages that will
// use them
include 'classes/Account.php';
include 'classes/Customer.php';

// $accounts is an indexed array of our two account instances
$numbers1 = new AccountNumber(20489446,644984021);
$numbers2 = new AccountNumber(20148896, 698841021);
// added a third account and it just worked.
$numbers3 = new AccountNumber(12345678,987654321);
$accounts = [
    new Account($numbers1,'Checking', -20),
    new Account($numbers2, 'Savings', 380),
    new Account($numbers3, 'Checking', 155380),
];

$customer = new Customer('Ivy', 'Stone', 'ivy@eg.link', 'Jup!t3r2684', $accounts);
?>

<?php include 'includes/header.php'; ?>
<h2>Name: <b><?php echo $customer->get_fullname(); ?></b></h2>

<table>
    <tr>
        <th>Account Number</th>
        <th>Routing Number</th>
        <th>Account Type</th>
        <th>Balance</th>
        <th>Password</th>
    </tr>
    <?php foreach ($customer->accounts as $account) { ?>
        <tr>
            <td><?php echo $account->number->account_number; ?></td>
            <td><?php echo $account->number->routing_number; ?></td>
            <td><?php echo $account->type; ?></td>
            <?php if ($account->get_balance() >= 0) { ?>
                <td class="credit">
            <?php } else { ?>
                <td class="overdrawn">
            <?php } ?>
            $ <?php echo $account->get_balance(); ?></td>
            <!-- I tried to see the password, but since its private
             it can't been seen. Its considered undefined outside of the
             class -->
            <td><?php echo $account->password; ?></td>
        </tr>
    <?php } ?>
</table>

<?php include 'includes/footer.php' ?>