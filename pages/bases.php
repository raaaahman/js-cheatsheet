  	<h1>Débuter en Javascript</h1>
</header>
<aside id="index">
	<h2>Table des matières</h2>
	<nav>
		<ul>
			<li><a href="#intro">Javascript, qu'est-ce c'est?</a></li>
			<li><a href="#histoire">Une brève histoire de Javascript</a></li>
			<li><a href="#jouer">Jouons un peu avec Javascript</a></li>
			<li><a href="#commentaires">Les commentaires</a></li>
			<li><a href="#variables">Les variables et leurs types</a></li>
			<li><a href="#instructions">Instructions et expressions</a></li>
			<li><a href="#contexte">Contexte et portée des variables</a></li>
			<li><a href="#conditions">Les conditions</a></li>
			<li><a href="#switch">Les interrupteurs</a></li>
			<li><a href="#boucles">Les boucles</a></li>
			<li><a href="#fonctions">Les fonctions</a></li>
			<li><a href="#tableaux">Les tableaux</a></li>
			<li><a href="#objets">Les objets</a></li>
		</ul>
	</nav>
</aside>
<main class="language-js">
	<!--===============================================================================
	-	INTRODUCTION
	================================================================================-->
  <section id="intro">
	    <h2>Javascript, qu'est-ce c'est?</h2>
	    <p>Javascript est un <strong><a href="https://fr.wikipedia.org/wiki/Langage_de_script" target="_blank">langage de scripts</a> <a href="https://fr.wikipedia.org/wiki/Interpr%C3%A8te_(informatique)"  target="_blank">interprété</a> <a href="https://fr.wikipedia.org/wiki/Programmation_web#Programmation_web_c.C3.B4t.C3.A9_client"  target="_blank">côté client</a></strong> par tous les navigateurs Web. Son utilisation la plus courante est de créer des interactions au sein des pages web, des plus simples jusqu'à de véritables applications web. Il est aujourdh'ui considéré comme le remplaçant du langage <em>Flash/ActionScript</em> et profite de <a href="https://fr.wikipedia.org/wiki/Framework" target="_blank">frameworks</a> très populaires comme <em>jQuery</em>, <em>AngularJS</em> (développé chez Google) et <em>ReactJS</em> (développé chez Facebook).</p>
	</section>
	<!--===============================================================================
	-	HISTOIRE
	================================================================================-->
	<section id="histoire">
		<h2>Une brève histoire de Javascript</h2>
		<p>Développé en 1995 par <em>Brendan Eich</em> comme langage <a href="https://fr.wikipedia.org/wiki/Langage_serveur"  target="_blank">côté serveur</a> pour le compte de la société <abbr title="Netscape Communications Corporation">Netscape</abbr> sous le nom de LiveScript, le langage est renommé JavaScript peu avant sa sortie pour des raisons commerciales. Il gagne sa popularité via son implémentation <a href="https://fr.wikipedia.org/wiki/Programmation_web#Programmation_web_c.C3.B4t.C3.A9_client">côté client</a> dans le navigateur <em>Netscape Navigator 2.0</em> en 1996 avant d'être standardisé par l'<abbr title="European Computer Manufacturers Association">Ecma International</abbr> en 1997 et est depuis implémenté dans tous les navigateurs web. En 2009, la sortie de l'environnement <em>Node.js</em> remet son utilisation <a href="https://fr.wikipedia.org/wiki/Programmation_web#Programmation_web_c.C3.B4t.C3.A9_client" target="_blank">côté serveur</a> au goût du jour.</p>
	</section>
	<!--===============================================================================
	-	JOUER AVEC JS
	================================================================================-->
	<section id="jouer">
		<h2>Jouons un peu avec Javascript</h2>
		<p>L'avantage que Javascript soit interprété directement par le navigateur internet, c'est qu'on peut facilement tester du code à travers celui-ci. En ouvrant la console du navigateur (ouvrez le menu, cherchez un onglet développemment ou outils>développement) il est possible d'écrire directement du code Javascript qui sera directement exécuté. Faites par exemple quelques opérations mathématiques basique et le navigateur calculera les réponses tout seul</p>
		<pre><code>
			3 + 4 // trois plus quatre font sept
			2 * 3 // deux fois trois font 6
			7 - 5 // sept moins cinq est égal à deux
			8 / 4 // huit que divise quatre est aussi égal à deux
		</code></pre>
		<p>Il est aussi possible d'utilisar la <strong>fonction</strong> (les fonctions seront abordées plus tard) "alert()" pour ouvrir une fenêtre en pop-up dans le navigateur.</p>
		<pre><code>
			alert("N'oubliez pas les guillemets")
		</code></pre>
	</section>
	<!--===============================================================================
	-	COMMENTAIRES
	================================================================================-->
	<section id="commentaires">
		<h2>Les commentaires</h2>
		<p>Puisque vous en allez en croiser souvent dans les paragraphes qui suivent, autant vous expliquez directement la notion de commentaires. Les commentaires sont des phrases écrites dans la langue du développeur (quoique que beaucoup préfère les écrire en anglais pour favoriser les échanges avec d'autres développeurs du monde entier) qui ne sont pas lu par l'ordinateur lodsqu'il exécute le script. Cela a un intérêt pratique pour pouvoir se retrouver dans des codes qui peuvent faire jusqu'à plusieurs milliers de lignes, et ils sont cruciaux dans un projet où plusieurs développeurs vont travailler sur le même code, car les manières d'arriver à un résultat donné peuvent varier selon les développeurs.</p>
		<pre><code>
			//Je suis un commentaire mono-ligne, j'aide les développeurs à comprendre leur code
			je suis du texte perdu dans le code, je vais provoquer un erreur à la lecture du script
			/*Je suis un commentaire multi-ligne
			Je peux raconter ma vie sans limite de taille
			et le navigateur n'en saura jamais rien!*/
		</code></pre>
		<h3>Le pseudo-code</h3>
		<p>Une pratique intéressante consiste à commencer par écrire uniquement des commentaires détaillant le code que le développeur va réaliser. Si cela peut paraître rébarbatif, cette pratique peut permettre de prévenir pas mal d'aller et retours dans le code vu qu'elle permet de réfléchir à l'ensemble du fonctionnement de celui-ci avant de s'attarder sur les détails techniques.</p>
	</section>
	<!--===============================================================================
	-	VARIABLES
	================================================================================-->
	<section id="variables">
	    <h2>Les variables</h2>
	    <p>Les variables servent à contenir des données. Chaque variable a un <strong>nom</strong> et une <strong>valeur</strong> d'un certain <strong>type</strong>.</p>
		<h3>Déclaration de variables</h3>
		<p>La déclaration permet de créer une variable et éventuellement de lui associer une valeur (mais ce n'est pas obligatoire)</p>
		<pre><code>
			var chiffre = 1; //Une variable nommée "chiffre" contenant le nombre entier "1"
			var vide; //Une variable nommée "vide" qui n'a pas de valeur associée
		</code></pre>
		p>Comme l'on peut le voir une variable se <strong>déclare</strong> avec le mot clé <code>var</code> suivi de son nom puis éventuellement de la valeur qu'elle contient (précédée du signe "=").</p>
		<h3>Nommage des variables</h3>
		<p>En javascript, les variables les noms donnés aux variables peuvent contenir des lettres, des chiffres, des underscore, le symbole "$" et sont sensibles à la casse. Elles ne peuvent commencer par un chiffre. On privilégie la convention <em>Camel Case</em> qui consiste à écrire les ensemble de mots collés les uns aux autres, en utilisant une majuscules à chaque début de mot.</p>
		<pre><code>
			var MaVariable = "Je suis écrite en Camel Case";
			var mavariable = "Pas moi";
			var maVariable = "Moi, je suis écrite en lowerCamelCase";
			//Notez que ces trois variables sont bien distinctes pour le navigateur, il faut les appeler en respectant leur casse
			var comiquedu42 = "Tu ne serais pas plutôt écrite en dromedaryCase?"; //Ce terme existe aussi, mais il est moins courant...
		</code></pre>
		<h3>Types de variables</h3>
		<p>La valeur contenue dans une variable sera d'un seul type, qui peut être soit un <strong>nombre</strong>, soit une <strong>chaîne</strong> de caractères, soit un <strong>booléen</strong> (une valeur primaire exprimé par <code>true</code> ou <code>false</code>).
	    <pre><code>
	    	var nombre = 8; //N'importe quel nombre entier ou décimal, positif ou négatif
	    	var chaine = "Je suis une chaîne de caractère"; //Une simple lettre (voire juste un espace) ou un texte entier
	    	//Notez qu'il est obligatoire d'écrire les guillemets sans quoi Javascript ne réalisera pas qu'il s'agit d'une chaîne
			var booleen = true; //Je suis un booléen, en Vrai
	   	</code></pre>
	   	<p>Comme dans la plupart des langages de script, les variables Javascript seront du même type que la valeur qu'on leur assigne, on parle de <strong><a href="dictionnary.html#dynamic_typing" target="_blank">typage dynamique</a></strong>. Les types de variables ne se mélangent pas, mais Javascript peut faire une conversion de type dans le cas où l'on voudrait ajouter un chiffre à une chaîne de caractère.</p>
		<pre><code>
			var chiffre = 8;
			var chaine = "On se voit le ";
			alert(chaine + chiffre); // "On se voit le 8", la valeur contenue dans chiffre fait maintenant partie de la chaîne

			var nombre = 23;
			var secondNombre = "2";
			alert(nombre + secondNombre); // "232", Javascript ne réalise que les conversions de nombres en chaîne, mais pas l'inverse!
		</code></pre>
		<h3>Appel de variables</h3>
		<p>Il est possible d'accéder au contenu d'une variable en écrivant simplement son nom dans le code sans aucun artifice.</p>
		<pre><code>
			var mot = "Palindrome";
			alert(mot); //Affiche "Palindrome", qui est notre mot
		</code></pre>
	</section>
	<!--===============================================================================
	-	INSTRUCTIONS ET EXPRESSIONS
	================================================================================-->
	<section id ="instructions">
		<h2>Instructions et expressions</h2>
		<p>Javascript permet de traiter les données contenues dans ses variables via des opérateurs (arithmétiques, par exemple, car il y en d'autres):</p>
		<pre><code>
			var nb1 = 1, nb2 = 2;
			var result = 0;
			result = nb1 + nb2; //On additionne les nombres 1 et 2 contenus dans les variables
			alert(result); //Affiche 3, le résultat de l'addition précédente
		</code></pre>
		<p>Cette instruction indique au navigateur qu'il faut effectuer une opération et va changer le résultat d'une des variables (ici "result"), ce qu'il ne faut pas confondre avec une expression!</p>
		<pre><code>
			var nb1 = 1, nb2 = 2;
			var result = 0;
			result == nb1 + nb2; //Cette expression retourne le booléen false
			//car result est égal à zéro et nb1 + nb2 est égal à trois
		</code></pre>
		<p>Une expression ne modifie pas la valeur d'une variable, elle vérifie uniquement un état de fait au moment où elle est invoquée.</p>
	</section>
	<!--===============================================================================
	-	CONDITIONS
	================================================================================-->
	<section id="conditions">
	   	<h2>Les conditions</h2>
	   	<p>Les conditions décident d'exécuter ou non des blocs de code selon la valeur d'une expression, dont elles attendent un résultat sous forme de booléen <code>true</code> ou <code>false.</code></p>
	   	<pre><code>
	   		if (animal == "chat") {
	   			alert(animal + " dit: miaouh...");
	   	}
	   </code></pre>
	   <p>Une condition fausse ne sera pas exécutée, par contre, si elle est suivi d'un bloc de condition <code>else</code> ce bloc de code sera lui exécuté.</p>
	   <pre><code>
	   		if (animal == chat) {
	   			alert(animal + " dit: miaouh...");
	   		} else {
	   			alert(animal + " dit: wouaf wouaf!");
	   		}
	   	</pre></code>
	   	<p>Bon ce n'est pas très juste puisqu'il y a plus d'espèces animales que simplement les chats et les chiens. Dans ce cas, on peut enchaîner plusieurs blocs de conditions avec le mot clé <code>else if</code>:</p>
	   	<pre><code>
	   		if (animal == "chat") {
	   			alert(animal + " dit: miaouh...");
	   		} else if (animal == "chien") {
	   			alert(animal + " dit: wouaf wouaf!");
	   		}
	   	</pre></code>
	   	<p>Et on peut en enchaîner autant que l'on veut! Mais ce n'est pas toujours très pratique, alors...</p>
	</section>
	<!--===============================================================================
	-	INTERRUPTEURS
	================================================================================-->
	<section id="switch">
		<h2>Les interrupteurs</h2>
		<p>... On peut utiliser à la place un <code>switch</code> qui est similaire à une série de conditions <code>if ... else if</code>:</p>
		<pre><code>
			switch (animal) {//On vérifie la valeur de la variable animal
				case "chat": //Si notre animal est un chat
					alert(animal + "dit: miaouh..."); //Alors il miaule
					break; //Fin de l'instruction, les autres possibilité du switch ne sont pas vérifiées ni exécutées
				case "chien": //Si notre animal est un chien...
					alert(animal + "dit: wouaf! wouaf!");
					break;
				default: //Si notre animal ne correspond à aucune possibilité renseignée dans le switch
				//alors c'est cette instruction qui sera exécutée
					alert("Je ne connais pas cet animal");
					break;
			}//On ferme la bloc switch
		</code></pre>
		<p>Veillez à ne pas oublier d'utiliser l'instruction <code>break</code>, elle sert à sortir du bloc de code en cours (ici notre <code>switch</code>). Si vous ne le faites pas, le navigateur exécutera toutes les instructions suivantes dans notre bloc, ce qui peut être fâcheux, mais qui peut également nous servir dans certains cas:</p>
		<pre><code>
			switch (animal) {
				case "chat":
				case "chien":
				case "poisson rouge":
					alert("C'est un animal de compagnie.");
					break;
				case "crocodile":
				case "tigre":
				case "rhinocéros":
					alert("Ce n'est surtout pas un animal de compagnie!");
					break;
				default:
					alert("Je ne connais pas cet animal");
					break;
			}
		</code></pre>
	</section>
	<!--===============================================================================
	-	BOUCLES
	================================================================================-->
	<section id="boucles">
	   <h2>Les boucles</h2>
	   <p>Les boucles permettent de répéter une instruction tant qu'une condition est vraie.</p>
	   <pre><code>
	   		while (oxygen > 0) {
	   			//Je peux respirer
	   	}
	   </code></pre>
	   <p>Bon là notre boucle peut tourner pendant très longtemps, vu que l'oxygène sur terre se recycle, il y a donc risque de <strong>boucle infinie !</strong> Souvent, on utilise des variables pour compter le nombre d'itération d'une boucle et l'arrêter après un certain nombre de tours, on utilise généralement les boucles <code>for</code> :</p>
	   <pre><code>
	   		for (var compteur = 0; compteur < 100; compteur++) { //On déclare une variable
	   		//on assigne une condition à la boucle
	   		//et on indique une action qui s'effectuera à chaque tour de boucle
	   			alert(compteur); //Au premier tour l'alerte indiquera "1", au second "2", etc.
	   		}
	   	</code></pre>
	   	<p>Notons que l'on est pas obligé de déclarer ni d'incrémenter une variable avec une boucle <code>for</code>, ce qui nous ramène à la même utilité qu'une boucle <code>while</code> (n'oubliez pas les point-virgules)!</p>
	   	<pre><code>
	   		for (; niveauMer < maVille;) {
	   		//Je ne me noie pas
	   	}
	   </code></pre>
	</section>
	<!--===============================================================================
	-	CONTEXTE
	================================================================================-->
	<section id="contexte">
		<h2>Contexte et portée des variables</h2>
		<p>Quel que soit le langage de programmation, le code est toujours éxécuté dans un <strong>contexte</strong> particulier.</p>
		<h3>Le contexte global</h3>
		<p>En Javascript, le code écrit directement sur la page est éxécuté dans le <strong>contexte global</strong>, ce qui revient à exécuter les instructions de bout en bout jusqu'à la fin du code, sans restrictions particulières. Toutes les variables déclarées dans le contexte global sont accessibles à n'importe quel endroit du code, on dit de ces variables qu'elles ont une <strong>portée globale</strong>.</p>
		<h3>Les blocs de code</h3>
		<p>Les conditions ou les boucles (entre autres) vont créer un nouveau contexte qui éxécutera (ou non) du code, on parle de <strong>bloc de code</strong> et ces blocs sont entourés d'accolades.</p>
		<pre><code>
			var verite = true;
			var laPalisse = "Alors tout va bien";
			if (verite == true ) { //Début de bloc
				alert(laPalisse);
			} //Fin de bloc
		</code></pre>
		<p><mark>En Javascript</mark>, il n'y a pas vraiment de différence entre le code qui se trouve dans des blocs de conditions ou des boucles et du code qui se trouve dans le contexte global, les variables sont accessibles depuis le contexte global dans les blocs et depuis les blocs dans le contexte global. Seulement ce n'est plus vrai lorsqu'il s'agit de bloc de <strong>fonctions</strong>.</p>
	</section>
	<!--===============================================================================
	-	FONCTIONS
	================================================================================-->
	<section id="fonctions">
	    <h2>Les fonctions</h2>
	    <p>Les fonctions permettent une réutilisation de blocs de code. Elle définissent leur propre contexte dans lequel des variables déclarées sont indépendantes du reste du code.</p>
	    <pre><code>
	    	variableGlobale = 0;
	    function maFonction () {
	    	var variableLocale = 0; //On définit une variable qui sera utilisée uniquement dans la fonction
	    	variableLocale += 1; //On peut effectuer des opérations dessus
	    	variableGlobale += 1; //On peut aussi effectuer une opération sur une variable déclarée hors de la fonction
	    	return variableLocale; //La fonction renvoie la valeur(!) contenue dans sa variable locale
	    }
	    </code></pre>
	    <p>L'instruction <code>return</code> interrompt l'exécution de la fonction et permet de récupérer une <strong>valeur</strong>, et uniquement une valeur contenue dans une variable. Essayez d'utiliser le nom de la variable locale hors du bloc de la fonction pour récupérer la valeur qu'elle contient retournera une erreur. Pour utiliser cette valeur on fera alors un <strong>appel</strong> à la fonction:</p>
	    <pre><code>
	    	maFonction(); //On appelle maFonction, qui s'exécute. Seulement sa valeur de retour n'est pas mémorisée.
	    	var result = maFonction(); //Ici la variable result sera égale à la valeur que retourne maFonction, soit 1 (voir plus-haut)
	    </code></pre>
	    <p>En bref, on peut mettre n'importe quel bloc de code dans une fonction, qui s'exécutera à chaque fois que l'on appelle la fonction. Seulement il faut bien faire attention à l'appeler dans un contexte qui correspond à sa ... fonction (stocker son résultat dans une variable lorsqu'elle retourne une valeur, après la déclaration d'une variable globale qu'elle utilise, avant un bloc de code qui se sert de son résultat, etc.)</p>

	    <h3>Les paramètres</h3>
	    <p>Les fonctions peuvent inclure des paramètres (similaires à des variables locales) qui servent à modifier les valeurs sur laquelle la fonction va travailler.</p>
	    <pre><code>
	    	function maFonction (paramètre1, paramètre2) {
	    	return paramètre1 + paramètre2;
	    } //La fonction effectue une addition avec les deux nombres que l'on aura passé en paramètres
		</code></pre>
		<p>On peut donc utiliser cette fonction pour n'importe quelles valeurs que l'on veut additionner, par contre il faut faire attention à lui passer des paramètres du type qu'elle attend (ici, des nombres), sinon le résultat risque d'être... décevant.</p>
	</section>
	<!--===============================================================================
	-	TABLEAUX
	================================================================================-->
	<section id="tableaux">
		<h2>Les tableaux</h2>
		<p>Les tableaux servent à contenir plusieurs données, potentiellement de plusieurs types différents. Ils agissent comme une série de variables, en quelque sorte.</p>
		<pre><code>
			var monTableau = ["Orange", "Banane", 4, true];//Declartion littérale d'un tableau avec 4 entrées
		</code></pre>
		<p>Un tableau comprend plusieurs <strong>entrées</strong> qui sont réérencées par des <strong>index</strong> qui permettent d'accéder à leur contenu. Dans notre exemple précédent:</p>
		<pre><code>
			alert(monTableau[0]); //Affiche "Orange"
			alert(monTableau[2]); //Affiche 4
		</code></pre>
		<p>On peut donc accéder aux différentes valeurs de notre tableau grâce à leur index qui représente leur position dans ce tableau. Attention, les tableau sont <strong>indexés à partir de zéro</strong>, ce qui signifie que la première entrée du tableau aura l'index <var>0</var>, la seconde <var>1</var> et ainsi de suite... Egalement on peut tout à fait accéder à une entrée non rensignée (par exemple en entrant un index très grand) et le tableau retournera la valeur spéciale <code>undefined</code>.</p>

		<h3>La propriété <code>length</code></h3>
		<p>Il existe une propriété des tableaux dont l'on se sert très souvent qui est <code>length</code>, elle permet de retourner une valeur de type nombre qui correspond à <strong>l'index le plus grand, plus 1</strong>.</p>
		<pre><code>
			alert(monTableau.length); //Affiche le nombre 4
		</code></pre>
		<p>Dans de nombreux cas cela correspond au nombre d'entrées du tableau, mais attention: si une entrée du tableau est vide, elle sera quand même comptabilisée, tant qu'il existe une entrée d'index plus grand! Exemple:</p>
		<pre><code>
			var nouveauTableau = ["rat", "lapin", "castor"]; //Un tableau à trois entrées
			nouveauTableau[12] = "souris"; //On insère une nouvelle entrée plus loin dans le tableau
			alert(nouveauTableau.length); //Affiche la valeur 13, puisque le plus grand index est 12!
		</code></pre>
	</section>
	<!--===============================================================================
	-	OBJETS
	================================================================================-->
	<section id="objets">
		<h2>Les objets</h2>
		<p>Les objets sont un autre type de conteneur de données, et ils sont extrêmement versatiles. Un objet se compose de plusieurs <strong>propriétés</strong>, qui peuvent être des variables, des tableaux, voire même d'autres objets!</p>
		<pre><code>
			monObjet = {
				variable1 = 2,
				tableau1 = ["Chou", "Patate"],
				sousObjet = {
					sousVariable = "Salut"
				}
			}
		</code></pre>
		<p>On peut accéder à tout moment aux propriétés d'un objet global en renseignant son nom et le nom de sa propriété attitrée.</p>
		<pre><code>
			alert(monObjet.variable1); //Affiche 2, puisque c'est la valeur de la variable1 de monObjet
			monObjet.tableau1[0] += "-fleur"; //Je modifie la valeur de l'entrée d'index 0 du tableau1 de monObjet
			alert(monObjet.tableau1[0]); //Affiche "Chou-fleur", puisque j'ai modifé sa valeur à la ligne du dessus
		</code></pre>
		<h3>Les méthodes</h3>
		<p>Les méthodes sont des fonctions qui s'appliquent uniquement aux objets auxquelles elles sont rattachées, on s'en sert généralement avec le mot clé <code>this</code>, qui fait référence à l'objet qui contient la fonction.</p>
		<pre><code>
			monObjet = {
				variable1 = 5;
				saMethode = function () { //On déclare la méthode
					this.variable1 --;
					//On définit une action sur la variable locale
				}
			}
			//On appelle maintenant la méthode
			monObjet.saMethode();
			alert(monObjet.variable1); //Affiche 4
			//Puisque la méthode à décrémenté cette variable de 1
		</code></pre>
	</section>
</main>
