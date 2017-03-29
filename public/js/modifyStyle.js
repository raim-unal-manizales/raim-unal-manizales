/**
 * Created by magir on 4/03/2016.
 */

$().ready(function(){

    //Modifica el estilo de las tablas agregadas
    //modifyTables();

    //Modifica el estilo de los encabezados de los formularios
    //modifyContentHeader();

    //Modifica el estilo de los contenedores de los campos de los formularios
    //modifyFieldForm();

    //Modifica el estilo de los campos de los formularios
    //modifyFields();

    //modifyButtonForm();

    changeFontSize();

    highContrast();

    changeFontFamily();

    changeInterlineSpace();

    loadInterfacePersonalization();
});

function modifyTables(){
    var table = $('table');

    //Envuelve las tablas generadas para que estas sean responsivas
    table.wrap('' +
        '<div class="row">' +
            '<div class="col-lg-12">' +
                '<div class="panel panel-default table">' +
                    //Table Head
                    '<div class="panel-body">' +
                        '<div class="dataTable_wrapper table-responsive">' +
                            //Table
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>');


    var tableHead = $('div.panel-default.table');

    tableHead.prepend('<div class="panel-heading"></div>');

    //Agrega el estilo definido a todas las tablas generadas
    table.removeClass();
    table.addClass('table table-striped table-bordered table-hover');
}

function modifyContentHeader(){
    var contentHeader = $('div.contentHeader');

    var titleContentHeader = $('div.contentHeader h1');
    var linkContentHeader = $('div.contentHeader a');

    var tableHeader = $('.table div.panel-heading');

    tableHeader.html(titleContentHeader.text() +
        '<a class="pull-right" href="' + linkContentHeader.attr('href') + '">' + linkContentHeader.text() + '</a>');

    contentHeader.wrap('<div class="row"></div>');
    contentHeader.removeClass();
    contentHeader.addClass('col-lg-12');
    titleContentHeader.removeClass();
    titleContentHeader.addClass('page-header');
    linkContentHeader.remove();
}

function modifyFieldForm(){
    var fieldForm = $('div.fieldForm');

    fieldForm.each(function(){
        $(this).removeClass();
        $(this).addClass('form-group');
    });
}

function modifyFields(){

    var labels = $('div.form-group label');

    labels.addClass('control-label col-xs-12 col-sm-4 col-md-4');

    var selectors = [];

    selectors.push($('div.form-group :input'));
    selectors.push($('div.form-group :file'));
    selectors.push($('div.form-group :password'));
    selectors.push($('div.form-group :radio'));
    selectors.push($('div.form-group :checkbox'));

    $.each(selectors, function(){
        this.removeClass();
        this.addClass('form-control');

        this.wrap('<div class="col-xs-12 col-sm-8 col-md-8"></div>');
    });
}

function modifyButtonForm(){
    var buttonForm = $('div.buttonForm');

    buttonForm.addClass('col-sm-4 col-sm-offset-4');
}

function loadInterfacePersonalization(){

    var target = document.querySelector('#tab5');
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            console.log(mutation.type);
            if($('#tab5').hasClass('active')){
                $('li#accessibilityNav').css('display', 'none');

                changeFontSize('input#fontSize');
                changeInterlineSpace('input#interline');

                var contrastOptionSelected = $('select#contrastNav').find("option:selected");
                var contrastValueSelected = contrastOptionSelected.val();
                $('select#contrast').val(contrastValueSelected);
                highContrast('select#contrast');

                var fontOptionSelected = $('select#fontNav').find("option:selected");
                var fontValueSelected = fontOptionSelected.val();
                $('select#font').val(fontValueSelected);
                changeFontFamily('select#font');
            }else{
                $('li#accessibilityNav').css('display', '');
                observer.disconnect();
            }
        });
    });
    if(target){
        observer.observe(target, { attributes: true, childList: true, characterData: true, subtree: true });
    }

}

function changeFontSize(selector){

    selector = (typeof selector == 'undefined') ? 'input#fontSizeNav' : selector ;

    var selectors = [];

    selectors.push($('body'));
    selectors.push($('h1'));
    selectors.push($('h2'));
    selectors.push($('h3'));
    selectors.push($('h4'));
    selectors.push($('h5'));
    selectors.push($('h6'));

    $(selector).val(parseInt($('body').css('font-size')));

    $(selector).change(function(){

        var size = parseInt($(selector).val());

        $.each(selectors, function(){
            /*var actualSize = this.css('font-size');
            var actualSizeFloat = parseFloat(actualSize);
            var newSize = actualSizeFloat * 1.2;*/
            this.css('font-size', size);
        });

        //console.log(size);
    });
}

function highContrast(selector){

    selector = (typeof selector == 'undefined') ? 'select#contrastNav' : selector ;

    var selectors = [];

    selectors.push($('*'));

    var activeHC;

    $(selector).change(function(){

        var optionSelected = $(this).find("option:selected");
        var valueSelected = optionSelected.val();

        if(!activeHC){
            activeHC = valueSelected;
        }

        $.each(selectors, function(){

            this.removeClass(activeHC);
            this.addClass(valueSelected);
        });

        activeHC = valueSelected;

        if(selector === 'select#contrastNav'){
            $('select#contrast').val(valueSelected);
        }else if(selector === 'select#contrast'){
            $('select#contrastNav').val(valueSelected);
        }
    });
}

function changeFontFamily(selector){

    selector = (typeof selector == 'undefined') ? 'select#fontNav' : selector ;

    var selectors = [];

    selectors.push($('body'));

    $(selector).change(function(){

        var optionSelected = $(this).find("option:selected");
        var valueSelected = optionSelected.val();

        //console.log(valueSelected);

        $.each(selectors, function(){
            this.css('font-family', valueSelected);
        });

        if(selector === 'select#fontNav'){
            $('select#font').val(valueSelected);
        }else if(selector === 'select#font'){
            $('select#fontNav').val(valueSelected);
        }
    });

}

function changeInterlineSpace(selector){

    selector = (typeof selector == 'undefined') ? '#interlineNav' : selector ;

    var selectors = [];

    selectors.push($('body'));
    selectors.push($('header'));
    selectors.push($('nav'));
    selectors.push($('section'));
    selectors.push($('footer'));
    selectors.push($('td'));

    $(selector).val(parseInt($('body').css('line-height')));

    $(selector).change(function(){

        var interline = parseInt($(selector).val());

        $.each(selectors, function(){

            /*var actualInterline = this.css('line-height');
            var actualInterlineFloat = parseFloat(actualInterline);
            var newInterline = actualInterlineFloat + 1;*/
            this.css('line-height', interline + 'px');

            //console.log(this.selector);
            //console.log(newInterline);
        });
    });
}