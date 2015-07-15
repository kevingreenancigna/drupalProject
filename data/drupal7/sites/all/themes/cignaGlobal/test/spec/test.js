/* global describe, it */

(function () {
    'use strict';

    var windowWidth,
        expect = chai.expect;

    describe('wheretoplace()', function () {
        it('should be right aligned if window is > 752', function () {
            windowWidth = 800;
            expect(myRevealingModule.returnWhereToPlace(windowWidth)).to.equal('right');
        });
    });
})();
