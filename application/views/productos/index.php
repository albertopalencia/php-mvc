<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Item
            </th>
        </tr>
        <tbody>
            <?php foreach ($data as $song){ ?>
                <tr>
                    <td><?php if (isset($song->idProductos)) echo $song->idProductos; ?></td>
                    <td><?php if (isset($song->nombre)) echo $song->nombre; ?></td>
                   
                </tr>
            <?php } ?>
            </tbody>
    </table>
</body>
</html>
