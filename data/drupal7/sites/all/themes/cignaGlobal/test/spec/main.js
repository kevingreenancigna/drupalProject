'use strict';

var myRevealingModule = (function () {
    var thisWindow = $(window),
        windowWidth = thisWindow.width(),

        whereToPlace = function (windowWidth) {
            if (windowWidth < 753) {
                return 'bottom';
            }
            return 'right';
        };

    return {
        returnWhereToPlace: whereToPlace
    };
})();

(function ($) {

}(jQuery));

