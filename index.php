<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylish.css?ver=<?php echo filemtime('stylish.css');?>">
    <script src="app.js"></script>
    <script src="getdata.js"></script>
    
</head>
<body>

<div class="container">
<nav class="navbar navbar-light" style="background-color: white; height: 60px;">
  <!-- Navbar content -->
  

  <ul id="bulky" class="nav navbar-inline">
              <li class="active" id="info">ADD INFORMATION</li>
              <li>|</li>
                <li id="list">LISTING PAGE</li>
                </ul>
              

</nav>


<div id="addinformation">

<form action="data/adduser.php" method="post" id="infoadd">
    <div class="form-group">
    <label for="addname"  class="control-label">NAME<span class="redstar">*</span></label>
    <input type="text" class="form-control" id="addname" name="addname" aria-describedby="addname" pattern=".{2,}" required title="2 characters minimum"/>
  
   <br />
    <label for="addprovince"  class="control-label">PROVINCE<span class="redstar">*</span></label>
    
      <select class="form-control" id="addprovince" name="addprovince" required>
      <option value="">Select a Province</option>
        <option value="ontario">Ontario</option>
        <option value="quebec">Quebec</option>
        <option value="novascotia">Nova Scotia</option>
        <option value="newbrunswick">New Brunswick</option>
        <option value="manitoba">Manitoba</option>
        <option value="britishcolumbia">British Columbia</option>
        <option value="princeedwardisland">Prince Edward Island</option>
        <option value="saskatchewan">Saskatchewan</option>
        <option value="alberta">Alberta</option>
        <option value="newfoundlandandlabrador">Newfoundland and Labrador</option>
        <option value="northwestterritories">Northwest Territories</option>
        <option value="yukon">Yukon</option>
        <option value="nunavut">Nunavut</option>
      </select>

     
<br />
     


  <div class="row">
<div class="col-md-6">
<label for="telephone" class="control-label" >TELEPHONE<span class="redstar">*</span></label>

      <input type="telephone" id="telephone" name="telephone" class="form-control" pattern="\(?\d{3}\)?[\-  \S]\d{3}[\-]\d{4}" required title="Please enter a valid Canadian phone format" />

</div>
<div class="col-md-6">

<label for="postal"  class="control-label">POSTAL CODE<span class="redstar">*</span></label>

      <input type="text" id="postal" name="postal" class="form-control" pattern="\w{3}\s?\w{3}" required title="Please enter a valid Canadian postal code" />


</div>

  </div>
<br />
  <label for="salary"  class="control-label">SALARY<span class="redstar">*</span></label>
    <input type="text" name="salary" class="form-control" id="salary" aria-describedby="salary" pattern="[0-9\/]*" required title="Please provide a correct salary for Province">
<br />
    <input type="submit" class="btn btn-primary float-right" value="Submit" id="prbutton">




  
    </div>
</form>




</div>

<div id="confirmpage">

<div class="alert alert-info" role="alert">
Your data is saved. Go to listing page to see.
</div>
<div class="confirm">
<div class="row">
    <div class="col-md-2">
        <span class="classWithPad">Name</span>   
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad">:</div>
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad" id="listname"></div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-md-2">
        <span class="classWithPad">Province: </span>   
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad">:</div>
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad" id="listprovince"></div>
    </div>
</div>
<br />
<div class="row">
    <div class=" col-md-2">
        <span class="classWithPad">Telephone</span>   
    </div>
    <div class="text-center col-md-2    ">
        <div class="classWithPad">:</div>
    </div>
    <div class="text-center col-md-3">
        <div class="classWithPad" id="listphone"></div>
    </div>
</div>
<br />
<div class="row">
    <div class=" col-md-2">
        <span class="classWithPad">Postal Code</span>   
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad">:</div>
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad" id="listpostalcode"></div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-md-2">
        <span class="classWithPad">Salary</span>
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad">:</div>
    </div>
    <div class="text-center col-md-2">
        <div class="classWithPad" id="listsalary"></div>
    </div>
</div>

</div>

</div>

<div id="listingpage" ng-app="myApp" ng-controller="TodosController" >
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Province</th>
      <th>Telephone</th>
      <th>Postal Code</th>
      <th>Salary</th>


    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="todo in todos | limitTo:limit : begin">
      <th scope="row"ng-value="indr+1"></th>
      <td>{{todo.name}}</td>
      <td>{{todo.province}}</td>
      <td>{{todo.telephone}}</td>
      <td>{{todo.postalcode}}</td>
      <td>{{todo.salary}}</td>
     
    </tr>
    
  </tbody>
  
</table>

<div id="bpag">
<button class="btn btn-secondary "  ng-click="begin = 0">&lt;&lt;</button>
<button class="btn btn-secondary " ng-click="begin = begin>=limit ? begin - limit:0">&lt; previous page</button>
<button class="btn btn-secondary " ng-click="begin = begin + limit">next page &gt; </button>
</div>
</div>



</div>







</body>
</html>