<?php

namespace Drupal\custom_feed_migration\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Extracts the image URL from the media:content element.
 *
 * @MigrateProcessPlugin(
 *   id = "custom_image_url_parser"
 * )
 */
class CustomImageUrlParser extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {  
    $attributes = $value->attributes();
    if (isset($attributes['url'])) {
      return (string) $attributes['url'];
    }
    return NULL;
  }
}
