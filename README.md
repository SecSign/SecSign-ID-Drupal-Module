SecSign ID Drupal Module
===========================

Use the SecSign ID two-factor authentication on your Drupal site to enable easy and secure login using your iPhone or Android phone.


SecSign ID - The mobile way to log into web sites

SecSign ID is a module for real two-factor authentication (2FA) for Drupal sites. 2FA adds another layer of security to your website by using a second token. In this case the physical token is your smartphone. 
If you seek for more information about about two-factor authentication have a look at <https://www.secsign.com/two-factor-authentication/>.

* Integrate SecSign ID into your own Drupal site in less than one minute. (There are also APIs for PHP, Ruby, Python and Java and plugins for Joomla and Wordpress.)
* You and your users can also use SecSign ID to visit securely other web sites (e.g. <https://portal.secsign.com> for true professional messaging and cloud sharing.)
* This service is free for users and website owners and free of advertising - no matter how many users you have.
* You can also integrate the SecSign ID as inhouse solution into your existing infrastructure (on request with licensed service and maintenance contract)

There are plugins and extensions for Wordpress and Joomla as well. An overview aboput all available APIs and plugins could be found at <https://www.secsign.com/plugins/>.

## SecSign ID features:

* Quick and easy to use single sign-on with 2048 bit high security
* Eliminates password chaos and security concerns
* No mobile number, credit card or time-consuming registration required.
* No need for long cryptical passwords, time-consuming retyping of codes from SMS or reading of QR codes
* High security and strong cryptography on all levels

## Technical details (only for experts):

* Up to 2048 bit asymmetric private keys
* Brute force resistant private key storage (SafeKey mechanism)
* Private keys are never transmitted to authentication server
* High availability through redundant remote failover servers
* Multi-tier high security architecture with multiple firewalls and protocol filters.

More information at at <https://www.secsign.com/security-id/>.


**SecSign ID:**

1. Get the app for iPhone <https://itunes.apple.com/app/secsign/id581467871> or Android <https://play.google.com/store/apps/details?id=com.secsign.secsignid>
2. Choose a unique user short name
3. Choose a short PIN to secure your SecSign ID on your phone

That's it! You can now use your SecSign ID to sign in.

**How to sign in:**

Just type in your user short name (for instance at SecSign Portal <https://portal.secsign.com> or your Drupal site using this module), confirm your sign-in on your phone and you are done within seconds.

Despite its simplicity SecSign ID works with comprehensive strongest security technologies. The solution we offer is unique and does not submit any confidential data through a web browser.

We have a strong background of more than 16 years in developing strong cryptography and highly sophisticated security software products for governments, public institutions and private companies.

Visit our official site to get the app and more information: <https://www.secsign.com>

and check out our flyer at <https://www.secsign.com/secsign_portal_flyer.pdf>.

## Installation

**Install the Module**

* Unzip the downloaded file and copy the folder "secsign" to Drupal_root/sites/all/modules.
* Log into Drupal and click on "Modules". Scroll down and enable the secsign module, save your configuration.
* To activate the login block go to "Structure > Blocks" and search for "SecSign ID Login" in the "Disabled" section.
** Choose the section you want to display the SecSign ID login form, for example "Sidebar first".
** Save the configuration.

![SecSign Installation help](/images/install_help.jpg)

**User Settings**

To use the SecSign ID two-factor authentication, you need to assign a SecSign ID to your user profile.

* Log into Drupal and go to "People".
* Click on your username, your profile page should appear.
* Click on the “SecSign ID” tab and assign your SecSign ID to your profile to allow SecSign ID authentication.

**Module Configuration**

The configuration page lets you manage the module behaviour for the login process.

* Log into Drupal and go to "Modules > secsign > Configure".
* You are going to find the following options:

