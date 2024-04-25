<?php

namespace Chuva\Tests\Unit\WebScrapping\WebScrapping;

use Chuva\Php\WebScrapping\Scrapper;
use PHPUnit\Framework\TestCase;

class ScrapperTest extends TestCase {

  public function testScrapSignature() {
    $filePath = 'path/to/your/html/file.html';
    $outputCsvPath = 'path/to/your/output.csv';

    $scrapper = new Scrapper();
    $result = $scrapper->scrapAndWriteToCsv($filePath, $outputCsvPath);

    $this->assertTrue($result);
  }

}

