<?php

namespace Scaleway\ObjectStorage\migrations;

use Craft;
use craft\db\Migration;
use craft\services\ProjectConfig;
use Scalway\ObjectStorage\Scaleway;

/**
 * Installation Migration
 */
class Install extends Migration
{
    public function safeUp(): bool
    {
        // Update any old S3 configs
        $projectConfig = Craft::$app->getProjectConfig();
        $fsConfigs = $projectConfig->get(ProjectConfig::PATH_FS) ?? [];

        foreach ($fsConfigs as $uid => $config) {
            if ($config['type'] === 'Scaleway\ObjectStorage\Volume') {
                $config['type'] = Scaleway::class;
                $projectConfig->set(sprintf('%s.%s', ProjectConfig::PATH_FS, $uid), $config);
            }
        }

        return true;
    }

    public function safeDown(): bool
    {
        return true;
    }
}
