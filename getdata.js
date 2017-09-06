angular.module('myApp',[]).controller('TodosController',
function TodosController($scope,$http) {
 
 
    $http.get("http://localhost/cooptest/data/listusers.php")
 .then(function(response) {
     $scope.todos= response.data;
 });
  




 /* Rows per page */
 $scope.limit = 10;
 /* We start displaying at item 0 */
 $scope.begin = 0;
 $scope.indr=1;
}
                                  
);
