<?php
namespace Chuva\Tests\Unit\WebScrapping\WebScrapping;

use Chuva\Php\WebScrapping\Scrapper;
use PHPUnit\Framework\TestCase;

class ScrapperTest extends TestCase {

  public function testScrapSignature() {
    $filePath = 'Webscrapping\assets\origin.html';
    $outputCsvPath = 'Webscrapping\output.csv';

    $scrapper = new Scrapper();
    $result = $scrapper->scrapAndWriteToCsv($filePath, $outputCsvPath);
    var_dump($result);

    $this->assertIsArray($result);
  }

}
