<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q3</title>
</head>
<body>
<?php
// Function to generate a multiplication table
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

// Call the function with a given multiplier
$multiplier = 10; // Change this number as needed
$table = multiplication($multiplier);
?>
<table border="1">
       <tr>
           <th>No</th>
           <th>Multiplier</th>
           <th>Answer</th>
       </tr>
       <?php foreach ($table as $row): ?>
       <tr>
           <td><?php echo htmlspecialchars($row['no']); ?></td>
           <td><?php echo htmlspecialchars($row['multiplier']); ?></td>
           <td><?php echo htmlspecialchars($row['answer']); ?></td>
       </tr>
       <?php endforeach; ?>
   </table>
</body>
</html>