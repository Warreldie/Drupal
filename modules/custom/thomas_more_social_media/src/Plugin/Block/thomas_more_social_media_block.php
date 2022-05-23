<?php

namespace Drupal\thomas_more_social_media\src\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Test' Block.
 *
 * @Block(
 *   id = "test_block",
 *   admin_label = @Translation("Test block"),
 *   category = @Translation("Test"),
 * )
 */
class TestBlock extends BlockBase {
 /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $renderable = [
      '#theme' => 'social-media',
      '#test_var' => 'test variable',
      '#attached' => [
        'library' => [
          'thomas_more_social_media/thomas_more_social_media.libraries.yml',
        ],
      ],
    ];

    return $renderable;
  }

}
