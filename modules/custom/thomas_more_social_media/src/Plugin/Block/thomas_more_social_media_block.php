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
  public function build() {
    return [
      '#markup' => 'Test',
    ];
  }

}
