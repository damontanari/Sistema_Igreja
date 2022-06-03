<?php
session_start();
include_once("app/conexao.php");
if(isset($_SESSION['validacao'])){

?>

<!DOCTYPE html>
<html lang="pt-BR" >
<link rel="shortcut icon" href="img/logo-adnipo.png">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/portal.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>Adnipo - Membros</title>

<?php
include('app/includes/menu.php');
?>
</head>
<body>
  <h1>
    Membros Cadastrados
  </h1>
  <div class="container" ng-app="winnieApp" ng-controller="winnieCtrl">
    <div class="box">
        <div class="col-md-12">
            <div class="col-md-3 pull-right form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="搜尋" ng-model="search">
                <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span>
                <span class="fa fa-times-circle-o clearSearch" aria-hidden="true" ng-show="search" ng-click="search=''"></span>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-info" ng-click="undoInfo()"><span class="fa fa-undo" aria-hidden="true"></span> Undo</button>
                <button type="button" class="btn btn-info" ng-click="redoInfo()"><span class="fa fa-repeat" aria-hidden="true"></span> Redo</button>
                <button type="button" class="btn btn-info" ng-click="addInfo()"><span class="fa fa-plus" aria-hidden="true"></span> ADD</button>
                <button type="button" class="btn btn-info" ng-click="deleteSelInfo()"><span class="fa fa-trash-o" aria-hidden="true"></span> Delete</button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <th><input type="checkbox" ng-model="checkAll"></th>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cargo</th>
                <th></th>
                <th></th>
            </thead>
		<?php
		include_once('app/membros.php');
		?>
        </table>
        <div class="col-md-4 col-md-offset-4 listInfo" ng-show="listInfo">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">{{info.panelTitle||"Edit"}}</h3>
                </div>
                <div class="panel-body">
                <form name="signForm" class="form-body" ng-submit="summitInfo()">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" placeholder="Name" required ng-model="info.name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="form-group inputSpan">
                        <span class="fa fa-venus-mars" aria-hidden="true"></span>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gender1" value="Male" required ng-model="info.gender"> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gender2" value="Female" required ng-model="info.gender"> Female
                        </label>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" placeholder="Birthday" required ng-model="info.birthday">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" placeholder="Phone" required ng-model="info.phone">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <span class="spanID">ID: {{info.id}}</span>
                    <!-- <div class="pull-right">
                        <button type="button" class="btn btn-info">Summit</button>
                        <button type="button" class="btn">Cancel</button>
                    </div> -->

                    <div class="pull-right">
                        <button type="submit" class="btn btn-success">Summit</button>
                        <button type="button" class="btn btn-warning" ng-click="cancelInfo()">Cancel</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<h3 class="made_by">Desenvolvido por Daniel Montanari</h3>
<p></p>
<!-- partial -->
<script src='https://cdn.jsdelivr.net/jquery/latest/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
<script  src="js/main.js"></script>

</body>
<script>
	angular.module("winnieApp", []);
angular.module("winnieApp").controller("winnieCtrl", ['$scope', function($scope){

  $scope.information = [{'id': 1001, 'name': 'Winnie', 'gender': 'Male', 'birthday': '1926-12-24', 'phone': '0936-XXX-XXX', 'createdtime': '2016-03-11 10:56:38'},
                        {'id': 1002, 'name': 'Piglet', 'gender': 'Female', 'birthday': '1938-03-28', 'phone': '0978-XXX-XXX', 'createdtime': '2016-05-26 16:17:22'},
                        {'id': 1003, 'name': 'Tigger', 'gender': 'Male', 'birthday': '1935-12-06', 'phone': '0956-XXX-XXX', 'createdtime': '2016-07-27 18:20:58'}];
	$scope.info = {};
	$scope.listInfo = false;
	$scope.infoID = 1004;
	$scope.undoHistory = [];
	$scope.redoHistory = [];

	// -----新增-----
	$scope.addInfo = function(){
		$scope.listInfo = true;
		$scope.info = {
			'panelTitle': 'Add Information',
			'id': $scope.infoID,
			'name': 'Rabbit', 
			'gender': 'Male', 
			'birthday': '1942-06-17', 
			'phone': '0986-XXX-XXX'
		};
	};

	// -----編輯-----
	$scope.editInfo = function(data){
		$scope.listInfo = true;
		$scope.info = {
			'panelTitle': 'Edit Information',
			'id': data.id,
			'name': data.name, 
			'gender': data.gender, 
			'birthday': data.birthday, 
			'phone': data.phone
		};
	};

	// -----新增/編輯 資料加入陣列-----
	$scope.summitInfo = function(){
		var date = new Date(),
			year = date.getFullYear(),
			month = date.getMonth()+1 >= 10 ? date.getMonth()+1 : '0'+ (date.getMonth()+1),
			day = date.getDate() >= 10 ? date.getDate() : '0'+ date.getDate(),
			hours = date.getHours() >= 10 ? date.getHours() : '0'+ date.getHours(),
			minutes = date.getMinutes() >= 10 ? date.getMinutes() : '0'+ date.getMinutes(),
			seconds = date.getSeconds() >= 10 ? date.getSeconds() : '0'+ date.getSeconds(),
			now = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
		
		if($scope.info.panelTitle == 'Add Information'){
			$scope.undoHistory.push(angular.copy($scope.information));
			$scope.information.push({
				'id': $scope.info.id,
				'name': $scope.info.name, 
				'gender': $scope.info.gender, 
				'birthday': $scope.info.birthday, 
				'phone': $scope.info.phone,
				'createdtime': now,
			});
			$scope.listInfo = false;
			$scope.infoID = $scope.infoID + 1;
		}else{
			$scope.undoHistory.push(angular.copy($scope.information));
			angular.forEach($scope.information, function(value, key){
				if(value.id == $scope.info.id){
					value.name = $scope.info.name;
					value.gender = $scope.info.gender;
					value.birthday = $scope.info.birthday;
					value.phone = $scope.info.phone;
				}
			});
			$scope.listInfo = false;
		}
	};

	// -----刪除-----
	$scope.deleteInfo = function(data){
		$scope.undoHistory.push(angular.copy($scope.information));
		$scope.information.splice($scope.information.indexOf(data), 1);
	};

	// -----批次/全部刪除-----
	$scope.deleteSelInfo = function(){
		$scope.undoHistory.push(angular.copy($scope.information));
		if($scope.checkAll){
			$scope.information = [];
			$scope.checkAll = false;
		}else{
			angular.forEach($scope.information, function(value, key){
				if(value.check){
					$scope.information.splice($scope.information.indexOf(value), 1);
				}
			});
		}
	};

	// -----取消-----
	$scope.cancelInfo = function(){
		$scope.info = {};
		$scope.listInfo = false;
	};

	// -----取消上一步-----
	$scope.undoInfo = function(){
		if($scope.undoHistory.length){
			$scope.redoHistory.push(angular.copy($scope.information)); 
			$scope.information = $scope.undoHistory.pop();
		}
	};

	// -----恢復上一步-----
	$scope.redoInfo = function(){
		if($scope.redoHistory.length){
			$scope.undoHistory.push(angular.copy($scope.information));
			$scope.information = $scope.redoHistory.pop();
		}
	};

}]);
</script>
</html>

<?php
}else{
    header('Location: ./login.php');
}
?>