/**
 * Created by magir on 11/12/2016.
 */

function filtroReglasLsAuditivo(listaOA, userProfile){

    var listaOAFiltroLsAuditivo = [];

    $.each(listaOA, function(index, lom){

        //Global
        if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 'g'){

            if(
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === RulesConstants.lrt_narrative_text ||
                lom.learningResourceType.toLocaleLowerCase().trim() === RulesConstants.lrt_lecture ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'audio' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'video') &&*/

                ($.inArray(RulesConstants.lrt_narrative_text, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_lecture, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_audio, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_video, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_high) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_expositive ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)

            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === RulesConstants.lrt_narrative_text ||
                lom.learningResourceType.toLocaleLowerCase().trim() === RulesConstants.lrt_lecture ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'audio' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'video') &&*/

                ($.inArray(RulesConstants.lrt_narrative_text, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_lecture, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_audio, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_video, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_very_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_low) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_expositive ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)
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
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'exercise' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'problemstatement' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'simulation') &&*/

                ($.inArray(RulesConstants.lrt_self_assessment, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_exercise, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_problem_statement, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_simulation, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_high ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_very_high) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_active ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)
            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === 'exercise' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'simulation' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'experiment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'problemstatement') &&*/

                ($.inArray(RulesConstants.lrt_exercise, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_simulation, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_experiment, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_self_assessment, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_problem_statement, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_high) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_active ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)
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
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === RulesConstants.lrt_narrative_text ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'presentation') &&*/

                ($.inArray(RulesConstants.lrt_narrative_text, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_presentation, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_high) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_expositive ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)
            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === RulesConstants.lrt_narrative_text ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'presentation' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'questionnaire') &&*/

                ($.inArray(RulesConstants.lrt_narrative_text, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_presentation, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_questionnaire, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_very_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'expositive' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_expositive ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)
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
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === 'diagram' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'figure' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'graph' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'table') &&*/

                ($.inArray(RulesConstants.lrt_diagram, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_figure, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_graph, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_self_assessment, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_table, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_very_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_high ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_very_high) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_active ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)

            ){
                lom.value += 1;

            }

            //Secuencial
        }else if(userProfile.ls_dicotomia.toLocaleLowerCase().trim() === 's'){

            if(
                /*(lom.learningResourceType.toLocaleLowerCase().trim() === 'diagram' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'selfassessment' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'simulation' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'questionnaire' ||
                lom.learningResourceType.toLocaleLowerCase().trim() === 'slide') &&*/

                ($.inArray(RulesConstants.lrt_diagram, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_self_assessment, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_simulation, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_questionnaire, lom.learningResourceType) > -1 ||
                $.inArray(RulesConstants.lrt_slide, lom.learningResourceType) > -1) &&

                (lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_very_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_low ||
                lom.interactivityLevel.toLocaleLowerCase().trim() === RulesConstants.il_medium) ||

                /*(lom.interactivityType.toLocaleLowerCase().trim() === 'active' ||
                lom.interactivityType.toLocaleLowerCase().trim() === 'mixed')*/
                (lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_active ||
                lom.interactivityType.toLocaleLowerCase().trim() === RulesConstants.it_mixed)
            ){
                lom.value += 1;

            }
        }

        listaOAFiltroLsVisual.push(lom);
    });

    return listaOAFiltroLsVisual;
}