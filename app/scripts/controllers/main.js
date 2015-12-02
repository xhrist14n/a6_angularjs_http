'use strict';

/**
 * @ngdoc function
 * @name adminApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the adminApp
 */
angular.module('adminApp').controller(
    'MainCtrl', 
    function ($scope) {
        var id="main";
    	activeMenu(id);
    }
);