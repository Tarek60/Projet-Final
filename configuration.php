<?php
/**
 * Déclaration des constantes de connexion à la base de données
 */
define('HOST', '127.0.0.1');
define('LOGIN', 'root');
define('PASSWORD', '12081999');
define('DBNAME', 'Overchat');
define('TABLEPREFIX', 'owprjt_');

/**
 * Inclusion de tout mes modèles
 */
include_once 'models/dataBase.php';
include_once 'models/articles.php';
include_once 'models/comments.php';
include_once 'models/messages.php';
include_once 'models/platform.php';
include_once 'models/profilePicture.php';
include_once 'models/rank.php';
include_once 'models/reactionTypes.php';
include_once 'models/reactions.php';
include_once 'models/responses.php';
include_once 'models/role.php';
include_once 'models/topics.php';
include_once 'models/topicsCategory.php';
include_once 'models/users.php';
include_once 'models/userCategory.php';