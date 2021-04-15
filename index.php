<html ng-app="timesheet">

<head>
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">

  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/260783/bootstrap.min.css">
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/260783/style.css">
  <link rel="stylesheet" href="/Dashboard/assets/style.css">

  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/260783/angular.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/260783/angular-animate.min.js"></script>
  <!--<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/260783/app.js"></script>-->
</head>

<body>
  <div ng-controller="FormController">

    <section id="section-timesheet" ng-class="{ scale: success }">

      <h1>Post New Bid4</h1>

      <div class="inner">

        <form name="formTimesheet" method="POST" action="insert.php" >
            <div id="projects">
                <label>Type of product: <span>(select all that apply)</span></label>
                <select id="dropDown" name="dropDown" ng-model="selectedItems">
                  <option ng-repeat="type in ele.selectTypes" value="{{type}}" name="product"  id="product" required>{{type}}</option>
                </select>
    
                <div id="create-new">
                  <input type="text" ng-model="newType" name="product"  id="product" placeholder="post a new bid">
                  <button class="button" type="button" ng-click="createNew(newType)">Add New</button>
                </div>
              </div>
              <label>Price:</label>
          <input ng-model="ele.email" type="text" id="price" name="price" placeholder="Kshs: " required>
              <label>Product Image:</label>
              <input type="file" id="image" name="image"  required>
              <br> <br>
              
          <label>Ends-in:</label>
          <input  type="time" min="0" placeholder="hours" id="hours"  > <span>Timer</span>
      

          <label>Message <span>(optional)</span></label>
          <textarea ng-model="ele.msg"></textarea>

          

          <div id="buttons">
            <button class="button grey flex-item" type="reset" ng-click="clearInfo()">Clear</button>
            <input ng-init="success = false" class="button flex-item" type="submit"  ng-disabled="formTimesheet.$invalid">
          </div>
        </form>

      </div>

      <div class="overlay" ng-class="{ animateShow:clicked }">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>

    </section>

    <section id="section-thankyou" ng-class="{ hidden:!success, shown: success }">
      <h1>Bid Submitted</h1>

      <div class="inner">

        <p>Thank you </p>
        <p>You have Submitted a Product bid.</p>

        <button class="button" type="reset" ng-click="startAgain()">Post Another</button>

      </div>
    </section>

  </div>

  <script src="/Dashboard/assets/script.js"></script>
</body>

</html>