<?php require('partials/header.php'); ?>

    <table>
    <form method="POST" action="/groceries/create">
        <tr>
            <td>Naam: </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Aantal: </td>
            <td><input type="number" name="number"></td>
        </tr>
        <tr>
            <td>Prijs: </td>
            <td><input type="number" name="price"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Invoeren</button></td>
        </tr>
        </form>
    </table>
    
<?php require('partials/footer.php'); ?>