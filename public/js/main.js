angular.module('app', ['components'])

.controller('navbar', function($scope){

        $scope.tabs = [{name: 'About', state: ''},{name: 'Projects', state: 'active'},{name: 'Blog', state: ''},{name: 'Contact', state:''}];
        $scope.select = function(index){
            var tab = tabs[index];
            angular.forEach(tabs, function(tab) {
                tab.state = '';
            });
            tab = 'active';
        }
    })
