<?php
namespace MichaelDrennen\LocalFile;
use Exception;
class LocalFile{

    /**
     * A php function that returns the number of lines in a file on the local file system.
     * @param string $filePath
     * @return int
     * @throws Exception
     */
    public static function lineCount(string $filePath): int{
        
        $lineCount = 0;
        $handle = fopen($filePath, "r");
        if($handle === false){
            throw new Exception("Unable to open the file at: " . $filePath);
        }
        while(!feof($handle)){
            fgets($handle);
            $lineCount++;
        }

        fclose($handle);   
        return $lineCount;
    }
}