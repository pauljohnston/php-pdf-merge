<?php namespace Pauljohnston\PDFMerge;

/**
 * Description of PdfObject
 *
 * @author pauljohnston
 */
class PdfObject {
    
    public $path;
    
    // all / array of pages
    public $pages = 'all';
    
    // landscape / portrait
    public $orientation;
    
    /**
     * Get orientation key, portrait (P) or landscape (L)
     * @return type
     */
    public function getOrientationKey() {
        return $this->orientation == 'landscape' ? 'L' : 'P';
    }
    
}
