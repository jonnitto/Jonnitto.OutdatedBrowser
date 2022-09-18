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
     * Add domain to the template
     *
     * @param string $markup
     * @return string
     */
    public function replaceHref(string $markup, string $href, string $locale): string
    {
        $href = str_replace('{locale}', $locale, $href);
        return str_replace('{href}', $href, (string) $markup);
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
