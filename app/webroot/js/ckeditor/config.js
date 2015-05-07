/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    config.language = 'fr';
    config.contentsCss = '/~kuro/mkonline/theme/kuro/css/ckeditor.css';
    config.toolbar_Atlante = [
        {name: 'clipboard', groups: ['clipboard', 'undo'], items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker'], items: ['Scayt']},
        {name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar']},
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'], items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup'], items: ['Bold', 'Italic', 'Underline', 'Strike']},
        {name: 'styles', items: ['Styles', 'Format']},
        {name: 'tools', items: ['Maximize']},
        //{name: 'others', items: ['-']},
        //{name: 'about', items: ['About']}
        ['TextColor', 'BGColor', 'ShowBlocks', '-', 'Smiley', 'Templates'],
        {name: 'document', groups: ['mode', 'document', 'doctools'], items: ['Source']},
    ];
    config.skin = 'altergi';
    config.toolbar = 'Atlante';
    //config.uiColor = '#AADC6E';
};
