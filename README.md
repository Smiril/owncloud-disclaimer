# Owncloud Disclaimer

This app adds a disclaimer control to the login process and logs it. 

ACKNOWLEDGEMENTS:
I borrowed ideas and/or snippets from:

- 'external' Frank Karlitschek
- 'ojsxc' Klaus Herberth
- 'superlog' Bastien Ho
- 'preloginvalidation' Juan Rey Saura

INSTALLATION
- Upload disclaimer directory under the 'apps' directory of your ownCloud.
- Modify the disclaimer.pdf with you own file.
- Navigate to the 'Apps' page in Admin.
- Click on 'disclaimer' in the application list. Then click the 'Enable' button.

- Note: if NOT Installed OwnCloud in root dir like /srv/www/htdocs/ 
        must add the folder "/owncloud" to all lines contains "/apps/disclaimer/*/"
        in script!
        
        like: "/owncloud/apps/disclaimer/*/*.*"
        
