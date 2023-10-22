<?php

namespace Drupal\city_list\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * City list Type.
 *
 * @ConfigEntityType(
 *   id = "city_list_type",
 *   label = @Translation("City List Type"),
 *   bundle_of = "city_list",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   config_prefix = "city_list_type",
 *   config_export = {
 *     "id",
 *     "label",
 *   },
 *   handlers = {
 *     "form" = {
 *       "default" = "Drupal\city_list\Form\CityListTypeEntityForm",
 *       "add" = "Drupal\city_list\Form\CityListTypeEntityForm",
 *       "edit" = "Drupal\city_list\Form\CityListTypeEntityForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer site configuration",
 *   links = {
 *     "canonical" = "/admin/structure/city_list_type/{city_list_type}",
 *     "add-form" = "/admin/structure/city_list_type/add",
 *     "edit-form" = "/admin/structure/city_list_type/{city_list_type}/edit",
 *     "delete-form" = "/admin/structure/city_list_type/{city_list_type}/delete",
 *     "collection" = "/admin/structure/city_list_type",
 *   }
 * )
 */
class CityListType extends ConfigEntityBundleBase {}
