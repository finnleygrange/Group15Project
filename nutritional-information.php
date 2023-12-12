<?php
include("includes/views/header.php");
include("includes/config.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM nutritionalinformation";
$result = mysqli_query($con, $sql);
?>


<div class="main-container">
    <div class="nutrition-table">
        <h2>Nutritional Information Table</h2>
        <table>
            <thead>
                <tr>
                    <th>FoodID</th>
                    <th>FoodName</th>
                    <th>CalorieCount</th>
                    <th>Protein</th>
                    <th>Carbohydrates</th>
                    <th>Fat</th>
                    <th>Fiber</th>
                </tr>
            </thead>
            <tbody>
                <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["FoodID"] . "</td>";
                    echo "<td>" . $row["FoodName"] . "</td>";
                    echo "<td>" . $row["CalorieCount"] . "</td>";
                    echo "<td>" . $row["Protein"] . "</td>";
                    echo "<td>" . $row["Carbohydrates"] . "</td>";
                    echo "<td>" . $row["Fat"] . "</td>";
                    echo "<td>" . $row["Fiber"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No data available</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class = "nutrion-table-btn">
        <button type = "button">Add</button>
        <button type = "button">Remove</button>
        <button type = "button">Edit</button>
        <Style> /* Tried to stlye it in the table.css but didnt work for some reason*/
       .main-container {
        position: relative;
    }

    .nutrion-table-btn {
        position: absolute;
        bottom: 140px; /* Adjust the distance from the bottom */
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
    }

    .nutrion-table-btn button {
        padding: 10px 20px;
        margin: 0 10px;
        font-size: 16px;
        cursor: pointer;
       background-color: #483D8B; /*  Change to any colour youse want */
        color: white;
        border: none;
        border-radius: 5px;
    }

    .nutrion-table-btn button:hover {
        background-color: #6A5ACD;
    }
        </Style>
    </div>
</div>
<?php
mysqli_close($con);