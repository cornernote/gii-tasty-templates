<?php
/**
 * The following variables are available in this template:
 * @var $this CrudCode
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-dressing
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-dressing/master/license.txt
 */

echo "<?php\n";
echo "/**\n";
echo " * @var " . $this->controllerClass . " \$this\n";
echo " * @var " . $this->modelClass . " \$" . lcfirst($this->modelClass) . "\n";
echo " */\n";
echo "\n";
echo "\$columns = array();\n";
$count = 0;
foreach ($this->tableSchema->columns as $column) {
    if (++$count == 7)
        echo "\t\t/*\n";
    echo "\$columns[] = array(\n";
    echo "    'name' => '" . $column->name . "',\n";
    if ($column->autoIncrement) {
        echo "    'class' => 'dressing.widgets.YdDropdownColumn',\n";
        echo "    'value' => '\$data->getIdString()',\n";
    }
    echo ");\n";
}
if ($count >= 7)
    echo "\t\t*/\n";
echo "\n";
echo "// multi actions\n";
echo "\$multiActions = array();\n";
echo "\$multiActions[] = array(\n";
echo "    'name' => Yii::t('app', 'Delete'),\n";
echo "    'url' => Yii::app()->createUrl('/" . lcfirst($this->modelClass) . "/delete', array('returnUrl' => Yii::app()->returnUrl->getLinkValue(true))),\n";
echo ");\n";
echo "\n";
echo "// grid\n";
echo "\$this->widget('GridView', array(\n";
echo "    'id' => '" . lcfirst($this->modelClass) . "-grid',\n";
echo "    'dataProvider' => isset(\$dataProvider) ? \$dataProvider : \$" . lcfirst($this->modelClass) . "->search(),\n";
echo "    'filter' => \$" . lcfirst($this->modelClass) . ",\n";
echo "    'columns' => \$columns,\n";
echo "    'multiActions' => \$multiActions,\n";
echo "));\n";
