/**
*   GET and POST Wrapper
*/
function RequestPost(url, body) {
    var deferred = Q.defer();
    $.post(url,
        body,
    function(data,status) {
        if (IsJsonString(data) === true) {
            deferred.resolve(JSON.parse(data));
        } else {
            deferred.resolve({status: 'error', msg: 'Unable to parse JSON.'});
        }
    })
    .fail(function(err) {
        deferred.reject(err);
    });
    return deferred.promise;
}
function RequestGet(url) {
    var deferred = Q.defer();
    $.get(url,
    function(data,status) {
        if (IsJsonString(data) === true) {
            deferred.resolve(JSON.parse(data));
        } else {
            deferred.resolve({status: 'error', msg: 'Unable to parse JSON.'});
        }
    })
    .fail(function(err) {
        deferred.reject(err);
    });
    return deferred.promise;
}

function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

/**
*   Flash Message Wrapper
*/
function showErrorMessage(msg) {
    $( "body" ).append( "<div class=\"flash-message flash-error\" onclick=\"this.classList.add('hidden');\">"+msg+"</div>" );
    setTimeout(function() {
        $('.message').fadeOut(3000);
    },0);
}
function showSuccessMessage(msg) {
    $( "body" ).append( "<div class=\"flash-message flash-success\" onclick=\"this.classList.add('hidden');\">"+msg+"</div>" );
    setTimeout(function() {
        $('.message').fadeOut(3000);

    },0);
}

/**
*   Go To URL
*/
function goToUrl(url) {
    if (url === '') {
        url = '#';
    }
    window.location.href = url;
}

/**
*   Only Numeric Input
*/
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
