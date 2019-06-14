<?php
namespace BT\Models;

use BT\Core\ResourceModel;
use BT\Models\CanboModel;

class CanboResourceModel extends ResourceModel
{
    public function __construct(CanboModel $canboModel)
    {
        $this->_init("canbo", "id", $canboModel);
    }
}