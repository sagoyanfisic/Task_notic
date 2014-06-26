angular.module('app', [])
.controller('MainCtrl', function($scope, $http) {
$http.get('json/speakers.json')
.success(function(resp) {
debugger
$scope.items = resp;
});
});