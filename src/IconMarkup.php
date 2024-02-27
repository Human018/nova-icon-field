<?php

namespace Human018\IconMarkup;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class IconMarkup extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'icon-markup';

    public $asHtml = true;

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        $request = app(NovaRequest::class);

        if ($request->isFormRequest()) {
            return array_merge(parent::jsonSerialize(), [
            ]);
        }

        return array_merge(parent::jsonSerialize(), [
            'asHtml' => $this->asHtml,
        ]);
    }

}
