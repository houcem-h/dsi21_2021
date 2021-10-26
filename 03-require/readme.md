# Diviser les fichiers

## La fonction require

La fonction `require` est utilisée pour inclure le contenu d'un fichier dans le fichier en cours, et précisément
à l'endroit où on appelle la fonction.
Cette technique fonctionne comme si c'est un genre de copier-coller automatique que PHP fera
au moment de son exécution. Le résultat sera exactement le même que si on a écrit le code du fichier appelé dans la fonction `require` à l'intérieur du fichier en cours.

## Alternatives

La fonction `require` n'est pas la seule fonction PHP dont le rôle et d'inclure le contenu d'un fichier dans un autre fichier. Il y en a quatre au total :

- `require`
- `include`
- `require_once`
- `include_once`

La différence entre `require` et `include` se situe dans leur gestion des erreurs. En effet, si un bug apparaît dans un morceau de PHP intégré via `include`, un simple avertissement apparaîtra et le code poursuivra son exécution dans la mesure du possible. À l'inverse, le moindre souci dans un script intégré via `require` causera une erreur fatale et stoppera totalement l'exécution du programme.

La bonne pratique dans la plupart des cas est de préférer `require` à `include`. On ne souhaite pas poursuivre l'exécution du code en cas de bug, en PHP la philosophie et « ça marche ou ça marche pas », pas « ça marche à moitié ». Vous comprendrez bien vite pourquoi.

De leur côté, `require_once` et `include_once` fonctionnent comme leurs homonymes respectifs, à la différence qu'ils s'assurent que le fichier inclus n'a pas déjà été inclus une précédente fois. Là où `require` fonctionne comme un bête copier-coller et ne se pose aucune question, `require_once` n'inclut le fichier que s'il n'a pas déjà été inclus.

La fonction `require_once` a donc parfois son utilité, mais il faut savoir qu'elle est aussi moins performante que `require`. Dans la plupart des cas, il faut donc essayer de privilégier `require`, et éviter les inclusions multiples en amont grâce à un bon design et une bonne architecture.