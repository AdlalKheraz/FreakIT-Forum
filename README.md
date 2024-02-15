
DOCUMENTAION TECHNIQUE DE L’APPLICATION WEB FREAKIT
Introduction : 
Le forum ForeakITForum est un lieu d'échange entre les clients d'un site de commerce électronique. Il offre une plateforme où les personnes intéressées peuvent partager leurs expériences utilisateur, échanger des retours sur les produits dans différentes thématiques, offrant ainsi une expérience utilisateur enrichissante.
 Sa présentation simple permet à chacun de s'y retrouver facilement, y compris les personnes âgées.
	
Architecture : 
Le site est construit avec une structure simple qui permettra d'ajouter de nouvelles fonctionnalités facilement, comme les commentaires sous les articles qui arriveront bientôt. Voici comment tout est organisé : 

Le dossier "admin" rassemble tout ce que l'administrateur peut utiliser sur son tableau de bord.
Le dossier "utilisateur" fait de même pour les utilisateurs.
Dans le dossier "assets", on trouve les fichiers CSS et le dossier pour télécharger les images des articles.
Le dossier "app" est un peu le cerveau du site : il contient tout ce qui interagit avec la base de données qui gère tout ce qui se passe, ainsi que les contrôleurs, les helpers et les includes.
Les contrôleurs, dans le dossier "contrôleur", s'assurent que tout se passe bien entre les utilisateurs et la base de données, en respectant les règles dans le dossier "helper". Par exemple, "adminOnly" vérifie à chaque fois si c’est vraiment l’admin en cours de session.
Enfin, dans le dossier "include", on trouve les emojis et certains petits éléments pour le tableau de bord, aussi bien pour l'admin que pour l'utilisateur.





La structure de la base de données est représentée par le modèle suivant :  
 

Technologies utilisées et outils :
La stack utilisée est la suivante :
 	• HTML/CSS 
• PHP & MYSQL
• VS Code comme IDE avec l’extension entelephanse pour l’auto complétion 
Installation & Configuration :
1) Installer wamp serveur et ses composants
2) Le code est disponible sur github git clone https://github.com/adlal-kheraz/FreakIT-Forum.git copié le dossier dans le www de votre serveur
 3) Importer la base de données « blog.sql »  qui se trouve dans le dossier db du dépôt github
4) Lancer le serveur et se rendre a l’adresse http://localhost/FreakIT-Forum/  

Ressources utilises :
 1) https://grafikart.fr/formations/php
2) chatGPT pour commenter le code pour facilite sa compréhension
3) documentation PHP
4) StackOverFlow

