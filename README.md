# Parse-Server-Curl
Connect to parse server Via curl commends using parse server restful  API 
# Install Via composer 
  `composer require zteam-pro/parse-curl`
  
  How to Use it 
  
  You must add the parse server config like 
 
      1- Parse server app_id
      2- Parse server url 
      3- Master key 
      4- The query or data  paramters to make a query to the parse server   
   Then you will call any of ParseCurl obejct function to perform the CURL commend and get response back 

    ## Create object on parse server
     1- app_id=####
     2- server_url=https://#########/classes/ClassName
     3- Master_key=########################
     4- data={"name","########","score"="20"}   

     ## Update an object  on  parse server
     1- app_id=####
     2- server_url=https://#########/classes/ClassName/objectId
     3- Master_key=########################
     4- data={"score","30"}

    ## Delete an object from parse server
     1- app_id=####
     2- server_url=https://#########/classes/ClassName/objectId
     3- Master_key=########################
     4- data= #Not Required


    ## Perform a Query on parse server
     1- app_id=####
     2- server_url=https://#########/classes/ClassName
     3- Master_key=########################
     4- Query=Where:{"objectId","########"}



