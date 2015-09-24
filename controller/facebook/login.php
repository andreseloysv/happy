<?php
session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
            'app_id' => '142543449423848',
            'app_secret' => '01163dbfbe64fcfecb08854e87ecfc81',
            'default_graph_version' => 'v2.4',
        ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email', 'user_likes','read_custom_friendlists','publish_actions']; // optional
$loginUrl = $helper->getLoginUrl('http://www.andreseloysv.com/happy/controller/facebook/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>