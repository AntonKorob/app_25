<?php
require_once '../config/config.php';
require_once '../Classes/DB_conn.php';
$db = new database($pdo);
$rows = $db->getPrice();


require "../layout/header.php";
?>
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $val){ ?>

            <tr>
                <th scope="row"><?php echo $val[0]; ?></th>
                <td><?php echo $val[1]?></td>
                <td><?php echo $val[2]?></td>
                <td class=" w-25"><?php echo $val[3]?></td>
            </tr>
            <?php } ;?>
        </tbody>
    </table>

</div>
<?php
require "../layout/footer.php";
?>