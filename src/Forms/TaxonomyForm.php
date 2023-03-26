<?php

namespace Waterhole\Forms;

use Waterhole\Extend;
use Waterhole\Forms\Fields\Permissions;
use Waterhole\Models\Taxonomy;

class TaxonomyForm extends Form
{
    public function __construct(Taxonomy $taxonomy)
    {
        parent::__construct($taxonomy);
    }

    public function fields(): array
    {
        return [
            new FormSection(
                __('waterhole::cp.taxonomy-details-title'),
                Extend\TaxonomyForm::components(['model' => $this->model]),
            ),
            new FormSection(
                __('waterhole::cp.taxonomy-permissions-title'),
                [new Permissions($this->model)],
                open: false,
            ),
        ];
    }
}
