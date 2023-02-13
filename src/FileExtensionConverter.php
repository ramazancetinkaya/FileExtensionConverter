<?php

/**
 * Class FileExtensionConverter
 * 
 * This class is responsible for converting files in a directory to a specified extension.
 * 
 * @package FileConverter
 * @author Ramazan Çetinkaya
 * @version 1.0.0
 * @since 2023-02-13
 */
class FileExtensionConverter {
    
    /**
     * The directory path that contains the files to be converted
     * 
     * @var string
     */
    private $directory;
    
    /**
     * The extension to which the files will be converted
     * 
     * @var string
     */
    private $newExtension;
    
    /**
     * The number of files that have been converted
     * 
     * @var int
     */
    private $convertedFileCount = 0;
    
    /**
     * The start time of the conversion process
     * 
     * @var float
     */
    private $startTime;
    
    /**
     * The end time of the conversion process
     * 
     * @var float
     */
    private $endTime;
    
    /**
     * Constructor
     * 
     * @param string $directory The directory path that contains the files to be converted
     * @param string $newExtension The extension to which the files will be converted
     */
    public function __construct(string $directory, string $newExtension) {
        $this->directory = $directory;
        $this->newExtension = $newExtension;
    }
    
    /**
     * Convert all files in the specified directory to the specified extension
     * 
     * @return void
     */
    public function convertFiles(): void {
        $this->startTime = microtime(true);
        
        $files = $this->getFiles();
        
        foreach ($files as $file) {
            $oldFileName = $file;
            $newFileName = $this->getNewFileName($file);
            
            if (rename($oldFileName, $newFileName)) {
                $this->convertedFileCount++;
            }
        }
        
        $this->endTime = microtime(true);
    }
    
    /**
     * Get all files in the specified directory
     * 
     * @return array An array of file names
     */
    private function getFiles(): array {
        return array_filter(scandir($this->directory), function($file) {
            return !in_array($file, ['.', '..']);
        });
    }
    
    /**
     * Get the new file name after conversion
     * 
     * @param string $oldFile
     * 
     * @return string The new file name
     */
    private function getNewFileName(string $oldFile): string {
        $fileInfo = pathinfo($oldFile);
        return $fileInfo['dirname'] . '/' . $fileInfo['filename'] . '.' . $this->newExtension;
    }
    
    /**
     * Get the number of converted files
     * 
     * @return int The number of converted files
     */
    public function getConvertedFileCount(): int {
        return $this->convertedFileCount;
    }
    
    /**
     * Get the time it took to convert all files
     * 
     * @return float The time it took to convert all files
     */
    public function getConversionTime(): float {
        return $this->endTime - $this->startTime;
    }
}
