<?php
$db = new mysqli("localhost", "root", "", "round59");

// Check for connection errors
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

$result = $db->query("SELECT id, product_name, mfg_name FROM v_product_list1");

// Check if any rows were returned
if ($result->num_rows > 0) {
    echo "<style>
            table {
                border-collapse: collapse;
                width: 30%;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
          </style>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Product Name</th><th>Manufacturer Name</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td>" . $row["mfg_name"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
$db->close();
?>
