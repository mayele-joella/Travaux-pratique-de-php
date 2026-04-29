
Système de caisse informatisé en PHP procédural


1. PRÉREQUIS

- Serveur local XAMPP ou WAMP installé
- PHP 7.4 ou supérieur
- Navigateur web moderne (Chrome, Edge, Firefox)
- Caméra intégrée ou externe pour la lecture des codes-barres
- Connexion Internet pour charger la bibliothèque QuaggaJS

2. INSTALLATION

1. Copier le dossier du projet dans le répertoire htdocs (XAMPP) ou www (WAMP).
   Exemple : C:\xampp\htdocs\facturation

2. Vérifier que les fichiers JSON existent dans le dossier /data :
   - produits.json
   - factures.json
   - utilisateurs.json
   (Si vides, initialiser avec [] )

3. Démarrer Apache depuis le panneau de contrôle XAMPP/WAMP.

4. Accéder au projet via :
   http://localhost/facturation/

3. STRUCTURE DU PROJET

- config/ : paramètres globaux (TVA, chemins des fichiers)
- auth/ : login, logout, gestion des sessions
- produits/ : enregistrement et liste des produits
- facturation/ : création et affichage des factures
- admin/ : gestion des comptes utilisateurs
- data/ : fichiers JSON (produits, factures, utilisateurs)
- includes/ : fonctions PHP réutilisables
- assets/ : CSS et JavaScript (scanner QuaggaJS)
- rapports/ : rapports journaliers et mensuels

4. UTILISATION

1. Connexion :
   - Identifiant et mot de passe définis dans utilisateurs.json
   - Rôles disponibles : caissier, manager, superadmin

2. Enregistrement produit :
   - Accessible aux rôles manager et superadmin
   - Scanner le code-barres avec la caméra
   - Si inconnu, remplir le formulaire (nom, prix HT, date expiration, stock)

3. Facturation :
   - Accessible au rôle caissier
   - Scanner les articles successivement
   - Saisir la quantité vendue
   - Le système calcule automatiquement sous-totaux, TVA et total TTC
