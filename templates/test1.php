<?php
/**
 * @var array $data
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Test Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>My test page</h1>
    <table>
        <thead>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
<?php foreach ($data as $row) : ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']) ?></td>
            <td><?php echo htmlspecialchars($row['name']) ?></td>
        </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
