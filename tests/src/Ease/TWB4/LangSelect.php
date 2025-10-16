<?php
declare(strict_types=1);

require_once __DIR__ . '/../../../../src/Ease/TWB4/Widgets/LangSelect.php';

use PHPUnit\Framework\TestCase;
use Ease\TWB4\Widgets\LangSelect;

class LangSelectTest extends TestCase
{
    public function testConstructorSetsDropdownClass()
    {
        $widget = new LangSelect();
        $this->assertStringContainsString('dropdown', $widget->getTagProperty('class'));
    }

    public function testDropdownContainsAvailableLanguages()
    {
        $widget = new LangSelect();
        $html = $widget->getRendered();
        $locale = \Ease\Locale::singleton();
        $availableLanguages = $locale->availble();
        foreach ($availableLanguages as $code => $langInfo) {
            $langName = substr($langInfo, 0, strpos($langInfo, ' (') ?: strlen($langInfo));
            $this->assertStringContainsString($langName, $html);
        }
    }

    public function testFinalizeCallsBootstrapize()
    {
        $this->expectNotToPerformAssertions();
        $widget = new LangSelect();
        $widget->finalize();
    }
}
