# xqbic-magento

Step 1.
Copy file  into magento2 root directory /app/code/

Step 2. Run following command in terminal

  a) php bin/magento setup:upgrade
  
  b) php bin/magento setup:static-content:deploy -f
  
  c) php bin/magento cache:clean
  
  d) sudo chmod -R 777 var/ pub/static/ generated/
  
