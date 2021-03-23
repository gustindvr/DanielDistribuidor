<?php

namespace Drupal\distribuidora_components\Plugin\ThemeEntityProcessor\Node;


use Drupal\file\Entity\File;
use Drupal\handlebars_theme_handler\Plugin\ThemeEntityProcessorBase;
use Drupal\handlebars_theme_handler\Plugin\ThemeEntityProcessorManager;
use Drupal\handlebars_theme_handler\Plugin\ThemeFieldProcessorManager;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Returns the structured data of an entity.
 *
 * @ThemeEntityProcessor(
 *   id = "node__products__full",
 *   label = @Translation("Node: Editor: Full"),
 *   entity_type = "node",
 *   bundle = "editor",
 *   view_mode = "full"
 * )
 */

class EditorFull extends ThemeEntityProcessorBase {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('plugin.manager.handlebars_theme_handler_entity_processor'),
      $container->get('plugin.manager.handlebars_theme_handler_field_processor')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ThemeEntityProcessorManager $themeEntityProcessorManager, ThemeFieldProcessorManager $themeFieldProcessorManager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $themeEntityProcessorManager, $themeFieldProcessorManager);
  }

  /**
   * {@inheritdoc}
   */

  public function preprocessItemData(&$variables) {
    $node = $variables['elements']['#node'];
    
    $body = $node->get('body')->value;
    


    $variables['data'] = [
      'title' => $node->getTitle(),
      //'body' => $body,
      //'image_data' => $this->getImage($node)
    ];


  }
  
  /*public function getImage($node){
    $data = [];

    $fid = (!empty($node->get('field_image')->getValue()[0]) ? $node->get('field_image')->getValue()[0]['target_id'] : null);

    if(!empty($fid)){
      $file = File::load($fid);
      $data = [
        'uri' => $file->getFileUri(),
        'alt' => $node->get('field_image')->getValue()[0]['alt']
      ];
    }

    return $data;
  }
  */
}
