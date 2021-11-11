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
     * Clean up markup from template
     *
     * @param string $markup
     * @return string
     */
    public function cleanMarkup(string $markup): string
    {

        return str_replace(
            [
                'id="btnUpdateBrowser"',
                'http://outdatedbrowser.com',
                '<h6>',
                '</h6>',
                ' class="last"',
                '<a href="#" id="btnCloseUpdateBrowser"',
                '>&times;</a>'
            ],
            [
                'id="btnUpdateBrowser" rel="nofollow noopener" target="_blank"',
                'https://bestvpn.org/outdatedbrowser',
                '<p><strong>',
                '</strong></p>',
                ' class="outdated-last"',
                '<button type="button" id="btnCloseUpdateBrowser"',
                '>&times;</button>'
            ],
            (string)$markup
        );
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
