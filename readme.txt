=== Acarts Theme ===
Contributors: Pierre Hélin  
Requires at least: 5.8  
Tested up to: 6.5  
Requires PHP: 7.4  
Version: 1.0.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  
Tags: custom, accessibility-ready, responsive 
Text Domain: acarts-theme  

== Description ==

Thème WordPress sur mesure développé pour le site officiel de l'Académie intercommunale de Court-Saint-Étienne et Ottignies-Louvain-la-Neuve (www.acarts.be).

Élaboré depuis http://underscores.me/

== Installation ==

1. Copier le dossier `acarts-theme` dans le répertoire `/wp-content/themes/`.
2. Depuis l'administration WordPress, aller dans **Apparence > Thèmes**, puis activer le thème **Acarts**.
3. (Facultatif) Configurer les options dans le menu **Apparence > Personnaliser**.

== Structure du thème ==

- `functions.php` – Déclarations de support (menus, images, blocs), filtres, enqueues.
- `style.css` – Styles de base (chargement Tailwind ou CSS personnalisé).
- `index.php`, `single.php`, `page.php` – Modèles de pages standards.
- `template-parts/` – Blocs HTML réutilisables (header, footer, etc.)
- `inc/` – Fichiers PHP personnalisés (ex : hooks, blocs, render callbacks).
- `assets/` – Scripts JS et CSS si non compilés via un bundler.

== Accessibilité ==

Ce thème est conçu pour respecter les directives WCAG 2.1 niveau AA.

== Changelog ==

= 1.1.0 =
* Version initiale du thème

= 1.0.0 =
* Accessibilité et performance optimisées

== Auteur ==

Développé par Pierre Hélin pour l’Académie intercommunale de Court-Saint-Étienne et Ottignies-Louvain-la-Neuve  
Site : https://www.acarts.be  
Contact : https://github.com/helinp

== Licence ==

Ce thème est distribué sous la licence GPL v2 ou ultérieure.
