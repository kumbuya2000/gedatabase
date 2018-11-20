<html>
 <head>
 </head>

 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
  <div id="example">Example 4-2</div>
  
  <?php include "navbar.php" ?>

  <div id="content">
    <h1>SQL Query Runner</h1>
    <p>Enter your SQL query in the box below and we will see if this works:</p>
    <form action="run_query.php" method="POST">
      <fieldset>
        <textarea id="query_text" name="query"
                  cols="65" rows="8"></textarea>
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="Run Query" />
        <input type="reset" value="Clear and Restart" />
      </fieldset>
    </form>
  </div>

  <div id="footer"></div>
 </body>
</html>