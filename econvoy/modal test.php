
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!-- CORE CSS-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">

    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>
<body>
<!-- Modal Trigger -->
<table>
    <tr>
        <td><?php echo" <a class='waves-effect waves-light btn modal-trigger' href='#modal1'>Modal</a> "?>
        </td>
    </tr>

</table>

<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
</body>

</html>
