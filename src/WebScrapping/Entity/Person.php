<?php

namespace Chuva\Php\WebScrapping\Entity;

/**
 * Paper Author personal information.
 */
class Person {

  /**
   * Person name.
   *
   * @var string
   */
  public string $name;

  /**
   * Person institution.
   *
   * @var string
   */
  public string $institution;

  /**
   * Builder.
   */
  public function __construct($name, $institution) {
    $this->name = $name;
    $this->institution = $institution;
  }

  /**
   * Get the person's name.
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Get the person's institution.
   *
   * @return string
   */
  public function getInstitution() {
    return $this->institution;
  }
}
