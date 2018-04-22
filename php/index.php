<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>PHP Assignment</title>
    <meta name="author" content="Paul Darr">
    <meta name="description" content="This is my PHP assignment.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/phpstyle.css">
    <link rel="stylesheet" href="/css/normalize.css">
  </head>
  <body>            
    <header>
      <h1>Paul Darr</h1>
      <h2>PHP Assignment</h2>
      <div class="date"><?php include 'date.php';?></div>
    </header>
    <hr>
    <main>
        
    <section>
        <h3>PHP System Information</h3>
        <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
             <td>PHP Version</td>
             <td><?php echo phpversion(); ?></td>
            </tr>
            <tr>
             <td>Operating System</td>
             <td><?php echo php_uname(s); ?></td>
            </tr>
            <tr>
             <td>Host Name</td>
             <td><?php echo php_uname(n); ?></td>
            </tr>
            <tr>
             <td>Version Install</td>
             <td><?php echo php_uname(v); ?></td>
            </tr>      
            <tr>
             <td>Machine Type</td>
             <td><?php echo php_uname(m); ?></td>
            </tr>       
        </tbody>
      </table>
    </section>
        
    <section>
        <h3>PHP Dynamic Table</h3>
        <div>
        <?php
            $maxcols = 5; 
            $maxid = 25;
            $startid = 1;
            echo "<table id='table1'>\n";
            for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) {
            echo "</tr>\n<tr>\n";
            for ($j=1;$j<=$maxcols;$j++)
            echo "<td class='mark'>".$startid++."</td>\n";
            echo "</tr>\n";
            }
            echo "</table>\n";
        ?>
        </div>
    </section>  
    </main>
      <footer>
          <?php include 'footer.php';?>
      </footer>
  </body>
</html>