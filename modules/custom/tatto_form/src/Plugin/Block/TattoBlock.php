<?php

namespace Drupal\tatto_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Tatto' Block.
 *
 * @Block(
 *   id = "tatto_block",
 *   admin_label = @Translation("Tatto block"),
 *   category = @Translation("Tatto"),
 * )
 */
class TattoBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $renderable = [
      '#theme' => 'Tatto Appointment',
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