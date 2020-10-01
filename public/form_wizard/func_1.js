// JS OBFUSCATED TO AVOID COPY
'use strict';
var variabel = [
    "use strict", //1
    "action", //2
    "send_email_1.php", //3
    "attr", //4
    "form#wrapped", //5
    ":radio", //6
    "is", //7
    ":checkbox", //8
    "next", //9
    "insertBefore", //10
    "insertAfter", //11
    "validate", //12
    "#wrapped", //13
    ".submit", //14
    "length", //15
    "val", //16
    "input#website", //17
    "isMovingForward", //18
    ":input", //18
    "find", //19
    "step", //20
    "state", //21
    "wizard", //22
    "valid", //23
    "#wizard_container", //24
    "progressbar", //25
    "#progressbar", //26
    "value", //27
    "percentComplete", //28
    "", //29
    "stepsComplete", //30
    " dari ", //31
    "stepsPossible", //32
    " selesai", //33
    "text", //34
    "#location", //35
    ":checked", //36
    "form", //37
    "#name_field", //38
    "name_field", //39
    "#email_field", //40
    "email_field" //41
];
jQuery(function(forEach) {
    variabel[0];
    forEach(variabel[4])[variabel[3]](variabel[1], variabel[2]);
    forEach(variabel[24])[variabel[22]]({
        stepsWrapper: variabel[12],
        submit: variabel[13],
        unidirectional: false,
        beforeSelect: function almost_equals(b, label) {
            if (forEach(variabel[16])[variabel[15]]()[variabel[14]] != 0) {
                return false;
            }
            if (!label[variabel[17]]) {
                return true;
            }
            var oren = forEach(this)[variabel[22]](variabel[21])[variabel[20]][variabel[19]](variabel[18]);
            return !oren[variabel[14]] || !!oren[variabel[23]]();
        }
    })[variabel[11]]({
        errorPlacement: function _afterSetMod(oldModVal, elem) {
            if (elem[variabel[6]](variabel[5]) || elem[variabel[6]](variabel[7])) {
                oldModVal[variabel[9]](elem[variabel[8]]());
            } else {
                oldModVal[variabel[10]](elem);
            }
        }
    });
    forEach(variabel[26])[variabel[25]]();
    forEach(variabel[24])[variabel[22]]({
        afterSelect: function setNewRefToScope(variableNode, i) {
            forEach(variabel[26])[variabel[25]](variabel[27], i[variabel[28]]);
            forEach(variabel[35])[variabel[34]](variabel[29] + i[variabel[30]] + variabel[31] + i[variabel[32]] + variabel[33]);
        }
    });
});
$(variabel[24])[variabel[22]]({
    transitions: {
        branchtype: function wxmlToFirebase(downcodeFunc, firebaseRef) {
            var slug = downcodeFunc[variabel[19]](variabel[36])[variabel[15]]();
            if (!slug) {
                $(variabel[37])[variabel[23]]();
            }
            return slug;
        }
    }
});

function getVals(filter, broadcastPermission) {
    switch (broadcastPermission) {
        case variabel[39]:
            var artistTrack = $(filter)[variabel[15]]();
            $(variabel[38])[variabel[34]](artistTrack);
            break;
        case variabel[41]:
            artistTrack = $(filter)[variabel[15]]();
            $(variabel[40])[variabel[34]](artistTrack);
            break;
    }
};