<?php require('partials/header.php'); ?>

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
                <th>Subtotaal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($groceries as $item) : ?>
                <tr>
                    <td><?= $item->name; ?></td>
                    <td class="productPrice"><?= number_format((float)$item->price, 2, ".", ""); ?></td>
                    <td><input type="number" class="productQuantity" value=<?= $item->number; ?>></td>
                    <td class="productTotalCost"><?= number_format((float)getTotalItemCost($item), 2, ".", "");?></td>
                <tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Totaal</td>
                <td class="totalCost"><?= number_format((float)getTotalCost($groceries), 2, ".", ""); ?></td>
            </tr>
        </tfoot>
    </table>

<?php require('partials/footer.php'); ?>