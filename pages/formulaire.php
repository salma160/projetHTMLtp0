<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Acceuil</a></li>



            </ul>
        </nav>

    </header>
    <main>
        <h1>Formulaire</h1>
        <section id="form">
            <!-- action c pour envoyer les infos à un serveur -->
           <form action="/traitement.php" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
    <br><br>

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
    <br><br>

    <label for="age">Âge:</label>
    <input type="number" id="age" name="age" value="18">
    <br><br>

    <label for="pays">Pays:</label>
    <select id="pays" name="pays">
        
        <option value="maroc" selected>Maroc</option>
        <option value="france">France</option>
        <option value="suisse">Suisse</option>
        <option value="canada">Canada</option>
    </select>

    <p><strong>Statut :</strong></p>
    <input type="radio" id="etudiant" name="statut" value="etudiant">
    <label for="etudiant">Etudiant.e</label>
    <input type="radio" id="prof" name="statut" value="professeur">
    <label for="prof">Professeur</label>

    <p>Expérience en développement web :</p>
    <input type="checkbox" id="oui" name="experience" value="oui">
    <label for="oui">Oui</label>
    <input type="checkbox" id="non" name="experience" value="non">
    <label for="non">Non</label>

    <label for="commentaires">Commentaires :</label>
    <textarea id="commentaires" name="commentaires" cols="30" rows="10"></textarea>

    <input type="submit" value="Envoyer">
</form>

           
        </section>

    </main>
</body>

</html>