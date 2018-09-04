window.onload = function () {
    var textarea = document.querySelector('.textarea-autogrow');

    if (textarea) {
        textarea.addEventListener('keydown', autosize);
        textarea.style.cssText = 'height:' + textarea.scrollHeight + 'px';
    }

    function autosize() {
        var element = this;

        setTimeout(function () {
            element.style.cssText = 'height:auto; padding:0';
            // for box-sizing other than "content-box" use:
            // element.style.cssText = '-moz-box-sizing:content-box';
            element.style.cssText = 'height:' + element.scrollHeight + 'px';
        }, 0);
    }
};