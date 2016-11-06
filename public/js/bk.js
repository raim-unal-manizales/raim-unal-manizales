/**
 * Created by magir on 4/11/2016.
 */

if(existUserProfile){
    console.log(lom);

    console.log('1' + userProfile.etnica.toLowerCase().trim());
    console.log('2' + lom.language.toLowerCase().trim());

    if(userProfile.etnica.toLowerCase().trim() === 'embera' &&
        lom.language.toLowerCase().trim() === 'embera'){

        showLO(lom);
    }

    console.log('1' + userProfile.lenguaSenas.toLowerCase().trim());
    console.log('2' + lom.signLanguage.toLowerCase().trim());
    if(userProfile.lenguaSenas.toLowerCase().trim() === 'si' &&
        lom.signLanguage.toLowerCase().trim() === 'si'){

        showLO(lom);
    }

    console.log('1' + userProfile.nivelVisual.toLowerCase().trim());
    console.log('2' + lom.textualAlternative.toLowerCase().trim());
    console.log('3' + lom.voiceRecognition.toLowerCase().trim());
    if((userProfile.nivelVisual.toLowerCase().trim().replace("ó", "o") === 'vision baja' ||
        userProfile.nivelVisual.toLowerCase().trim().replace("ó", "o") === 'vision nula') &&
        (lom.textualAlternative.toLowerCase().trim() === 'si' ||
        lom.voiceRecognition.toLowerCase().trim() === 'si')){

        showLO(lom);
    }

    console.log('1' + userProfile.estiloAprendizaje.toLowerCase().trim());
    console.log('2' + lom.learningResourceType.toLowerCase().trim());
    if(userProfile.estiloAprendizaje.toLowerCase().trim() === 'kinestesico-global' &&
        lom.learningResourceType.toLowerCase().trim() === 'augmented reality'){

        showLO(lom);
    }
}else{
    showLO(lom);
}