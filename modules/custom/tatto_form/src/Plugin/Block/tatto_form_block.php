<?php

namespace Drupal\tatto_form\Plugin\Block;

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
    /*
    return [
      '#markup' => 'Test',
    ];
    */
    $renderable = [
      '#theme' => 'my-form',
      '#test_var' => 'test variable',
      '#attached' => [
        'library' => [
          'tatto_form/tatto_form.libraries.yml',
        ],
      ],
    ];

    return $renderable;
  }

}