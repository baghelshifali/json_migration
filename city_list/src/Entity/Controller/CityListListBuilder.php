<?php

namespace Drupal\city_list\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Provides a list controller for city_list entity.
 *
 * @ingroup city_list
 */
class CityListListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   *
   * We override ::render() so that we can add our own content above the table.
   * parent::render() is where EntityListBuilder creates the table using our
   * buildHeader() and buildRow() implementations.
   */
  public function render() {
    $build['description'] = [
      '#markup' => $this->t('Content Entity Example implements a city list model. These contacts are fieldable entities. You can manage the fields on the <a href="@adminlink">City list admin page</a>.', [
        '@adminlink' => \Drupal::urlGenerator()
          ->generateFromRoute('city_list.city_list_settings'),
      ]),
    ];
    $build['table'] = parent::render();
    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the city list.
   *
   * Calling the parent::buildHeader() adds a column for the possible actions
   * and inserts the 'edit' and 'delete' links as defined for the entity type.
   */
  public function buildHeader() {
    $header['city_id'] = $this->t('City ID');
    $header['city_title'] = $this->t('City title');
    $header['latitude'] = $this->t('Latitude');
    $header['longitude'] = $this->t('Longitude');
    $header['pop'] = $this->t('Pop');
    $header['state'] = $this->t('State');
    return $header + parent::buildHeader();
  }

  /**
   * Add rows in the table.
   */
  public function buildRow(EntityInterface $entity) {
    /** @var \Drupal\city_list\Entity\city_list $entity */
    $row['city_id'] = $entity->city_id->value;
    $row['city_title'] = $entity->city_title->value;
    $row['latitude'] = $entity->latitude->value;
    $row['longitude'] = $entity->longitude->value;
    $row['pop'] = $entity->pop->value;
    $row['state'] = $entity->state->value;
    return $row + parent::buildRow($entity);
  }

}
