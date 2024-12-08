<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = $i * $multiplier;
            }
            return $results;
        }

        $multiplier = 2; 
        $results = multiplication($multiplier);
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($results as $no => $answer) : ?>
        <tr>
            <td><?php echo $no + 1; ?></td>
            <td><?php echo $multiplier; ?></td>
            <td><?php echo $answer; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
