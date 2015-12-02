'use strict';

/**
 * @ngdoc function
 * @name adminApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the adminApp
 */
angular.module('adminApp').controller(
    'AboutCtrl', 
    function ($scope) {
        var id="about";
    	activeMenu(id);
    }
);