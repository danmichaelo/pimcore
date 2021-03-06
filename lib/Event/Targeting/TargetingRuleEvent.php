<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Event\Targeting;

use Pimcore\Model\Tool\Targeting\Rule;
use Pimcore\Targeting\Model\VisitorInfo;

class TargetingRuleEvent extends TargetingEvent
{
    /**
     * @var Rule
     */
    private $rule;

    public function __construct(VisitorInfo $visitorInfo, Rule $rule)
    {
        parent::__construct($visitorInfo);

        $this->rule = $rule;
    }

    public function getRule(): Rule
    {
        return $this->rule;
    }
}
