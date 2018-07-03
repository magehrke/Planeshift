<!doctype html>
<html>
<head>
    <title>Nefas Entrance</title>
    
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <link href="/styles/lavacaveexit.css" type="text/css" rel="stylesheet" />
    
</head>

<!-- BODY -->
<body>

<table align="center">
    <tr>
        <td>
            <div id="root_site_container">
            
                <!-- include Header and Navigation -->
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/header_and_navigation.php";
                    include($path);
                ?>
                
                <!-- Content section -->
                <div id="content_main_container">

                    <div id="lavacaveexit_content_main_div">

                        <h2>Nefas Entrance</h2>

                        <p>The solution for Nefas Entrance in the skull cave.<br>
                        Just follow the instructions on the picture.</p>

                        <img src='/images/nefasentrance.jpg' />

                    </div>
                </div>
                
                <!-- include Footer -->
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/footer.php";
                    include($path);
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>