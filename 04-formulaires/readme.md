# Paramétrer un formulaire pour l'utiliser en `PHP`

## Paramètre 1
On doit ajouter un button de type `submit`
```php
<button type="submit" class="btn btn-primary">Submit</button>
```

## Paramètre 2
on doit ajouter un attribut `action` à la balise ouvrante de l'élèment `form`, ayant comme valeur le nom du fichier qui va recevoir les données
```php
<form action="traitement.php">
```

## Paramètre 3
on doit ajouter un attribut `method` à la balise ouvrante de l'élèment `form`, ayant comme valeur la méthode utilisée pour l'envoi des données
```php
<form action="traitement.php" method="post">
```

## Paramètre 4
on doit ajouter un attribut `name` à la balise de l'élèment `input` pour qu'il soit envoyé, ayant comme valeur un nom unique qui servira à identifier l'input
```php
<input type="email" name="email">
```
