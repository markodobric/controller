<?php

/*
 * This file is part of the Active Collab Controller project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

namespace ActiveCollab\Controller\ActionResult;

interface ViewResultInterface extends ActionResultInterface
{
    public function getContentType(): string;

    public function getEncoding(): string;

    public function fetch(): string;
}