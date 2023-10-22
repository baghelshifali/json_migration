This city_list module handling custom entity and providing ability to user to view/add/delete the entities.

# This module extends ContentEntityBase class to create custom entity called city_list

# Extends ConfigEntityBundleBase to define custom entity type called city_list_type.

# Handled menu links for this custom entities for example, view/edit/delete custom entites. 

# Put this module under modules/custom directory

# enable it using drush: drush en city_list

# once module enabled, visit admin/conent page where user able to see new tab called "city listing".

# on click on add city list, new entity entry will be adding in database datable called "city_list"

# Login to database and check table using this command "select * from city_list".