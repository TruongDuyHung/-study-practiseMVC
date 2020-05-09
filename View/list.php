<?php
?>
<div>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        <?php foreach ($customers as $key => $customer) { ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $customer->name ?></td>
                <td><?php echo $customer->email ?></td>
                <td><?php echo $customer->address ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
