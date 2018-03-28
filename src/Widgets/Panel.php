<?php

namespace Encore\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;

class Panel extends Widget implements Renderable
{
    /**
     * @var string
     */
    protected $view = 'admin::widgets.panel';

    /**
     * @var string
     */
    protected $title = 'Panel header';

    /**
     * @var string
     */
    protected $content = 'here is the Panel content.';

    protected $footer = 'Panel Foote';

    /**
     * @var array
     */
    protected $tools = [];

    /**
     * Box constructor.
     *
     * @param string $title
     * @param string $content
     */
    public function __construct($title = '', $content = '', $footer = '')
    {
        if ($title) {
            $this->title($title);
        }

        if ($content) {
            $this->content($content);
        }

        if($footer){
            $this->footer($footer);
        }

        $this->class('panel');
    }

    /**
     * Set box content.
     *
     * @param string $content
     *
     * @return $this
     */
    public function content($content)
    {
        if ($content instanceof Renderable) {
            $this->content = $content->render();
        } else {
            $this->content = (string) $content;
        }

        return $this;
    }

    /**
     * Set box title.
     *
     * @param string $title
     *
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;

        return $this;
    }

    public function footer($footer)
    {
        $this->footer = $title;

        return $this;

    }

    /**
     * Set box as collapsable.
     *
     * @return $this
     */
    public function collapsable()
    {
        $this->tools[] =
            '<a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>';

        return $this;
    }

    /**
     * Set box as removable.
     *
     * @return $this
     */
    public function removable()
    {
        $this->tools[] =
            '<a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a>';

        return $this;
    }

    /**
     * Set box style.
     *
     * @param string $styles
     *
     * @return $this|Box
     */
    public function style($styles)
    {
        if (is_string($styles)) {
            return $this->style([$styles]);
        }

        $styles = array_map(function ($style) {
            return 'box-'.$style;
        }, $styles);

        $this->class = $this->class.' '.implode(' ', $styles);

        return $this;
    }

    /**
     * Add `box-solid` class to box.
     *
     * @return $this
     */
    public function solid()
    {
        return $this->style('solid');
    }

    /**
     * Variables in view.
     *
     * @return array
     */
    protected function variables()
    {
        return [
            'title'      => $this->title,
            'content'    => $this->content,
            'tools'      => $this->tools,
            'attributes' => $this->formatAttributes(),
        ];
    }

    /**
     * Render box.
     *
     * @return string
     */
    public function render()
    {
        return view($this->view, $this->variables())->render();
    }
}
