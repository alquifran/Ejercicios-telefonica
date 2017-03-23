angular.module('angularMercado', []); 
function mainController($scope, $http) {  
	$scope.formData = {};
	$scope.formData.disponible=true;
	$http.defaults.headers.post["Content-Type"] = "application/json";

	$http.get('/list')
	.success(function(data) {
		$scope.list = data;
		console.log(data);
	})
	.error(function(data) {
		console.log('Error: ' + data);
	});

	$scope.crearElemento = function(){
		var elementSend = JSON.stringify($scope.formData);
        $http.post('/add', $scope.formData)
            .success(function(data) {
            	console.log($scope.formData);
                $scope.formData = {};
                $scope.list = data;
                console.log(data);
            })
            .error(function(data) {
                console.log('Error:' + data);
            });
    };

    // $scope.crearElemento = function(){
    //     $http.post({
    //     	url: 'http://localhost:8081/add',
    //     	method: "POST",
    //     	data: $scope.formData,
    //     	headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    //     })
    //         .success(function(data) {
    //         	console.log($scope.formData);
    //             $scope.formData = {};
    //             $scope.list = data;
    //             console.log(data);
    //         })
    //         .error(function(data) {
    //             console.log('Error:' + data);
    //         });
    // };

}