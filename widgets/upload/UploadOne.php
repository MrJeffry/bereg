<?php

namespace app\widgets\upload;

use app\widgets\upload\UploadAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use Yii;

/**
 * AddInBasket widget 
 *
 */
class UploadOne extends \yii\bootstrap\Widget
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

        Yii::$app->view->registerJs("

            \$(function () {
                \$('#".$this->options['id']."message-attachments').on( 'click', '.".$this->options['id']."delete', function(e) {
                    \$('#".$this->options['id']."message-attachments .message-attachment').remove();
                    \$('#".$this->options['id']."message-attachments').addClass('no-s');
                    \$('#".Html::getInputId($this->model, $this->attribute)."').val('');
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
                                \$('#".$this->options['id']."message-attachments .message-attachment').remove();
                                \$('#".Html::getInputId($this->model, $this->attribute)."').val(file.url);
                                \$('#".$this->options['id']."message-attachments').append('".
                                    Html::tag('div',
                                        Html::tag('div',
                                            '<img src="\'+file.url+\'">'
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
                            }
                        });
                        \$('#".$this->options['id']."progress').hide();
                    },
                    progressall: function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        \$('#".$this->options['id']."progress .progress-bar').css(
                            'width',
                            progress + '%'
                        );
                    }
                }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled');
            });

            ", \yii\web\View::POS_END);

    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo $this->form->field($this->model, $this->attribute, [
            "template" => $this->template.
            Html::tag('div',
                ($this->model[$this->attribute] ?
                Html::tag('div',
                    Html::tag('div',
                        Html::img($this->model[$this->attribute])
                    ,['class' => 'attachment-content']).
                    Html::tag('div',
                        Html::tag('p',
                            basename($this->model[$this->attribute])
                        ).
                        Html::tag('span',
                            Html::a('<i class="icon-trash"></i> Удалить',
                                '#'
                            ,['class'=>'text-danger '.$this->options['id'].'delete'])
                        )
                    ,['class' => 'attachment-info'])
                ,['class' => 'message-attachment'])
                : '')
            ,['id' => $this->options['id'].'message-attachments', 'class' => ($this->model[$this->attribute]) ? 'message-attachments no-b' : 'message-attachments no-b no-s']).
            Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label .Html::tag('input', null, $this->options), ['class' => $this->tagClass]).
            Html::tag('p',' ').
            Html::tag('div',
                Html::tag('div','',['class'=>"progress-bar progress-bar-striped active progress-bar-success"]),
            ['id'=>$this->options['id'].'progress','class'=>"progress progress-xs",'style'=>"display:none;"])
        ])->hiddenInput(['maxlength' => true]);
        
        parent::run();
    }
}
