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
    public function isCrawler($httpRequest)
    {
        $CrawlerDetect = new CrawlerDetect;
        $userAgent = is_string($httpRequest) ? $httpRequest : $httpRequest->getHeader('User-Agent');
        return $CrawlerDetect->isCrawler($userAgent);
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
