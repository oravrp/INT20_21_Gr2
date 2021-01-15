onmessage = function(e) {
    let final = 0;

    for (let index = 0; index < 1000000000 * 5 / 6; index++) {
        final += index;
    }



    postMessage(final)
}