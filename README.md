# xqbic-magento

Step 1.
Copy the folder xqbic into magento2 project under  /app/code/

Step 2.
Run following commands on your terminal

  ~/] php bin/magento setup:upgrade
  
  ~/] php bin/magento setup:static-content:deploy -f
  
  ~/] php bin/magento cache:clean
  
  ~/] sudo chmod -R 777 var/ pub/static/ generated/ 
