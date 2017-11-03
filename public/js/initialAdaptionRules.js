/**
 * Created by magir on 11/12/2016.
 */

function filtroReglasIniciales(listaOA, userProfile){

    var listaOAFiltroInicial = [];

    $.each(listaOA, function(index, lom){

        var listaIdioma = [];

        if(userProfile.idioma.toLowerCase().trim() === 'español'){
            listaIdioma.push('español');
            listaIdioma.push('es');
            listaIdioma.push('esp');
            listaIdioma.push('sp');
        }else if(userProfile.idioma.toLowerCase().trim() === 'inglés' ||
            userProfile.idioma.toLowerCase().trim() === 'ingles'){
            listaIdioma.push('inglés');
            listaIdioma.push('ingles');
            listaIdioma.push('english');
            listaIdioma.push('en');
            listaIdioma.push('eng');
        }

        /*if($.inArray(lom.language.toLowerCase().trim(), listaIdioma) > -1 &&
            (userProfile.nivel_escolaridad.toLowerCase().trim().indexOf(lom.context.toLowerCase().trim()) !== -1 ||
            lom.context.toLowerCase().trim() === 'otro')){
            listaOAFiltroInicial.push(lom);
        }*/
        listaOAFiltroInicial.push(lom);
    });

    return listaOAFiltroInicial;
}