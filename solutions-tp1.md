## Mission 1 :

Le résultat de la commande git log dans le dossier "moodle": 
```
Author : Jun Pataleta <jun@moodle.com>  
Date : Sat Jan 14 14:17:03 2023 +0800  
Moodle release 4.1.1  
```
#### M01.a J'ai utilisé la méthode git pour télécharger le code.    
#### M01.b Le dossier créé s'appelle "moodle" et contient le code de Moodle.  

#### M01.c) La commande ```git log``` permet de lister tous les fichiers et dossiers qui commencent par ```.g``` dans le répertoire courant :  
```
.gherkin-lintrc  
.git  
.gitattributes  
.github  
.gitignore  
.grunt  
```

## Mission 2 :

#### m02.a) : ```cp config-dist.php ../config-PATP01129302.php ```  
- Cette commande copie le contenu du fichier "config-dist.php" vers le dossier parent sous le nom de "config-PATP01129302.php"  

#### m02.b) Après avoir utilisé la commande ```vim``` pour éditer les valeurs, voici le résultat :  
```
$CFG->dbname    = 'patp01129302';  
$CFG->dbuser    = 'patp01129302';  
$CFG->dbpass    = 'patp01129302';  
```

#### m02.c) ```grep -i "patp01129302" ../config-PATP01129302.php  ``` 
- La commande ```grep``` recherche toutes les lignes qui contiennent la chaîne de caractères : "patp01129302" dans le fichier "config-PATP01129302.php".   
- L'option ```-i``` indique que la recherche doit être insensible à la casse.


## Mission 3 :
```ln -s ../config-PATP01129302.php config.php   ```  
- La commande permet de créer un lien symbolique nommé *"config.php"* dans le dossier racine du code source.

## Mission 4 :
```count=0; for d in $(find . -maxdepth 4 -type d -not -path '*/\.*'); do if [ -d "$d" ]; then count=$((count+1)); fi; done; echo $count```  
- Cette commande parcours chaque dossier à une profondeur de 4 sous-arbres du dossier courant (*"moodle"*) et incrémente la variable ```count``` si le chemin trouvé est un dossier.

## Mission 5 :
```grep -rinw 'dougiamas' admin | awk -F ":" '{print $1 " -> Ligne: " $2}' > ../M05.txt ``` 

- ```grep -rinw 'dougiamas' admin ```: Recherche récursive dans le dossier admin (et ses sous-dossiers) du mot dougiamas sans tenir compte de la casse ```-i```, avec affichage des numéros de ligne ```-n``` et des noms de fichiers correspondants ```-w```.  
- ``` awk -F ":" '{print $1 " -> Ligne: " $2}' ``` : pour chaque ligne retournée par ```grep```, on découpe la chaîne au niveau des ```:``` grâce à la commande ```awk```, et on affiche le nom du fichier suivi de la chaîne " -> Ligne: " et du numéro de ligne.  
- ```> ../M05.txt"``` : redirection de la sortie de la commande vers le fichier *"M05.txt"* situé à la racine du dossier de code source.  

## Mission 6 : 

```cat ../Téléchargements/phptag.php && echo && grep -B 5 -A 25 'function get_home_page' /lib/moodlelib.php > ../get_home.php  ```
- ```cat ../Téléchargementséphptag.php && echo``` affiche le contenu du fichier phptag.php suivi d'une ligne vide.  
- ```grep -B 5 -A 25 'function get_home_page' lib/moodlelib.php``` recherche la ligne qui contient la déclaration de la fonction "get_home_page" dans le fichier *"moodlelib.php"* et affiche les 5 lignes précédentes et les 25 lignes suivantes.  
- ```> ../get_home.php``` redirige la sortie vers un nouveau fichier *"get_home.php"* dans le dossier parent du dossier des codes sources.  


## Mission 7 : 

```find /home/patp01129302/moodle -name "*.zip" > M07.txt   ```
- ```find``` est une commande qui permet de chercher des fichiers dans un répertoire donné.  
- *"/home/patp01129302/moodle"* est le répertoire à partir duquel la recherche doit être effectuée.  
- ```-name "*.zip"``` spécifie que la recherche doit être effectuée uniquement sur les fichiers dont l'extension est .zip.  
- ``` -printf "%f\n" ``` spécifie le format de sortie. ```%f``` renvoie le nom de fichier sans le chemin absolu et ```\n``` ajoute une nouvelle ligne après chaque nom de fichier. 
- ``` > ``` est utilisé pour rediriger la sortie vers un fichier, dans ce cas *"M07.txt"*.  


## Mission 8 :

#### M08.a) : ```shc -f /home/patp01129302/Téléchargements/moi.sh -o M08  ```
- La commande permet de compiler le fichier executable *"moi.sh"* et de générer un exécutable nommé *"M08" * 

#### M08.b) 2 fichiers sont crées : *"M08"* et *"moi.sh.x.c"*  

#### M08.c) Le premier est un fichier exécutable nommé *"M08"* de type ```Fichier exécutable ELF 64 bits``` et le second est un fichier de type ```C source```.  
- Les commandes sont respectivement : ```file M08``` et ```file ../Téléchargements/moi.sh.x.c```

#### M08.d) La commande ```./M08``` affiche le nom d'utilisateur actuel  

#### M08.e) Fichiers crées : *"M08"* et *"moi.sh.x.c"* (Fichiers annexés dans le rapport)  


## Mission 9:

#### M09.a) 20230116

#### M09.b)``` date -d "2023-01-16 00:00:00" +%s  ```
- ```date``` est la commande qui permet de manipuler les dates et les heures.  
- ```-d``` est l'option qui permet de spécifier une date et une heure.  
- ```2023-01-16 00:00:00``` est la date et l'heure que nous voulons convertir en nombre de secondes écoulées depuis epoch.  
- ```+%s``` est l'option qui permet d'afficher la date en nombre de secondes écoulées depuis epoch.  


#### M09.c) ```touch -t 202301160000.00 version.php ``` 
- La commande ```touch -t"``` permet de spécifier la date et l'heure exacte à laquelle lefichier doit être modifié.

#### M09.d) ```stat -c %y version.php  ```
Résultat affiché : 2023-01-16 00:00:00.000000000 -0500

- ```stat``` est utilisé pour afficher des informations détaillées sur un fichier donné  
- ```-c``` est utilisé pour spécifier le format de sortie des informations, dans ce cas ```%y``` qui représente la date/heure de dernière modification du fichier au format   "année-mois-jour heure:minute:seconde"  

#### M09.e) Réponse : 1673845200  
Commande : ```expr $(date -r version.php '+%s') - 0```  

- ```date -r version.php '+%s'``` renvoie le nombre de secondes écoulés depuis "epoch" jusqu'à cette date  
- ```expr``` est une commande qui permet d'évaluer des expressions mathématiques.  
- ```$(commande)``` est une syntaxe qui permet d'insérer le résultat de la commande commande dans l'expression.  
- ```- 0``` soustrait 0 de la valeur du timestamp, ce qui a pour effet de conserver la valeur du timestamp et de convertir le résultat en nombre entier.  

## Mission 10
#### M10.a) ```chmod u=rx,g=w,o=r ../Téléchargements/moi.sh  ```

- ```u=rx``` attribue les permissions de lecture et d'exécution à l'utilisateur propriétaire.  
- ```g=w``` attribue la permission d'écriture au groupe propriétaire.  
- ```o=r``` attribue la permission de lecture aux autres utilisateurs.  

#### M10.b) ```chmod 754 ../Téléchargement/moi.sh  ```

- Le chiffre "7" attribue les permissions de lecture, écriture et exécution à l'utilisateur propriétaire.  
- Le chiffre "5" attribue les permissions de lecture et d'exécution au groupe propriétaire.  
- Le chiffre "4" attribue la permission de lecture aux autres utilisateurs.  


## Mission 11:
#### M11.a) ```du -ah | grep '.php\.PHP' | sort -rh | head -n 5  ```

- ```du -ah``` permet de lister tous les fichiers du répertoire courant, avec leur taille en format lisible par l'humain ```-h``` et en incluant les fichiers cachés ```-a```. 
- ``` grep '.php\|.PHP' ``` permet de filtrer les résultats pour n'afficher que les fichiers dont le nom contient l'extension ".php" ou ".PHP".  
- ```sort -rh``` trie les résultats en ordre décroissant ```-r``` en se basant sur la taille des fichiers, en utilisant un format lisible par l'humain ```-h```.  
- ```head -n 5``` affiche les 5 premières lignes de résultats.  


#### M11.b) Résultat de la commande :  
```6,0M	./lib/phpspreadsheet  
5,9M	./lib/phpspreadsheet/vendor  
5,4M	./lib/phpspreadsheet/vendor/phpoffice/phpspreadsheet  
5,4M	./lib/phpspreadsheet/vendor/phpoffice  
5,3M	./lib/phpspreadsheet/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet  ```
