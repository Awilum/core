<?php

namespace Waterhole\View\Components;

use Illuminate\View\Component;

class ActionButton extends Component
{
    public function __construct(
        public $for,
        public string $action,
        public ?string $return = null,
        public bool $icon = false,
        public array $formAttributes = [],
    ) {
    }

    public function render()
    {
        return $this->view('waterhole::components.action-button');
    }
}
