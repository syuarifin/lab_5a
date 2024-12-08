<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>
<DOCTYPE html>
    <html>
        <head>
            <title>Student Table</title>
        </head>
        <body>
    <table border = 1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['program']); ?></td>
                    <td><?php echo htmlspecialchars($student['age']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </body>
    </html>
    
