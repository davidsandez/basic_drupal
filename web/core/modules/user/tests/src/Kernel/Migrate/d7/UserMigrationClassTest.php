<?php

declare(strict_types=1);

namespace Drupal\Tests\user\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests the user migration plugin class.
 *
 * @group user
 */
class UserMigrationClassTest extends MigrateDrupal7TestBase {

  /**
   * Tests that the profile value process is added to the pipeline.
   *
   * Ensures profile fields are merged into the d7_profile_values migration's
   * process pipeline.
   */
  public function testClass(): void {
    $migration = $this->getMigration('d7_user');
    $this->assertSame('d7_user', $migration->id());
    $process = $migration->getProcess();
    $this->assertSame('field_file', $process['field_file'][0]['source']);
  }

}
