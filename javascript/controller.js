var app = angular.module('app', []);

app.controller('MyControl', function($scope){
    $scope.postdata = {arr: [{title: 'My first Post!', content: 'Contents of first post here'}, {title: 'My Second Post', content: 'Contents of second post would go here'}]};
    
    $scope.submit = function(stuff){$scope.postdata.arr.push({title: $scope.pendingTitle, content: $scope.pendingContent});
	$scope.pendingTitle = '';
	$scope.pendingContent = ''; };
    
});
