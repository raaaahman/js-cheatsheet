
  	<h1>Le <abbr title="Document Object Model">DOM</abbr></h1>
</header>
<aside id="index">
  <h2>Table des matières</h2>
  <ul>
  	<li><a href="#intro">Introduction au <abbr title="Document Object Model">DOM</abbr></a></li>
  	<li><a href="#recuperer">Récupérer les noeuds du <abbr title="Document Object Model">DOM</abbr></a></li>
  	<li>
  		<a href="#proprietes">Propriété des noeuds</a>
  		<ul>
  			<li><a href="#parents">Parents et descendants</a></li>
  			<li><a href="#noeud-infos">Informations sur les noeuds</a></li>
  		</ul>
  	</li>
  	<li>
  		<a href="#manipulation">Manipulation du <abbr title="Document Object Model">DOM</abbr></a>
  		<ul>
  			<li>
  				<a href="#creer">Créer des noeuds</a>
  			</li>
  		</ul>
  	</li>
  	<li>
  		<a href="#evenements">Les événements Javascript</a>
  		<ul>
  			<li><a href="#ecouteurs"></a></li>
  		</ul>
  	</li>
  </ul>
</aside>
<main class="language-js">
	<section id="intro">
		<h2>Introduction au <abbr title="Document Object Model">DOM</abbr></h2>
		<p>Le <abbr title="Document Object Model">DOM</abbr> est une <abbr title="Application Programming Interface">API</abbr> pour les documents <abbr title="HyperText Mark-up Language">HTML</abbr> et <abbr title="eXtensible Mark-up Language">XML</abbr>.</p>

		<p>Le <abbr title="Document Object Model">DOM</abbr> se base sur la <strong>structure en arbre</strong> de ces formats pour constituer une représentation où chaque élément du document est un <strong>noeud</strong> qui descend d'un <strong>parent</strong> (un autre noeud donc) jusqu'à remonter au navigateur (la fenêtre).</p>

		<p>Les navigateurs créent le <abbr title="Document Object Model">DOM</abbr> au chargement de la page <abbr title="HyperText Mark-up Language">HTML</abbr>, il n'existe pas en dehors du navigateur.</p>

		<p>Le <abbr title="Document Object Model">DOM</abbr> fourni une interface qui permet au développeur d'interagir avec la page Web à travers du code Javascript natif. Des frameworks (comme jQuery) étendent ces possibilités d'interactions ou les rendent plus faciles à mettre en oeuvre.</p>
	</section>
  	<section id="recuperer">
  		<h2>Récupérer les éléments <abbr title="HyperText Mark-up Language">HTML</abbr></h2>
  		<p>Javascript fourni des fonctions natives qui permettent de trouver des noeuds pour préparer de futures interactions. Ce sont des méthodes de l'<em>objet</em> "document".</p>
		<ul>
		<li><code>document.getElementsByTagName("element")</code> permet de récupérer un tableau contenant tous les noeuds qui correspondent au type de balise passé en paramètre.</li>
		<li><code>document.getElementByClassName("classe")</code> permet de récupérer un tableau contenant tous les noeuds qui possèdent la classe spécifiée en paramètre</li>
		<li><code>document.getElementById("id")</code> permet de récupérer l'unique noeud dont l'<abbr title="identifiant">id</abbr> correspond au nom spécifié en paramètre</li>
		</ul>

		<p>Il existe d'autres méthodes pour des sélections spécifiques, mais il y a largement de quoi faire avec ces trois là, qui sont les plus usitées.</p>

		<p>Les éléments ainsi récupérer peuvent être immédiatement traités ou stockés en tant qu'objets, en les nommant dans une déclaration de variables.</p>

		<pre><code>var monParagraphSpécial = document.getElementById("special");
		</code></pre>
  	</section>
  	<section id="proprietes">
  		<h2>Propriétés des éléments</h2>
  		<p>Chaque noeud du <abbr title="Document Object Model">DOM</abbr> possède une liste de <strong>propriétés</strong> et de <strong>méthodes</strong> standards, mais dont le contenu dépend de la page en question. Il est possible de récupérer et modifier le contenu de n'importe quel attribut d'un élément <abbr title="HyperText Mark-up Language">HTML</abbr> car ils sont des propriétés du noeud du <abbr title="Document Object Model">DOM</abbr> correspondant, et gardent les mêmes noms.</p>

		<pre><code>element = document.getElementsTagName("input")[0] //permet de se positionner sur le premier élément "input" et le stocke dans la variable "element"
		element.type //Retournera la valeur de l'attribut "type" de l'élément sélectionné
		element.type = "email" //Modifie la valeur de l'attribut "type" de notre élément
		//Bon, il vaut mieux éviter de modifier cet attribut particulier, mais c'était pour l'exemple
		</code></pre>

		<p>Au delà des attributs, tout ce qui constitue le code du document est contenu dans une propriété d'un noeud du <abbr title="Document Object Model">DOM</abbr>.</p>

		<ul>
		<li><code>element.innerHTML</code> permet de se positionner sur toutes le contenu <abbr title="HyperText Mark-up Language">HTML</abbr> enfant de l'élément ciblé</li>
		<li><code>element.innerText</code> permet de se positionner sur le contenu textuel de l'élément ciblé, c'est différent du contenu <abbr title="HyperText Mark-up Language">HTML</abbr> car les balises ne seront pas prise en compte!</li>
		<li><code>element.style</code> permet de se positionner sur les règles de styles de l'élément, qu'elles soient écrites en ligne dans la balise ou dans une feuille de style liée</li>
		</ul>

		<p>Pour la propriété style en particulier, il est possible d'accéder à des règles spécifiques en écrivant leur nom après cette propriété.</p>

		<pre><code>var p = document.getElementsByTagName("p");
		p.style.color = "red";
		</code></pre>

		<article id="parents">
			<h3>Parents et descendants</h3>

			<p>Il est possible de récupérer d'autres noeuds du <abbr title="Document Object Model">DOM</abbr> en accédant à certaines propriétés particulière du noeud.</p>

			<ul>
			<li><code>element.nextElementSibling</code> permet de se positionner sur le le prochain élément de même niveau qui partage le même parent que l'élément sélectionné</li>
			<li><code>element.previousElementSibling</code> fait de même avec l'élément précédent l'élément sélectionné</li>
			<li><code>element.firstChild</code> et <code>element.lastChild</code> permet de se positionner sur le premier / dernier noeud enfant de l'élément sélectionné</li>
			<li><code>element.childNodes</code>permet de se positionner sur un tableau contenant tous les éléments enfants de l'élément sélectionné</li>
			<li><code>element.parentElement</code> permet de se positionner sur l'élément qui est le parent direct de l'élément sélectionné</li>
			</ul>

			<p>Notons que, contrairement aux sélecteurs CSS, il est possible de parcourir le DOM depuis les éléments enfants vers les éléments parents.</p>
		</article>

		<article id="noeud-infos">
			<h3>Informations sur les noeuds</h3>

			<ul>
			<li><code>node.nodeType</code> retourne un nombre représentant le type deu noeud sélectionné, par exemple "1" représente un élément du <abbr title="HyperText Mark-up Language">HTML</abbr> tandis que "3" représente du texte</li>
			<li><code>node.nodeName</code> permet de se positionner sur le nom du noeud, qui peut-être contenu dans l'attribut "name" de l'élément <abbr title="HyperText Mark-up Language">HTML</abbr></li>
			<li><code>node.getAttribute(nom_de_l'attribut)</code> permet de se positionner sur la valeur de l'attribut du noeud correspondant au nom passé en paramètre</li>
			</ul>

		</article>
  	</section>
  	<section id="manipulation">
  		<h2>Manipulation du <abbr title="Document Object Model">DOM</abbr></h2>

		<p>Les noeuds du <abbr title="Document Object Model">DOM</abbr> manipulable par Javascript, toutes leurs propriétés sont modifiables. Ces modifications sont effectuées uniquement sur le <abbr title="Document Object Model">DOM</abbr> et prennent effet immédiatement, évidemment le code source de la page n'est pas impacté puisqu'il est stocké sur le serveur alors que le <abbr title="Document Object Model">DOM</abbr> est constitué par le navigateur.</p>

		<article id="creer">
			<h3>Créer des noeuds</h3>

			<p>Il est possible de rajouter des éléments qui ne sont pas présent dans le code source de la page HTML avec des méthodes du <abbr title="Document Object Model">DOM</abbr>.</p>

			<ul>
			<li><code>document.createElement("balise")</code> permet de créer un objet de type noeud correspondant à la balise <abbr title="HyperText Mark-up Language">HTML</abbr> dont le nom a été passé en paramètre, tout noeud ajouté dans le <abbr title="Document Object Model">DOM</abbr> doit d'abord être créé par cette méthode</li>
			<li><code>element.appendChild(node)</code> permet d'inclure un noeud dans le <abbr title="Document Object Model">DOM</abbr>, qui sera un enfant de l'élément sélectionné (et sera placé après tous les autres éléments enfants de l'élément sélectionné)</li>
			<li><code>element.insertBefore(node, otherNode)</code> permet d'inlcure un noeud dans le <abbr title="Document Object Model">DOM</abbr> qui est un enfant de l'élément sélectionné et positionné juste avant "otherNode", qui doit être un autre enfant de l'élément sélectionné</li>
			</ul>
		</article>
	</section>
	<section id="evenements">
		<h2>Les évenements</h2>

		<p>L'intérêt de piloter le <abbr title="Document Object Model">DOM</abbr> ar Javascript et que celui-ci inclut une API qui "écoute" tout ce que fait l'utilisateur sur son navigateur. On peut donc faire réagir la page un bon nombre d'action de l'utilisateur.</p>

		<ul>
		<li><code>"clik"</code> : Un clic de la souris</li>
		<li><code>"keydown", "keypressed", "keyup"</code> : Une touche du clavier enfoncée et/ou relâchée</li>
		<li><code>"mouseover", "mouseleave"</code> : Un survol (ou non) d'un élément du <abbr title="HyperText Mark-up Language">HTML</abbr></li>
		<li><code>"wheel"</code> :  L'utilisation de la rouleete de la souris</li>
		</ul>

		<p>Et il y en a d'autres...</p>
		<article id="ecouteurs">
			<h3>Les écouteurs d'évènements</h3>

			<p>Un <strong>écouteur</strong> permet justement de réagir à un <strong>évènement</strong> provoqué par l'utilisateur. Il faut l'<strong>attacher</strong> à un noeud du <abbr title="Document Object Model">DOM</abbr>, lui spécifier l'évènement attendu et lui passer la fonction que l'on voudra exécuter à chaque fois que cet évènement aura lieu.</p>

			<pre><code>//Déclaration d'une fonction qui sera exécutée à chaque fois que l'évènement aura lieu
			function maFonction() {
			    alert("Hello world!");
			}

			//Sélection de l'élément dont l'id est "monElement"
			var element = document.getElementById("monElement");

			//On attache un écouter d'évènement à l'élément que l'on a sélectionné
			element.addEventListener('click', maFonction);

			//Ainsi, à chaque fois que l'utilisateur cliquera l'élément, la fonction "maFonction" sera exécutée
			</code></pre>
		</article>
	</section>
</main>
