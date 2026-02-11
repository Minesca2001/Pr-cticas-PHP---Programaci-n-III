<h1>Panel de Control - Tienda Tech</h1>
<table border="3">
    <?php foreach ($datos as $item): ?>
        <tr>
            <td>
                <?php echo $item['campo1']; ?>
            </td>
            <td>
                <?php echo $item['campo2']; ?>
            </td>
            <td>
                <?php echo $item['campo3']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>