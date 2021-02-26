# xqbic-magento

Step 1.
Copy file  into magento2 root directory /app/code/

Step 2. Run following commands in terminal

  ~] php bin/magento setup:upgrade
  
  ~] php bin/magento setup:static-content:deploy -f
  
  ~] php bin/magento cache:clean
  
  ~] sudo chmod -R 777 var/ pub/static/ generated/ 
