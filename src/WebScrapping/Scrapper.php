<?php
namespace Chuva\Php\WebScrapping;

class Scrapper {
    public function scrapAndWriteToCsv(string $filePath, string $outputCsvPath): bool {
        $html = file_get_contents($filePath);

        if ($html === false) {
            return false;
        }

        $dom = new \DOMDocument('1.0', 'utf-8');
        libxml_use_internal_errors(true);
        
        if (!$dom->loadHTML($html)) {
            libxml_clear_errors();
            return false;
        }
        libxml_clear_errors();

        $cards = $dom->getElementsByTagName('a');

        $file = fopen($outputCsvPath, 'w');
        if ($file === false) {
            return false;
        }

        fputcsv($file, ['ID', 'Title', 'Type', 'Authors', 'Institutions']);

        foreach ($cards as $card) {
            if ($card->getAttribute('class') === 'paper-card p-lg bd-gradient-left') {
                $title = '';
                $type = '';
                $authors = [];
                $id = '';

                foreach ($card->childNodes as $child) {
                    if ($child instanceof \DOMElement) {
                        switch ($child->getAttribute('class')) {
                            case 'my-xs paper-title':
                                $title = $child->nodeValue;
                                break;
                            case 'authors':
                                $authorSpans = $child->getElementsByTagName('span');
                                foreach ($authorSpans as $authorSpan) {
                                    $authors[] = [
                                        'name' => trim($authorSpan->nodeValue),
                                        'institution' => $authorSpan->getAttribute('title'),
                                    ];
                                }
                                break;
                            case 'tags mr-sm':
                                $type = $child->nodeValue;
                                break;
                            case 'volume-info':
                                $id = $child->nodeValue;
                                break;
                        }
                    }
                }

                $authorNames = array_column($authors, 'name');
                $authorInstitutions = array_column($authors, 'institution');
                fputcsv($file, [
                    $id,
                    $title,
                    $type,
                    implode(', ', $authorNames),
                    implode(', ', $authorInstitutions),
                ]);
            }
        }

        fclose($file);

        return true;
    }
}


