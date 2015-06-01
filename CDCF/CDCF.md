# Cahier des charges fonctionnel

## 1 - Présentation générale du problème
====
### 1.1 - Objectif du projet

### 1.2 - Contexte

#### 1.2.1 - Présentation du projet dans son contexte  

Le SIPHIF souhaite faire évoluer son outil d'évaluation des stages des internes. L'outil actuel, le site FORMETRIS, reste très rigide en ce qui concerne la modification du questionnaire d'évaluation et la possibilité d'ajouter d'autres hôpitaux ou postes.  Le nouvel outil doit permettre de contrer cette rigidité.  La nouvelle plateforme demandée, cible les internes, les adhérents du SIPHIF et un responsable (administrateur).  L'accès à cette platforme se ferait éventuellement  par le site internet du SIPHIF.  En plus de l'évaluation, la nouvelle plateforme doit comprendre la gestion des pré-choix des stages.  Les internes peuvent ainsi voir les stages disponibles en fonction de leur classement.  

#### 1.2.2 - Suite prévue

La maintenance de la plateforme devra être effectuée par un acteur à définir.

#### 1.2.3 - Prestations demandées

La plateforme décrite dans ce cahier des charges.
Des notices sur le fonctionnement de la plateforme.

#### 1.2.4 - Parties prenantes

 * **Client :** 
    * Le SIPHIF
 * **MOA :**  
    * Daniel Alban (professeur)
    * Aurélien CHASSEREAU
 * **MOE :** 
    * Jérome FESSY (professeur)
    * étudiants de L3 MIAGE  par apprentissage à l'université Paris Descartes  
 
### 1.3 - Enoncé du besoin

La nouvelle plateforme doit donc permettre :  

 * Le dépôt des évaluations
 * L'analyse des évaluations
 * La consultation des évaluations
 * Le dépôt des voeux par ordre de préférence
 * Analyse des pré-choix
 * Consultation du tableau prévisionnel d'éligibilité aux stages selon les voeux

## 2 - Expression fonctionnelle du besoin
=====
### 2.1 - Fonctions de service et de contrainte

#### 2.1.1 - Fonctions de service principales

**F1 :** Gérer les comptes (internes, adhérents, administrateur).  
**F2 :** Gérer les évaluations.  
**F3 :** Analyser les évaluations.   
**F4 :** Gérer les pré-choix.  
**F5 :** Analyser les pré-choix.  
**F6 :** Gérer le back-office (la liste des fonctionnalités sont à confirmer)  

#### 2.1.2 - Fonctions de services complémentaires

F7 : Possibilité de mettre à jour une évaluation.  
F8 : Possibilité pour chaque interne de connaître le nombre de personnes ayant choisi les mêmes stages que ceux qu’il a renseignés (autres que le premier choix).  

#### 2.1.3 - Contenu fournit par le client

- L’ordre de passage des internes.
- Les adhérents au SIPHIF, pour la consultation des évaluations.
- La liste des hôpitaux et des services disponibles aux choix ainsi que le nombre de places disponibles par service.
- Les anciennes évaluations à ajouter à la base de données.
- Les dates butoirs fixées pour l’évaluation des stages, et pour les voeux (pré-choix).

#### 2.1.4 - Contraintes

L'anonymat doit porter sur l'évaluation (le nom de l'interne qui a évalué son stage ne doit pas être visible ni la période durant laquelle il a effectué son stage) et le pré-choix (un interne ne doit pas savoir qui est affecté à quel poste). 

La liste des voeux accordés pour le pré-choix doit être accessible en temps réel.

Un mot de passe individuel d’accès temporaire permettant aux internes d’accéder à la consultation des évaluations et au système de pré-choix doit être envoyé par mail.

Prise en compte du contenu fournit par le client.

Prise en compte du nombre d'utilisateurs potentiels (288 adhérents inscrits au 1er mars 2015).

### 2.2 - Critères d'appréciation

La flexibilité de la plateforme au niveau de : la modification du questionnaire d'évaluation, de l'intégration des anciennes évaluations et de la possibilité de faire des statistiques sur les taux de participation aux évaluations/pré-choix.

La simplicité de gestion pour les administrateurs au niveau : du renseignement du classement des choix pour chaque semestre et de la modification éventuelle des grilles d'évaluation.

## 3 - Cadre de réponse
===
### 3.1 - Pour chaque fonction

*****************************
**Fonction :** F1  
**Objet :** Gérer les comptes (internes, adhérents, administrateur).  
**Mode de fonctionnement :**  

Les internes doivent saisir une fiche d'information contenant :  
 * Nom  
 * Prénom  
 * Mail  

Le reste des informations restent à définir.  

Il est a noter qu'un administrateur doit pouvoir donner un mot de passe servant à la gestion des droits (ne donne accès qu’aux pré-choix ou si adhésion, à la consultation des évaluations et aux pré-choix).  
*****************************
**Fonction :** F2  
**Objet :** Gérer les évaluations.  
**Mode de fonctionnement :**  

Cette fonction comprends la rédaction de l'évaluation par les internes selon une grille d'évaluation (cf annexe).
A la fin de l’évaluation, l’interne reçoit par mail un mot de passe individuel d’accès temporaire qui lui permet d’accéder à la consultation des évaluations et au système de pré-choix.  

Les administrateurs pourront modifier les grilles d'évaluations.  
*****************************
**Fonction :** F3  
**Objet :** Analyser les évaluations.  
**Mode de fonctionnement :**  
*****************************
**Fonction :** F4  
**Objet :** Gérer les pré-choix.  
**Mode de fonctionnement :**  
*****************************
**Fonction :** F5  
**Objet :** Analyser les pré-choix.  
**Mode de fonctionnement :**  
*****************************
**Fonction :** F6  
**Objet :** Gérer le back-office (la liste des fonctionnalités sont à confirmer).  
**Mode de fonctionnement :**  
*****************************
**Fonction :** F7  
**Objet :** Possibilité de mettre à jour une évaluation.  
**Mode de fonctionnement :**  
*****************************
**Fonction :** F8  
**Objet :** Possibilité pour chaque interne de connaître le nombre de personnes ayant choisi les mêmes stages que ceux qu’il a renseignés (autres que le premier choix).  
**Mode de fonctionnement :**  

### 3.2 - Pour l'ensemble du produit

#### 3.2.1 - Prévisions de fiabilité

Le site doit être accessible à tout moment de la journée.

#### 3.2.2 - Perspectives d'évolution

Toute évolution devra avoir un impact minimal sur l'existant.
La navigation sur tablettes et smartphone est un bonus.

## 4 - Perspectives et estimations
====
### 4.1 - Coût

Les seuls coûts à supporter porteront sur l'infrastructure (serveurs, nom de domaine, base de données).

### 4.2 - Délai

La plateforme sera livrée le 02/07/2015.

### 4.3 - Exploitation

La gestion de l'exploitation reste à définir.
La maintenance sera faites tout au long de l'exploitation de la plateforme par un acteur restant également à définir.

### 4.4 - Ergonomie

La plateforme sera simple pour être utilisable par un personnel non spécialiste en informatique.
