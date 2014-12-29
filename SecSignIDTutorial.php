<?php

// $Id: SecSignIDTutorial.php,v 1.1 2014/12/29 12:15:34 titus Exp $

//
// SecSign ID Tutorial for Drupal
//
// (c) 2014 SecSign Technologies Inc.
//

class SecSignIDTutorial
{
    function getENTutorial(){
        $tutorial = '

     <h1>SecSign ID</h1>
     <hr>
    <p>Use SecSign ID two-factor authentication on your Drupal site with an easy and highly secure user login using iOS or Android mobile devices.</p>
    <ol>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#user">User Settings</a></li>
    <li><a href="#config">Module Configuration</a></li>
    <li><a href="#more">About SecSign ID</a></li>
    </ol>
    <p></p>
    <hr>
    <a name="installation" style="display:block;height:65px;"></a>
    <h2>1) Installation</h2>
    <ol>
        <li>Unzip the downloaded file and copy the folder "secsign" to Drupal_root/sites/all/modules.</li>
        <li>Log into Drupal and click on "Modules". Scroll down and enable the secsign module, save your configuration.</li>

    <img src="' . base_path(true) . drupal_get_path('module', 'secsign') . '/images/install_help.jpg" style="margin: 20px 20px;border: 0px solid #E5E5E5;width: 100%; display: block;max-width:830px;">

        <li>To activate the login block go to "Structure &gt; Blocks" and search for "SecSign ID Login" in the "Disabled" section.</li>
        <li>Choose the section you want to display the SecSign ID login form, for example "Sidebar first".</li>
        <li>Save the configuration.</li>
    </ol>

    <img src="' . base_path(true) . drupal_get_path('module', 'secsign') . '/images/block_help.jpg" style="margin: 20px 20px;border: 1px solid #E5E5E5;width: 100%; display: block;max-width:530px;">


    <p></p>
    <hr>
    <a name="user" style="display:block;height:65px;"></a>
    <h2>2) User Settings</h2>
    <p>To use the SecSign ID two-factor authentication, you need to assign a SecSign ID to your user profile.</p>
    <ol>
        <li>Log into Drupal and go to "People".</li>
        <li>Click on your username, your profile page should appear.
         <li>Click on the "SecSign ID" tab and assign your SecSign ID to your profile to allow SecSign ID authentication.</li>
    </ol>
    <img src="' . base_path(true) . drupal_get_path('module', 'secsign') . '/images/user_help.jpg" style="margin: 20px 20px;border: 1px solid #E5E5E5;width: 100%; display: block;max-width:540px;">

    <p></p>
    <hr>
    <a name="config" style="display:block;height:65px;"></a>
    <h2>3) Module Configuration</h2>
    <p>The configuration page lets you manage the plugin behaviour for the login process.</p>
    <ol>
        <li>Log into Drupal and go to "Modules &gt; secsign &gt; Configure".</li>
        <li>You are going to find the following options:</li>
    </ol>
    <p></p>
    <ul>
        <li><strong>Service name:</strong> The name of this web site as it shall be displayed on the user\'s smart phone.</li>
        <li><strong>Pre-text:</strong> This is the text or HTML that is displayed above the login form.</li>
        <li><strong>Post-text:</strong> This is the text or HTML that is displayed below the login form.</li>
        <li><strong>Login Redirection Page:</strong> Select the page the user will be redirected to after a successful login. Select from all the pages listed in the dropdown menu. Choosing "Default" will return to the same page.</li>
        <li><strong>Logout Redirection Page:</strong> Select the page the user will be redirected to after successfully ending their current session by logging out. Select from all the pages listed in the dropdown menu. Choosing "Default" will return to the same page.</li>
        <li><strong>Show Greeting:</strong> Show or hide the simple greeting text.</li>
        <li><strong>Show Name/Username:</strong> Displays the Drupal name or username after login.</li>
    </ul>

<!-- img -->

    <p></p>
    <hr>
    <a name="more" style="display:block;height:65px;"></a>
    <h2>4) About SecSign ID</h2>
    <p style="padding:0 0 30px 0;">More information about the advantages of our two-factor authentication <a href="http://secsign.com" target="_blank">secsign.com</a></p>
<hr>
</div>
        ';
        return $tutorial;
    }

    function getDETutorial(){
        $tutorial = '

     <h1>SecSign ID</h1>
     <hr>
    <p>Verwenden Sie auf Ihrer Drupal-Seite die SecSign ID Zwei-Faktor-Authentifizierung, die Ihnen eine einfache und zugleich hochsichere Benutzeranmeldung mit einem iOS- oder Android-Gerät bietet.</p>
    <ol>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#user">Nutzer-Einstellungen</a></li>
    <li><a href="#config">Modul-Konfiguration</a></li>
    <li><a href="#more">Mehr über SecSign ID</a></li>
    </ol>
    <p></p>
    <hr>
    <a name="installation" style="display:block;height:65px;"></a>
    <h2>1) Installation</h2>
    <ol>
        <li>Entpacken Sie die heruntergeladene Datei und kopieren Sien den Ordner "secsign" nach Drupal_Wurzelverzeichnis/sites/all/modules.</li>
        <li>Melden Sie sich auf Ihrer Drupal-Seite an und klicken Sie auf "Modules". Scrollen Sie herunter, aktivieren Sie das secsign Modul und speichern Sie die Änderungen.</li>

    <img src="' . base_path(true) . drupal_get_path('module', 'secsign') . '/images/install_help.jpg" style="margin: 20px 20px;border: 0px solid #E5E5E5;width: 100%; display: block;max-width:830px;">

        <li>Um den Login Block zu aktivieren, klicken Sie auf "Structure &gt; Blocks" und suchen Sie nach "SecSign ID Login" in dem Abschinitt "Disabled".</li>
        <li>Wählen Sie die Position, an der das SecSign ID Login Formular angezeigt werden soll, zum Beispiel "Sidebar first".</li>
        <li>Speichern Sie die Änderungen.</li>
    </ol>

    <img src="' . base_path(true) . drupal_get_path('module', 'secsign') . '/images/block_help.jpg" style="margin: 20px 20px;border: 1px solid #E5E5E5;width: 100%; display: block;max-width:530px;">


    <p></p>
    <hr>
    <a name="user" style="display:block;height:65px;"></a>
    <h2>2) Nutzer-Einstellungen</h2>
    <p>Um die Zwei-Faktor-Authentifizierung nutzen zu können, müssen Sie Ihre SecSign ID Ihrem Nutzerkonto zuweisen.</p>
    <ol>
        <li>Melden Sie sich auf Ihrer Drupal-Seite an und klicken Sie auf "People".</li>
        <li>Klick Sie auf Ihren Nutzernamen, ihr Nutzerkonto sollte nun sichtbar sein.
         <li>Klicken Sie auf den "SecSign ID" Reiter und weisen Sie Ihrem Profil eine SecSign ID zu, um eine Authentifizierung damit zu ermöglichen.</li>
    </ol>
    <img src="' . base_path(true) . drupal_get_path('module', 'secsign') . '/images/user_help.jpg" style="margin: 20px 20px;border: 1px solid #E5E5E5;width: 100%; display: block;max-width:540px;">

    <p></p>
    <hr>
    <a name="config" style="display:block;height:65px;"></a>
    <h2>3) Modul Konfiguration</h2>
    <p>Mit Hilfe der Konfiguration, können Sie die Modul Eigenschaften für den Loginprozess anpassen.</p>
    <ol>
        <li>Melden Sie sich auf Ihrer Drupal-Seite an und klicken Sie auf "Modules &gt; secsign &gt; Configure".</li>
        <li>Hier finden Sie folgende Optionen:</li>
    </ol>
    <p></p>
    <ul>
<li><strong>Service Name:</strong> Der Name der Website, wie er auf dem Smartphone angezeigt werden soll.</li>
<li><strong>Pre-Text:</strong> Text oder HTML, der über dem Loginformular angezeigt wird.</li>
<li><strong>Post-Text:</strong> Text oder HTML, der unter dem Loginformular angezeigt wird.</li>
<li><strong>Login Weiterleitung:</strong> Wählen Sie eine Seite aus der Liste, auf die der Nutzer nach einem erfolgreichen Login weitergeleitet wird. Wenn sie “Default” wählen, wird der Nutzer zur gleichen Seite geleitet.</li>
<li><strong>Logout Weiterleitung:</strong> Wählen Sie eine Seite aus der Liste, auf die der Nutzer weitergeleitet wird, nachdem er sich abgemeldet hat. Wenn sie “Default” wählen, wird der Nutzer zur gleichen Seite geleitet.</li>
<li><strong>Begrüßung einblenden:</strong> Einen einfachen Begrüßungstext ein- oder ausblenden.</li>
<li><strong>Zeige Name/Username:</strong> Zeigt den Drupal Namen oder Nutzernamen nach dem Login an.</li>
</ul>

<!-- img -->

    <p></p>
    <hr>
    <a name="more" style="display:block;height:65px;"></a>
    <h2>4) Mehr über SecSign ID</h2>
    <p style="padding:0 0 30px 0;">Mehr Informationen über die Vorteile der 2-Faktor Authorisierung finden Sie unter <a href="http://secsign.com" target="_blank">secsign.com</a></p>
<hr>
</div>


        ';
        return $tutorial;
    }
}