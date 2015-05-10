<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\PageBundle\Site;

use Sonata\PageBundle\Model\SiteInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * SiteSelectorInterface
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
interface SiteSelectorInterface
{
    /**
     * @return \Sonata\PageBundle\Model\SiteInterface
     */
    public function retrieve();

    /**
     * @return \Symfony\Component\Routing\RequestContext
     */
    public function getRequestContext();

    /**
     * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event);

    /**
     * This method hijack the path generated by the Generator cache file to use
     * the relative path from the current active site.
     *
     * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event
     */
    public function onKernelRequestRedirect(GetResponseEvent $event);
}
