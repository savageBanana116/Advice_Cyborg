# **Advice Cyborg**
*ReadMe file for the Advice Cyborg Website*<br/>
*This file will guide you through the convention and structure of the repository*

**Section 1: File System**</br>
***Important Directories***
- config
  - app_local.php: set up database connection, for instance: setting password and database name for connection.

- src
  - Controller Directory: Contains the all controller that for the website, which controller the functionalities of each page.
  - ModulesController: Contains code conduct redirection of module on advice cyborg website dashboard.


- templates
  - templates Directory: Contains all the frontend code for the pages.
  - template/pages Directory: All web pages/ module's  html, javascript and php code are stored under this directory within the file end with.php.


- webroot
  - img Directory: Contains the thumbnail images of all module on the dashboard.
  - webroot/js: Contains the javascript construct the calculators.
  - webroot/css: Contains the style sheet utilized in advice cyborg system.

***For more information about CakePhp: https://book.cakephp.org/4/en/intro/conventions.html***

**Section 2: Database Config**</br>
**Database Schema: ropo(7).sql** 
***Important Records*** 

- Modules Table
   - All records inside modules are significant for advice cyborg system to render all modules on dashboard.
   - Delete Modules table will cause fatal errors occur in system.
   - Update exsiting Module table record will cause fatal errors occur in system.


**For more information about modules table: Check Directory/scr/controller/ModulesController/indext function.**


