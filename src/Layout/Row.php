<?php

namespace Encore\Admin\Layout;

class Row implements Buildable
{
    /**
     * @var Column[]
     */
    protected $columns = [];

    protected $row_base = 'row';

    /**
     * Row constructor.
     *
     * @param string $content
     */
    public function __construct($content = '')
    {
        if (!empty($content)) {
            $this->column(12, $content);
        }

        $active_theme = config('admin.active_theme');
        $this->row_base = config('admin.'.$active_theme.'.row_class_base');
    }

    /**
     * Add a column.
     *
     * @param int $width
     * @param $content
     */
    public function column($width, $content)
    {
        $column = new Column($content, $width);

        $this->addColumn($column);
    }

    /**
     * @param Column $column
     */
    protected function addColumn(Column $column)
    {
        $this->columns[] = $column;
    }

    /**
     * Build row column.
     */
    public function build()
    {
        $this->startRow();

        foreach ($this->columns as $column) {
            $column->build();
        }

        $this->endRow();
    }

    /**
     * Start row.
     */
    protected function startRow()
    {
        echo "<div class=\"{$this->row_base}\">";
    }

    /**
     * End column.
     */
    protected function endRow()
    {
        echo '</div>';
    }
}
