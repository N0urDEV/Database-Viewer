<!DOCTYPE html>
<html>
<head>
    <title>Actors Table</title>
    <style>
       table, td, tr{
        border: 1px solid black;
        border-collapse: collapse;
       } 
       
    </style>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th scope="col">actor_id</th>
            <th scope="col">First_name</th>
            <th scope="col">Last_name</th>
            <th scope="col">Last_update</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $connexion = new PDO("mysql:host=localhost;dbname=sakila", "root", "2004@NOUR");
            $requete = $connexion->query('SELECT * FROM ACTOR');
            $actors = $requete->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($actors as $actor) {
                echo "<tr>";
                echo "<td>{$actor['actor_id']}</td>";
                echo "<td>{$actor['first_name']}</td>";
                echo "<td>{$actor['last_name']}</td>";
                echo "<td>{$actor['last_update']}</td>";
                echo "<td>
                        <form method='post'>
                            <input type='submit' name='action' value='modifier'>
                            <input type='submit' name='action' value='supprimer'>
                        </form>
                      </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
</body>
</html>
