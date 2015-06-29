(function () {
    'use strict';

    var windowWidth;

    QUnit.module('Module showing setup and teardown', {
        setup: function () {
            // prepare something for all following tests
        },

        teardown: function () {
            // clean up after each test
        }
    });

    QUnit.module('myRevealingModule()');

    QUnit.test('whereToPlace() - should return right if window is above 752px and bottom if window is below 752px', function (assert) {
		windowWidth = 800;
        assert.equal(myRevealingModule.returnWhereToPlace(windowWidth), 'right', 'The element should be right aligned');
		windowWidth = 700;
		assert.equal(myRevealingModule.returnWhereToPlace(windowWidth), 'bottom', 'The element should be bottom aligned');
    });

})();