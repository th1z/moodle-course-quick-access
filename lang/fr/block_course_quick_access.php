<?php
// This file is part of course-quick-access plugin for Moodle
// http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * French language strings for the quick-course-block by Luiggi Sansonetti.
 *
 * @package    block_course_quick_access
 * @copyright  2012 Thomas Heinz <mail@th1z.net>
 * @webseite   http://www.th1z.net/projects/moodle-cqa/
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Acc&egrave;s aux cours personnalis&eacute;';

// ===== Block ====
$string['usernotenrolledincourses'] = 'Non inscrit dans ces cours';
$string['coursenotcategorized'] = 'Cours sans cat&eacute;gorie';

// ===== Block Footer =====
$string['allmoodlecourses'] = 'Tous les cours...';
$string['allmycourses'] = 'Afficher tous mes cours';
$string['configureplugin'] = 'Configurer la liste';

// ===== Admin Configuration =====
$string['usejavascript'] = 'Utiliser Javascript';
$string['descusejavascript'] = 'Permet d\'utiliser les fonctions Javascript';
$string['showsearchsubmitbutton'] = 'Afficher le champ de recherche';
$string['descshowsearchsubmitbutton'] = 'Affiche le bouton "Rechercher" sous le champ de recherche.';
$string['searchsubmitbutton2line'] = 'Affiche le bouton "Rechercher" sur une 2&egrave;me ligne';
$string['descsearchsubmitbutton2line'] = '';

// ===== User Configuration =====
$string['configpagetitle'] = 'Configuration de l\'acc&egrave;s aux cours personnalis&eacute;';
$string['configpageheading'] = 'Configuration de l\'acc&egrave;s aux cours personnalis&eacute;';
$string['confignavigationtitle'] = 'Configuration de l\'acc&egrave;s aux cours personnalis&eacute;';

// -- New/Edit Category Form --
$string['createnewcategory'] = 'Cr&eacute;er une nouvelle cat&eacute;gorie';
$string['createoreditcategory'] = 'Cr&eacute;er/Editer une cat&eacute;gorie';
$string['nospecialchars'] = 'Vous pouvez ins&eacute;rer des lettres, des chiffres et les caract&egrave;res sp&eacute;ciaux suivants : "/", "-".';

// -- Delete Category Form --
$string['deletecategoryheader'] = 'Supprimer la cat&eacute;gorie';
$string['deletecategorymessage'] = 'Etes-vous s&ucirc;r de vouloir supprimer la cat&eacute;gorie :';
$string['deletecategorymove'] = 'D&eacute;placer les cours vers';
$string['deletecategorysubmit'] = 'Confirmer la suppression';

// -- Category List Form --
$string['categorylistheadline'] = 'Cat&eacute;gories de l\'utilisateur';
$string['nocatcreatedtext'] = 'Vous n\'avez pas encore cr&eacute;&eacute; de cat&eacute;gorie.<br>'.
	'Pour configurer le bloc d\'acc&egrave;s personnalis&eacute; &agrave; ses cours, cliquez sur le lien suivant :<br>'. 
	'<b>"Cr&eacute;er une nouvelle cat&eacute;gorie"</b>.';
$string['createmorecattext'] = 
	'Pour cr&eacute;er des nouvelles cat&eacute;gories, cliquez sur le lien : ';
$string['categorylistdesc'] = 
	'Vous trouverez ci-dessous la liste de toutes vos cat&eacute;gories cr&eacute;&eacute;es.<br> Vous pouvez modifier leur nom, changer leur visibilit&eacute;, l\'ordre et le r&eacute;agencement &agrave; l\'aide des <b>ic&ocirc;nes</b> correspondantes.<br> '.
	'Les cat&eacute;gories masqu&eacute;es ou ne contenant pas de cours ne seront pas affich&eacute;es dans le bloc.';
$string['categorynameheadline'] = 'Cat&eacute;gories';
$string['courseamountheadline'] = 'Cours affect&eacute;s';
$string['categoryeditheadline'] = 'Modifier';
$string['categorymoveheadline'] = 'D&eacute;placer';
$string['cateditlinktext'] = '&eacute;diter';
$string['catdeletelinktext'] = 'supprimer';
$string['cathidelinktext'] = 'masquer';
$string['catshowlinktext'] = 'afficher';
$string['catmoveup'] = 'monter';
$string['catmovedown'] = 'descendre';

// -- Course List Form --
$string['courselistheadline'] = 'Cours de l\'utilisateur';
$string['nocourses'] = 'Vous n\'&ecirc;tes inscrit &agrave; aucun cours.';
$string['courselistdesc'] = 
	'Tous les cours auxquels vous &ecirc;tes inscrits sont list&eacute;s ci-dessous.<br>'.
	'Utilisez les listes d&eacute;roulantes pour les affecter &agrave; une de vos cat&eacute;gories. <br>'. 
	'N\'oubliez pas de cliquer sur le bouton "Enregistrer" pour sauvegarder vos modifications.';
$string['courselistcoursehead'] = '<b>Cours auxquels vous &ecirc;tes inscrit</b>';
$string['courselistselecthead'] = '<b>Cat&eacute;gorie</b>';
$string['newcategory'] = 'Nom de la cat&eacute;gorie';
$string['categoriyisvisible'] = 'Est visible';

// ===== Javascript =====
$string['hiddencoursesnotloggedin'] = 'N\'affiche seulement les r&eacute;sultats correspondants. Appuyez sur "Entr&eacute;e" pour effectuer une recherche sur tous les cours.';
$string['hiddencourses'] = 'N\'affiche seulement les r&eacute;sultats correspondants. Appuyez sur "Entr&eacute;e" pour effectuer une recherche sur tous les cours.';