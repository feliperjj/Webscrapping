<?php

namespace Chuva\Php\WebScrapping\Entity;

/**
 * The Paper class represents the row of the parsed data.
 */
class Paper {

  /**
   * Paper Id.
   *
   * @var int
   */
  public $id;

  /**
   * Paper Title.
   *
   * @var string
   */
  public $title;

  /**
   * The paper type (e.g. Poster, Nobel Prize, etc).
   *
   * @var string
   */
  public $type;

  /**
   * Paper authors.
   *
   * @var \Chuva\Php\WebScrapping\Entity\Person[]
   */
  public $authors;

  /**
   * Builder.
   */
  public function __construct($id, $title, $type, $authors = []) {
    $this->id = $id;
    $this->title = $title;
    $this->type = $type;
    $this->authors = $authors;
  }

  /**
   * Get the paper Id.
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Get the paper Title.
   *
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Get the paper Type.
   *
   * @return string
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Get the paper authors.
   *
   * @return \Chuva\Php\WebScrapping\Entity\Person[]
   */
  public function getAuthors() {
    return $this->authors;
  }
}
$author1 = new Person('Bryan Nickson Santana Pinto', 'Departamento de Química / Centro de Ciências Exatas e Tecnológicas / Universidade Federal de Viçosa - Campus Viçosa');
$author2 = new Person('Gabriella Almeida  Moura', 'Departamento de Química / Centro de Ciências Exatas e Tecnológicas / Universidade Federal de Viçosa - Campus Viçosa');
$author3 = new Person('Antonio Demuner', 'Departamento de Química / Centro de Ciências Exatas e Tecnológicas / Universidade Federal de Viçosa - Campus Viçosa');
$author4 = new Person('Elson Santiago', 'Departamento de Química / Centro de Ciências Exatas e Tecnológicas / Universidade Federal de Viçosa - Campus Viçosa');

// Criando o exemplo de objeto Paper
$paper = new Paper(
    137458,
    'Structural elucidation of a novel pyrrolizidine alkaloid isolated from Crotalaria retusa L.',
    'Poster Presentation',
    [$author1, $author2, $author3, $author4]
);

// Exibindo os dados do paper
echo "ID: " . $paper->getId() . "\n";
echo "Title: " . $paper->getTitle() . "\n";
echo "Type: " . $paper->getType() . "\n";
echo "Authors:\n";
foreach ($paper->getAuthors() as $author) {
    echo "- Name: " . $author->getName() . ", Institution: " . $author->getInstitution() . "\n";
}
