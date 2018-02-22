<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Index</title>
    </head>
    <body>
        <div>Un "hello world" en html</div>
        <?php echo 'Un second "hello world" en php'; ?>
        <h2>Les variables en php</h2>
<?php
//String
$variable = 'Jean';
$variable = "Jean";
echo $variable;
//Retour à la ligne (balise html)
echo "<br/>";
//Integer
$variable = 2;
echo $variable;
echo "<br/>";
//Float
$variable = 2.4;
echo $variable;
echo "<br/>";
//Boolean
$variable = true;
echo $variable;
echo "<br/>";
//Null
$variable = NULL;
echo $variable;
echo "<br/>";
//Concaténation
$age_du_visiteur = 25;
echo "Le visiteur a $age_du_visiteur ans";
echo "<br/>";
echo 'Le visiteur a $age_du_visiteur ans'; // Ne fonctionne pas avec simple guillemet
echo "<br/>";
echo "Le visiteur a ".$age_du_visiteur." ans";
echo "<br/>";
echo 'Le visiteur a '.$age_du_visiteur.' ans'; // Par contre là ça fonctionne avec simple guillemet ! Magique !
//Liste et tableau (dictionnaire)
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
echo "<br/>";
echo $fruits;
echo "<br/>";
print $fruits;
echo "<br/>";
print_r($fruits);
echo "<br/>";
//Et depuis php5.4, vous pouvez également utiliser la syntaxe courte, qui remplace array() par [].
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo $array["foo"];
echo $array[0]; //Ne retourne rien car la clé 0 n'existe pas. Il s'agit d'un tableau et non d'une liste.
echo "<br/>";
echo $fruits["numbers"][0];
?>
    </body>
</html>
