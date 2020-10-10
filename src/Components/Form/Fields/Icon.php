<?php

namespace QuarkCMS\QuarkAdmin\Components\Form\Fields;

use QuarkCMS\QuarkAdmin\Components\Form\Item;
use Illuminate\Support\Arr;
use Exception;

class Icon extends Item
{
    public  $options;

    function __construct($name,$label = '') {
        $this->component = 'icon';
        $this->name = $name;
        $this->value = 0;

        if(empty($label) || !count($label)) {
            $this->label = $name;
        } else {
            $label = Arr::get($label, 0, ''); //[0];
            $this->label = $label;
        }

        $this->options = [
            'icon-database','icon-sever','icon-mobile','icon-tablet','icon-redenvelope',
            'icon-book','icon-filedone','icon-reconciliation','icon-file-exception',
            'icon-filesync','icon-filesearch','icon-solution','icon-fileprotect',
            'icon-file-add','icon-file-excel','icon-file-exclamation','icon-file-pdf',
            'icon-file-image','icon-file-markdown','icon-file-unknown','icon-file-ppt',
            'icon-file-word','icon-file','icon-file-zip','icon-file-text','icon-file-copy',
            'icon-snippets','icon-audit','icon-diff','icon-Batchfolding','icon-securityscan',
            'icon-propertysafety','icon-insurance','icon-alert','icon-delete','icon-hourglass',
            'icon-bulb','icon-experiment','icon-bell','icon-trophy','icon-rest','icon-USB',
            'icon-skin','icon-home','icon-bank','icon-filter','icon-funnelplot','icon-like',
            'icon-unlike','icon-unlock','icon-lock','icon-customerservice','icon-flag',
            'icon-moneycollect','icon-medicinebox','icon-shop','icon-rocket','icon-shopping',
            'icon-folder','icon-folder-open','icon-folder-add','icon-deploymentunit',
            'icon-accountbook','icon-contacts','icon-carryout','icon-calendar-check',
            'icon-calendar','icon-scan','icon-select','icon-boxplot','icon-build','icon-sliders',
            'icon-laptop','icon-barcode','icon-camera','icon-cluster','icon-gateway','icon-car',
            'icon-printer','icon-read','icon-cloud-server','icon-cloud-upload','icon-cloud',
            'icon-cloud-download','icon-cloud-sync','icon-video','icon-notification','icon-sound',
            'icon-radarchart','icon-qrcode','icon-fund','icon-image','icon-mail','icon-table',
            'icon-idcard','icon-creditcard','icon-heart','icon-block','icon-error','icon-star',
            'icon-gold','icon-heatmap','icon-wifi','icon-attachment','icon-edit','icon-key',
            'icon-api','icon-disconnect','icon-highlight','icon-monitor','icon-link','icon-man',
            'icon-percentage','icon-pushpin','icon-phone','icon-shake','icon-tag','icon-wrench',
            'icon-tags','icon-scissor','icon-mr','icon-share','icon-branches','icon-fork','icon-shrink',
            'icon-arrawsalt','icon-verticalright','icon-verticalleft','icon-right','icon-left',
            'icon-up','icon-down','icon-fullscreen','icon-fullscreen-exit','icon-doubleleft',
            'icon-doubleright','icon-arrowright','icon-arrowup','icon-arrowleft','icon-arrowdown',
            'icon-upload','icon-colum-height','icon-vertical-align-botto','icon-vertical-align-middl',
            'icon-totop','icon-vertical-align-top','icon-download','icon-sort-descending',
            'icon-sort-ascending','icon-fall','icon-swap','icon-stock','icon-rise','icon-indent',
            'icon-outdent','icon-menu','icon-unorderedlist','icon-orderedlist','icon-align-right',
            'icon-align-center','icon-align-left','icon-pic-center','icon-pic-right','icon-pic-left',
            'icon-bold','icon-font-colors','icon-exclaimination','icon-font-size','icon-check-circle',
            'icon-infomation','icon-CI','icon-line-height','icon-Dollar','icon-strikethrough','icon-compass',
            'icon-underline','icon-close-circle','icon-number','icon-frown','icon-italic','icon-info-circle',
            'icon-code','icon-left-circle','icon-column-width','icon-down-circle','icon-check','icon-EURO',
            'icon-ellipsis','icon-copyright','icon-dash','icon-minus-circle','icon-close','icon-meh',
            'icon-enter','icon-plus-circle','icon-line','icon-play-circle','icon-minus','icon-question-circle',
            'icon-question','icon-Pound','icon-rollback','icon-right-circle','icon-small-dash','icon-smile',
            'icon-pause','icon-trademark','icon-bg-colors','icon-time-circle','icon-crown','icon-timeout',
            'icon-drag','icon-earth','icon-desktop','icon-YUAN','icon-gift','icon-up-circle','icon-stop',
            'icon-warning-circle','icon-fire','icon-sync','icon-thunderbolt','icon-transaction',
            'icon-alipay','icon-undo','icon-taobao','icon-redo','icon-wechat-fill','icon-reload',
            'icon-comment','icon-reloadtime','icon-login','icon-message','icon-clear','icon-dashboard',
            'icon-issuesclose','icon-poweroff','icon-logout','icon-piechart','icon-setting',
            'icon-eye','icon-location','icon-edit-square','icon-export','icon-save','icon-Import',
            'icon-appstore','icon-close-square','icon-down-square','icon-layout','icon-left-square',
            'icon-play-square','icon-control','icon-codelibrary','icon-detail','icon-minus-square',
            'icon-plus-square','icon-right-square','icon-project','icon-wallet','icon-up-square',
            'icon-calculator','icon-interation','icon-check-square','icon-border','icon-border-outer',
            'icon-border-top','icon-border-bottom','icon-border-left','icon-border-right','icon-border-inner',
            'icon-border-verticle','icon-border-horizontal','icon-radius-bottomleft','icon-radius-bottomright',
            'icon-radius-upleft','icon-radius-upright','icon-radius-setting','icon-adduser','icon-deleteteam',
            'icon-deleteuser','icon-addteam','icon-user','icon-team','icon-areachart','icon-linechart',
            'icon-barchart','icon-pointmap','icon-container','icon-atom','icon-zanwutupian','icon-safetycertificate',
            'icon-password','icon-article','icon-page','icon-plugin','icon-admin','icon-banner'
        ];
    }

    public function options($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * 输入框宽度
     * 
     * @param  number|string $value
     * @return object
     */
    public function width($value = '100%')
    {
        $style['width'] = $value;
        $this->style = $style;
        return $this;
    }
}