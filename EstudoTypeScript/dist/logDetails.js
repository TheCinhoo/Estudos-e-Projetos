"use strict";
// | passa mais de 2 tipos para a variavel
function logDetails(uid, item) {
    console.log("O produto com seu ".concat(uid, " tem o t\u00EDtulo de ").concat(item));
}
function logInfo(uid, item) {
    console.log("O seu ".concat(uid, " tem o t\u00EDtulo de ").concat(item));
}
function renderPlatform(platform) {
    return platform;
}
logDetails(1, "sapatinho");
