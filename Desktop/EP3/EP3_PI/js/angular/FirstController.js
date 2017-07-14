angular.module("peliculas", ['ngResource'])

.factory("Post",function($resource){
  return $resource("https://api.themoviedb.org/3/discover/movie?api_key=e766f79d93471e8cb2acf953a54b6f35",{},{
    query:{method: "GET", isArray:false}
  })
})

.controller("ComentariosController",function($scope,$http){
$scope.array=[];
$scope.c=1;
$scope.fin=100;

 $scope.mostrar=function()
 {
   $scope.c=1;
   $scope.fin=100;
   console.log($scope.nombre);
   $scope.array.push({post:$scope.nombre});
   $scope.nombre="";

 }
 $scope.contar=function()
 {
   $scope.fin=$scope.fin-$scope.c;
   if ($scope.fin==0) {
     alert("Limite de caracteres alcanzado");
     $('#envia').attr("disabled", true);
   }else {
     $('#envia').attr("disabled", false);
   }
   if ($scope.fin==-1) {
     $scope.fin=0;
   }else if ($scope.fin<-1) {
     $('#envia').attr("disabled", true);
   }
 }

})

.controller("FirstController",function($scope,Post){
  Post.query(function(data)
  {
    $scope.movies=data.results;
    console.log($scope.movies)
  })

});
