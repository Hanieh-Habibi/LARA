<?php
/**
 * Created by PhpStorm.
 * User: habibih
 * Date: 9/28/2019
 * Time: 09:48 PM
 */
session_start();

define("LaraEnv", "LARA='/export/data/www/issco-site/en/research/projects/LARA-portal-stage/trunk'");
define("TreeTaggerEnv", "TREETAGGER='/usr/local/TreeTagger'");
define("PythonCmnd", "python3.7");

define("WelcomeMsg", "Welcome to STAGING VERSION of LARA portal");
define("LogoutMsg", "You have successfully logged out from STAGING VERSION");

define("ContentRelatedPage", "content");
define("ImportRelatedPage", "import");
define("ResourceRelatedPage", "resource");
define("HistoryRelatedPage", "history");
define("HistoryResourceRelatedPage", "hResource");
define("LanguageRelatedPage", "language");
define("FlashcardRelatedPage", "flashcard");

define("SessionIndex", array (
    'UserID' => 'StageUserID',
    'UserName' => 'StageUserName'
));

define("LaraDB" ,array("driver" => 'mysql',
    "host" => '127.0.0.1',
    "user" => 'laraportaluser',
    "pass" => 'v8jfr3RmhY6Htapd',
    "database" => 'LARA-portal-stage'));

define("LaraLDT", array (
    'grant_type' => 'password',
    'username' => 'lara-stage',
    'password' => 'p0rt@l!'
));

define("ROOT", "/export/data/www/issco-site/en/research/projects/LARA-portal-stage/trunk/Code/PHP/");
define("PythonDir","/export/data/www/issco-site/en/research/projects/LARA-portal-stage/trunk/Code/Python/");

define("LaraContentDir","/export/data/www/LARA-data-stage/");
define("SnContentDir","/export/data/www/callector-community-data-stage/lara-content-files/");
define("WorkingTmpDirectory", LaraContentDir . "WorkingTmpDirectory/");
define("ContentTmpDirectory", LaraContentDir . "ContentTmpDirectory/");
define("ExternalResourceDirectory", LaraContentDir . "ExternalResourceDirectory/");
define("ImportContentsDirectory", LaraContentDir . "ImportContentsDirectory/");

define("CallectorDir","/export/data/www/issco-site/en/research/projects/callector/");
define("DistributedDir", CallectorDir . "LaraResourceContent-stage/");
define("ReadingHistoryDir", CallectorDir . "LaraReadingHistories-stage/");

define("PortalReadingHistoryDir","/en/research/projects/callector/LaraReadingHistories-stage/");

define("WebRoot", "https://www.issco.unige.ch/en/research/projects/callector/");
define("DistributedWebRoot", WebRoot . "LaraResourceContent-stage/");

define("SubDirNames", array("audio" => "audio",
    "corpus" => "corpus",
    "images" => "images",
    "translations" => "translations"));

define("SubDirNamesContentTmp", array("compiled" => "compiled",
    "laraTmpDirectory" => "laraTmpDirectory",
    "resourcesDir" => "resourcesDir",
    "resourcesBackup" => "resourcesBackup"));

define("EmbeddedItemsTypes", array("Image" => "Image",
    "Audio" => "Audio",
    "CSS" => "CSS",
    "Script" => "Script"));

define("WebAddress", "https://www.issco.unige.ch/en/research/projects/LARA-portal-stage/");

define("RowPerPage", 15);