/**
 * Created by magir on 4/03/2016.
 */

$().ready(function(){

    //Modifica el estilo de las tablas agregadas
    modifyTables();

    //Modifica el estilo de los encabezados de los formularios
    modifyContentHeader();

    //Modifica el estilo de los contenedores de los campos de los formularios
    modifyFieldForm();

    //Modifica el estilo de los campos de los formularios
    modifyFields();

    modifyButtonForm();

    increaseSize();

    decreaseSize();

    highContrast();

    changeFontFamily();

    increaseInterlineSpace();

    decreaseInterlineSpace();
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

function increaseSize(){

    var selectors = [];

    selectors.push($('body'));
    selectors.push($('h1'));
    selectors.push($('h2'));
    selectors.push($('h3'));
    selectors.push($('h4'));
    selectors.push($('h5'));
    selectors.push($('h6'));

    $('#increase').click(function(){

        $.each(selectors, function(){
            var actualSize = this.css('font-size');
            var actualSizeFloat = parseFloat(actualSize);
            var newSize = actualSizeFloat * 1.2;
            this.css('font-size', newSize);
        });

        //console.log(size);
    });
}

function decreaseSize(){

    var selectors = [];

    selectors.push($('body'));
    selectors.push($('h1'));
    selectors.push($('h2'));
    selectors.push($('h3'));
    selectors.push($('h4'));
    selectors.push($('h5'));
    selectors.push($('h6'));

    $('#decrease').click(function(){

        $.each(selectors, function(){
            var actualSize = this.css('font-size');
            var actualSizeFloat = parseFloat(actualSize);
            var newSize = actualSizeFloat * 0.8;
            this.css('font-size', newSize);
        });

        //console.log(size);
    });

    /*
    $('#disminuir').mouseover(function(){
        console.log('over');
    });

    $('#disminuir').mouseout(function(){
        console.log('out');
    });
    */
}

function highContrast(){

    var selectors = [];

    selectors.push($('*'));

    /*selectors.push($('table'));
    selectors.push($('#wrapper'));
    selectors.push($('.row'));
    selectors.push($('p'));
    selectors.push($('#page-wrapper'));
    selectors.push($('div'));
    */

    /*
    selectors.push($('header'));
    selectors.push($('nav'));
    selectors.push($('section'));
    selectors.push($('footer'));
*/
    var activeHC;

    $('#contrast').change(function(){

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

    });
}

function changeFontFamily(){

    var selectors = [];

    selectors.push($('body'));
    /*selectors.push($('header'));
    selectors.push($('nav'));
    selectors.push($('section'));
    selectors.push($('footer'));*/

    $('#font').change(function(){

        var optionSelected = $(this).find("option:selected");
        var valueSelected = optionSelected.val();

        //console.log(valueSelected);

        $.each(selectors, function(){
            this.css('font-family', valueSelected);
        });
    });

}

function increaseInterlineSpace(){
    var selectors = [];

    selectors.push($('body'));
    selectors.push($('header'));
    selectors.push($('nav'));
    selectors.push($('section'));
    selectors.push($('footer'));
    selectors.push($('td'));

    $('#increaseInterline').click(function(){

        $.each(selectors, function(){

            var actualInterline = this.css('line-height');
            var actualInterlineFloat = parseFloat(actualInterline);
            var newInterline = actualInterlineFloat + 1;
            this.css('line-height', newInterline + 'px');

            //console.log(this.selector);
            //console.log(newInterline);
        });
    });
}

function decreaseInterlineSpace(){
    var selectors = [];

    selectors.push($('body'));
    selectors.push($('header'));
    selectors.push($('nav'));
    selectors.push($('section'));
    selectors.push($('footer'));
    selectors.push($('td'));

    $('#decreaseInterline').click(function(){

        $.each(selectors, function(){

            var actualInterline = this.css('line-height');
            var actualInterlineFloat = parseFloat(actualInterline);
            var newInterline = actualInterlineFloat - 1;
            this.css('line-height', newInterline + 'px');

            //console.log(this.selector);
            //console.log(newInterline);
        });
    });
}