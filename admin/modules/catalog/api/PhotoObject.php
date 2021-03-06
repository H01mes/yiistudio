<?
namespace admin\modules\catalog\api;

use Yii;
use admin\components\API;
use yii\helpers\Html;
use yii\helpers\Url;

class PhotoObject extends \admin\components\ApiObject
{
    public $image;
    public $description;

    public function box($width, $height = null){
        $img = Html::img($this->thumb($width, $height));
        $a = Html::a($img, $this->image, [            
            'rel' => 'catalog-'.$this->model->id,
            'title' => $this->description,
            'data-caption' => $this->description,
        ]);
        return LIVE_EDIT ? API::liveEdit($a, $this->editLink) : $a;
    }

    public function getEditLink(){
        return Url::to(['/admin/catalog/item/photos', 'id' => $this->model->id]).'#photo-'.$this->id;
    }
}