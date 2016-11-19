# Welcome to the myAccountManager wiki!

## **How To Install and Configure**
1. Clone the git repository from : `https://github.com/icechathuranga/myAccountManager.git`
`git clone https://github.com/icechathuranga/myAccountManager.git `
1. Navigate to your application folder
1. Open app/config/parameters.yml
1. Change database configurations accordingly.
1. Run `php bin/console doctrine:database:create`
1. Run `php bin/console doctrine:schema:create`
1. Run `php bin/console cache:clear`

1. Source following sql [Add a client with password and refresh_token]

    ```
INSERT INTO oauth2_clients VALUES (NULL, '3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4', 'a:0:{}', '4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k', 'a:2:{i:0;s:8:"password";i:1;s:13:"refresh_token";}');
```

### Create admin user

**We are going to use the command fos:user:create, provided by FOSUserBundle :**

`$ php app/console fos:user:create`
Please choose a username:`admin`
Please choose an email:`admin@example.com`
Please choose a password:`admin`
Created user admin

## Start your application
Symfony leverages the internal PHP web server (available since PHP 5.4) to run applications while developing them. Therefore, running a Symfony application is a matter of browsing to the project directory and executing this command:

`$ php bin/console server:run`

Read more on [Wiki](https://github.com/icechathuranga/myAccountManager/wiki)
