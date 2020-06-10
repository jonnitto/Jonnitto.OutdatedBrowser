<?php

namespace Jonnitto\OutdatedBrowser\Eel;

use Jaybizzle\CrawlerDetect\CrawlerDetect;
use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

/**
 * @Flow\Proxy(false)
 */
class OutdatedBrowserHelper implements ProtectedContextAwareInterface
{

    /**
     * Check if visitor is a crawler
     * 
     * @return bool
     */
    public function isCrawler(): bool
    {
        $crawlerDetect = new CrawlerDetect;
        return $crawlerDetect->isCrawler();
    }

    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
