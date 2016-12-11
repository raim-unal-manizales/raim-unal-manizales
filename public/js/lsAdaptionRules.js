/**
 * Created by magir on 11/12/2016.
 */

function filtroReglasLsAuditivo(listaOA, userProfile){

    var listaOAFiltroLsAuditivo = [];

    $.each(listaOA, function(index, lom){

        //Global
        if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 'g'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'narrativetext' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'lecture' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'audio' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'video') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'high') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'narrativetext' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'lecture' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'audio' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'video') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'very low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'low') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }
        }

        listaOAFiltroLsAuditivo.push(lom);
    });

    return listaOAFiltroLsAuditivo;
}

function filtroReglasLsKinestesico(listaOA, userProfile){

    var listaOAFiltroLsKinestesico = [];

    $.each(listaOA, function(index, lom){

        //Global
        if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 'g'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'exercise' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'problemstatement' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'simulation') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'high' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'very high') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'exercise' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'simulation' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'experiment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'problemstatement') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'high') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }
        }

        listaOAFiltroLsKinestesico.push(lom);
    });

    return listaOAFiltroLsKinestesico;
}

function filtroReglasLsLector(listaOA, userProfile){

    var listaOAFiltroLsLector = [];

    $.each(listaOA, function(index, lom){

        //Global
        if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 'g'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'narrativetext' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'presentation') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'high') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'narrativetext' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'presentation' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'questionnaire') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'very low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium' ) ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }
        }

        listaOAFiltroLsLector.push(lom);
    });

    return listaOAFiltroLsLector;
}

function filtroReglasLsVisual(listaOA, userProfile){

    var listaOAFiltroLsVisual = [];

    $.each(listaOA, function(index, lom){

        //Global
        if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 'g'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'diagram' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'figure' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'graph' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'table') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'very low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'high' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'very high') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                (lom.learningResourceType.toLocaleLowerCase().trim() === 'diagram' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'simulation' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'questionnaire' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'slide') &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === 'very low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'low' ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === 'medium') ||

                (lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')
            ){
                lom.value += 1;

            }
        }

        listaOAFiltroLsVisual.push(lom);
    });

    return listaOAFiltroLsVisual;
}