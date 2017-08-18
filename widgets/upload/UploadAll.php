<?php

namespace app\widgets\upload;

use app\widgets\upload\UploadAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;
use Yii;
use app\models\website\Alias;

/**
 * AddInBasket widget 
 *
 */
class UploadAll extends \yii\bootstrap\Widget
{

    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'span';
    /**
     * @var string the button label
     */
    public $label = 'Загрузить';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = false;
    /**
     * @var form
     */
    public $form;
    /**
     * @var model
     */
    public $model;
    /**
     * @var alias
     */
    private $alias=[];
    /**
     * @var websiteid
     */
    public $websiteid;
    /**
     * @var attribute
     */
    public $attribute;
    /**
     * @var template
     */
    public $template="{label}\n{input}\n{hint}\n{error}";
    /**
     * @var tagClass
     */
    public $tagClass='';
    /**
     * @var host
     */
    public $host='';


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();

        $this->host=Url::to(['default/img','id'=>$this->websiteid,'img'=>'']);

        $view = $this->getView();

        UploadAsset::register($view);

        $this->clientOptions = false;

        $this->options["type"]="file";

        $this->options["multiple"]="multiple";

        $images=Json::decode($this->model[$this->attribute] ? $this->model[$this->attribute] : '[]');

        foreach ($images as $key => $value) {
            $this->alias[] = Alias::find()->where(["websiteid"=>$this->websiteid,"link"=>$value])->one();
        }

        Yii::$app->view->registerJs("

            function parseitemsjson".$this->options['id']." () {
                var files =[];
                \$('#".Html::getInputId($this->model, $this->attribute)."').val('');
                \$('#".$this->options['id']."message-attachments .message-attachment .attachment-content input').each(function( index, value ) {
                    files.push(\$(this).val());
                });
                if (!files.length)
                    \$('#".$this->options['id']."message-attachments').addClass('no-s');

                \$('#".Html::getInputId($this->model, $this->attribute)."').val(JSON.stringify(files));
            }

            var panelList".$this->options['id']." = \$('#".$this->options['id']."message-attachments');

            panelList".$this->options['id'].".sortable({
                handle: '.attachment-content', 
                update: function() {
                    \$('.message-attachment', panelList".$this->options['id'].").each(function(index, elem) {
                        var \$listItem = \$(elem),
                        newIndex = \$listItem.index();
                    });
                    parseitemsjson".$this->options['id']."();
                }
            });
            

            \$(function () {
                \$('#".$this->options['id']."message-attachments').on( 'click', '.".$this->options['id']."delete', function(e) {
                    \$(this).parent().parent().parent().remove();
                    parseitemsjson".$this->options['id']."();
                    e.preventDefault();
                });
                'use strict';
                // Change this to the location of your server-side upload handler:
                var url = '".\yii\helpers\Url::to(['/site/upload','id'=>$this->websiteid])."';
                var host = '".$this->host."';
                \$('#".$this->options['id']."').fileupload({
                    url: url,
                    dataType: 'json',
                    start: function (e, data) {
                        \$('#".$this->options['id']."progress .progress-bar').css(
                            'width',
                            0 + '%'
                        );
                        \$('#".$this->options['id']."progress').show();
                    },
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            if (file.error) {
                                alert(file.error);
                            } else {
                                \$('#".$this->options['id']."message-attachments').removeClass('no-s');
                                \$('#".$this->options['id']."message-attachments').append('".
                                    Html::tag('div',
                                        Html::tag('div',
                                            '<img src="\'+host+file.url+\'&v=small">'.
                                            '<input type="hidden" value="\'+file.url+\'">'
                                        ,['class' => 'attachment-content']).
                                        Html::tag('div',
                                            '<p>\'+file.name+\'</p>'.
                                            Html::tag('span',
                                                Html::a('<i class="icon-trash"></i> Удалить',
                                                    '#'
                                                ,['class'=>'text-danger '.$this->options['id'].'delete'])
                                            )
                                        ,['class' => 'attachment-info'])
                                    ,['class' => 'message-attachment']).
                                "');
                                parseitemsjson".$this->options['id']."();
                            }
                        });
                    },
                    progressall: function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        \$('#".$this->options['id']."progress .progress-bar').css(
                            'width',
                            progress + '%'
                        );
                    }
                }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled').bind('fileuploadstop', function (e) { \$('#".$this->options['id']."progress').hide(); });
            });

            ", \yii\web\View::POS_END);

    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $tmp='';
        foreach ($this->alias as $aliasrow) {
            $tmp.=($aliasrow && $aliasrow->link? 
                Html::tag('div',
                    Html::tag('div',
                        Html::img($this->host.$aliasrow->link.'&v=small').
                        Html::input('hidden', null, $aliasrow->link)
                    ,['class' => 'attachment-content']).
                    Html::tag('div',
                        Html::tag('p',
                            basename($aliasrow->image)
                        ).
                        Html::tag('span',
                            Html::a('<i class="icon-trash"></i> Удалить',
                                '#'
                            ,['class'=>'text-danger '.$this->options['id'].'delete'])
                        )
                    ,['class' => 'attachment-info'])
                ,['class' => 'message-attachment'])
                : '');
        }
        echo $this->form->field($this->model, $this->attribute, [
            "template" => $this->template.Html::tag('div', $tmp, ['id' => $this->options['id'].'message-attachments', 'class' => ($this->model[$this->attribute] && count($this->alias)) ? 'message-attachments no-b' : 'message-attachments no-b no-s']).

            Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label .Html::tag('input', null, $this->options), ['class' => $this->tagClass]).
            Html::tag('p',' ').
            Html::tag('div',
                Html::tag('div','',['class'=>"progress-bar progress-bar-striped active progress-bar-success"]),
            ['id'=>$this->options['id'].'progress','class'=>"progress progress-xs",'style'=>"display:none;"])
        ])->hiddenInput(['maxlength' => true]);
        
        parent::run();
    }
}
