<?php
    use MicrosoftAzure\Storage\Common\ServicesBuilder;
           use MicrosoftAzure\Storage\Common\ServiceException;
    
    
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: ../index.php');
    } 
    else
    {

        require_once '../vendor/autoload.php';
           
           
    
        $container = "screen-1";
        $connectionString='DefaultEndpointsProtocol=https;AccountName=aduploads;AccountKey=JEIasw/ANH4YTCd59n9SiDw5M8KcB7Y7Iom2P+6HF5s5Wu6yixXGPQoqGb62M9+jv1mfzXc8sPohGY7CjNsjAA==;';
        
        $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
    
        try    {
    
        $blob_list = $blobRestProxy->listBlobs($container);
        $blobs = $blob_list->getBlobs();
    
        foreach($blobs as $blob)
            {
            echo $blob->getName().": ".$blob->getUrl()."<br />";
            }
        }
        catch(ServiceException $e){
       
        $code = $e->getCode();
        $error_message = $e->getMessage();
        echo $code.": ".$error_message."<br />";
        }

    }
    

?>