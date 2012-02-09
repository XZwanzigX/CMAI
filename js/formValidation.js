function validateRequiredFields() {

}


function validatePhoneNumber() {
    try {
        var phone = document.getElementsByName('phone')[0];
        var PNF = i18n.phonenumbers.PhoneNumberFormat;
        var phoneNumber = phone.value;
        var regionCode = document.getElementsByName('country')[0].value;

        var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance();
        var number = phoneUtil.parseAndKeepRawInput(phoneNumber, regionCode);
        var isValid = phoneUtil.isValidNumberForRegion(number, regionCode);

        if (isValid) {
            phone.value = phoneUtil.format(number, PNF.INTERNATIONAL);
        }

        return isValid ? '' : "Please enter a valid phone number for " + regionCode;
    } catch (e){
        return 'Please enter a valid phone number.\n';
    }
}

function validateForm() {
    var validationErrors = "";

    validationErrors += validatePhoneNumber() +
                        validateRequiredFields();

    if (validationErrors != "") {
        alert(validationErrors);
        return false;
    }

    return true;
}