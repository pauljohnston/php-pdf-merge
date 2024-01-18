# PDF Merge for PHP

PDF Merge library for PHP.

Install with composer:

`composer require pauljohnston/php-pdf-merge`

Should add dependency:

```json
"pauljohnston/php-pdf-merge": "^2.3"
```

## Highlights

Pdf merging with modes portrait/landscape.

Tested in Laravel10 framework (but still can be used without any framework as standalone utility).

## Usage

```php
// Autoload composer classes...

// and now we can use library
$pdf = new \Pauljohnston\PDFMerge\PDFMerger;

// add as many pdfs as you want
$pdf->addPDF('path/to/source/file.pdf', 'all', 'portrait')
  ->addPDF('path/to/source/file1.pdf', 'all')
  ->addPDF('path/to/source/file2.pdf', 'all', 'landscape');

// call merge, output format `file`
$pdf->merge('file', 'path/to/export/dir/file.pdf');
```

That's it!

Enjoy and leave star if you like it :)
