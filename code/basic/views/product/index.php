<?php
/** @var yii\web\View $this */
/** @var ActiveDataProvider $dataProvider */

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
?>
<h1>Тестовое задание</h1>
<h3>Список продуктов</h3>
<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
       'name',
        [
                'label' => 'priority',
            'value' => function ($product) {
                foreach ($product->tags as $tag) {
                    $pr .= ' ' . $tag->priority;
                }
                return $pr;
            }
        ],
        [
            'class' => 'yii\grid\DataColumn',
            'label' => 'Тэги',
            'format' => 'raw',
            'value' => function ($product) {
                foreach($product->tags as $tag) {
                    $tags .= "<span style='padding:5px; margin-right: 10px; border-radius: 5px; color: white; background-color: #{$tag->group->color};'>{$tag->name}</span>";
                }
               return $tags;
            },
        ],
    ],
]);
?>
<p>

</p>
