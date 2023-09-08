# custom_feed_migration
import data from xml to drupal 9 site
I have installed drupal 9.5 version on my local using composer
Installed following modules - 
        "drupal/migrate_plus": "^6.0",
        "drupal/migrate_tools": "^6.0",
        "drupal/pathauto": "^1.11"
        "drupal/admin_toolbar": "^3.4"
and enable core module of drupal migrate.
from the above files I have create a custom module.
modules/custom/custom_feed_migration

enable this module 

than run command 
 -------------------------------
| drush migrate:import article  |
 -------------------------------
check latest nodes available in article content type.

I have created a view "current top post" and display all top post on page /current-top-posts

config file for view is view_config.yml

-- 
For field in article content type i have added are below
- GUID	field_guid	Text (plain)
- Content	field_content	Text (formatted, long)
- Link	field_link	Link
- Story Image	field_story_image	File
