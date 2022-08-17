<?php

namespace Kanboard\Plugin\TaskAssignPriorityToCategory;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskAssignPriorityToCategory\Action\TaskAssignPriorityToCategory;

use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
      $this->actionManager->register(new TaskAssignPriorityToCategory($this->container));
    }

    public function onStartup() {
        // load Translation
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName()
    {
        return 'TaskAssignPriorityToCategory';
    }

    public function getPluginDescription()
    {
        return t('NEW automatic action: Assign automatically a priority based on a category');
    }

    public function getPluginAuthor()
    {
        return 'Manfred Hoffmann';
    }

    public function getPluginVersion()
    {
        return '0.8.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/manne65-hd/kanboard-TaskAssignPriorityToCategory';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.19';
    }
}
