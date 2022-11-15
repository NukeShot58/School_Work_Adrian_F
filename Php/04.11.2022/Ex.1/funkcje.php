<?php 
function show_users(){
    require_once('conn.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $conn = new mysqli($servername,$username,$password,$dbname);
    }
    catch(mysqli_sql_exception $e)
    {
        echo "Błąd połączenia";
        exit();
    }

    $sql = "SELECT id,imie, nazwisko, login, email FROM users";
    $result = $conn->query($sql);
    echo '<form method="post">';
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Imie</th>';
    echo '<th>Nazwisko</th>';
    echo '<th>Login</th>';
    echo '<th>Email</th>';
    echo '<th></th>';
    echo '</tr>';
    
    while($records = $result->fetch_assoc()){
        echo '<tr>';
        $id = $records['id'];
        foreach($records as $record){
            echo '<td>' . $record . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    $result->free_result();
    $conn->close();

}

?>