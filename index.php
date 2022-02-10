<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Binarios</title>

</head>
<body>
    <nav class="navbar navbar-light bg-dark justify-content-center"> 
        <h2 class="transformar">Transformación de numeros</h2>
    </nav>
    <?php
        require_once("binario.php");
    ?>
    <br>
    <div class="container justify-content-center">
    <form action="" method="POST">

    <label for="binario" class="form-label">Introduzca el número binario a transformar:</label>
        <div class="input-group mb-3">
        <label for="sigbi"class="form-label">Bit de signo   </label>
        
        <input type="text" class="form-text" name="sigbi" id="sigbi" size="2" value="<?php echo $sigbi; ?>"/>
        
        <input type="text" class="form-text" id ="binario" name="binario" size="50" value="<?php echo $numero1; ?>"/>
        <div id="emailHelp" class="form-text"><?php echo $mensaje; ?></div>
        </div>
        
        <label for="decimal" class="form-label">Decimal:    </label>
        <div class="input-group mb-3">
        
        <input type="text" class="form-text" name="decimal" size="50" id="decimal" value="<?php echo $sigdec.$decimal; ?>" disabled/>
        </div>
        <label for="hexadec">Hexadecimal:    </label>
        <div class="input-group mb-3">
        
        <input type="text" class="form-text" name="hexadec" size="50" value="<?php echo $sighex.$hexadec; ?>" disabled/>
        </div>
    	<input type="submit" class="btn btn-primary" value="Transformar" name="transformar"/>
    </form>
    

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>