<?php

namespace Chuva\Php\WebScrapping;


class Main {

  
  public static function run(): void {
   
    libxml_use_internal_errors(true);

    
    $htmlFilePath = 'C:\Users\Felipe Bento\Desktop\Exercicios Chuva php\php\assets\origin.html';
    $outputCsvPath = 'output.csv';

    $scrapper = new Scrapper();
    $success = $scrapper->scrapAndWriteToCsv($htmlFilePath, $outputCsvPath);

    libxml_use_internal_errors(false);

    if ($success) {
      echo "Os dados foram salvos em $outputCsvPath com sucesso.\n";
    } else {
      echo "Erro ocorrido durante a raspagem e escrita para o CSV.\n";
    }
  }
}


