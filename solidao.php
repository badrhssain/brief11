<?php
    $Tarif1= 0.794;
    $Tarif2 = 0.883;
    $Tarif3 = 0.9451;
    $Tarif4 = 1.0489;
    $Tarif5 = 1.2915;
    $Tarif6 = 1.4975;
    $TauxTVA = 0.14;
    $TIMBRE = 0.45;
    $Calibre = filter_input(INPUT_POST, 'Calibre', FILTER_SANITIZE_STRING);
    $Ancien = $_POST["IndexAncien"];
    $Nouveau = $_POST["IndexNouveau"];
    $Consommation = $Nouveau - $Ancien;
    ;
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style1.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
            <table class="lydec_table" id="lydec_table">
            <tr id="tr1">
                <td id="td1"><span>Ancien index :</span> <b><?php echo $Ancien; ?></b></td>
                <td id="td1"><span>Nouveau index :</span> <b><?php echo $Nouveau; ?></b></td>
                <td id="td1"><span>Consommation :</span> <b><?php echo $Consommation . ' Kwh'; ?></b></td>
            </tr>
            <tr>
                <td colspan="3">
                    <table class="detail_table">
                        <tr>
                            <th></th>
                            <th>مفوتر <br>Facturé</th>
                            <th>س.و <br>P.U</th>
                            <th>المبلغ د.إ.ر <br>Montant HT</th>
                            <th>ص.ق.م <br>taux TVA</th>
                            <th>مبلغ الرسوم <br>Montant Taxes</th>
                            <th></th>
                        <tr>
                        <tr id = "tr">
                            <td><b>CONSOMMATION ELECTRICITE</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><b>إستهلاك الكهرباء</b></td>


                            
</body>
</html>
<?php
//declare de variable

    // calcule de MantantHT et Taxes
    if($Consommation <=150 && $Consommation >= 0){
        if($Consommation <= 100){
            $MontantHT = $Consommation * $Tarif1;
            $MontantTaxes = $MontantHT * $TauxTVA;
            
            $TotalTVA = $MontantTaxes;
            $SousTotal = $MontantHT;
            
            echo "<tr> 
            <td> TRANCHE 1</td>
            <td>$Consommation</td>
            <td>$Tarif1</td>
            <td>$MontantHT</td>
            <td>14%</td>
            <td>$MontantTaxes</td>
            <td>الشطر 1</td>
            </tr>";
            
            

    }
        else{

            

            $ConsommationTranche2 = $Consommation - 100;
            $MontantHT1 = 100 * $Tarif1;
            $MontantHT2 = ($Consommation - 100 )* $Tarif2;
            

            $MontantTaxes1 = $MontantHT1 * $TauxTVA;
            $MontantTaxes2 = $MontantHT2 * $TauxTVA;
            $TotalTVA = $MontantTaxes1 + $MontantTaxes2;
            $SousTotal = $MontantHT1 +$MontantHT2;
            echo "<tr> 
            <td> TRANCHE 1</td>
            <td>100</td>
            <td>$Tarif1</td>
            <td>$MontantHT1</td>
            <td>14%</td>
            <td>$MontantTaxes1</td>
            <td>الشطر 1</td>
            </tr>";
            echo "<tr> 
            <td> TRANCHE 2</td>
            <td>$ConsommationTranche2</td>
            <td>$Tarif2</td>
            <td>$MontantHT2</td>
            <td>14%</td>
            <td>$MontantTaxes2</td>
            <td>الشطر 2</td>
            </tr>";
        }
    }
    else{
        $MontantHT;
        $MontantTaxes;
        if($Consommation <=210){
            $MontantHT = $Consommation * $Tarif3;
            $MontantTaxes = $MontantHT * $TauxTVA;
            $SousTotal = $MontantHT;
            echo "<tr> 
            <td> TRANCHE 3</td>
            <td>$Consommation</td>
            <td>$Tarif3</td>
            <td>$MontantHT</td>
            <td>14%</td>
            <td>$MontantTaxes</td>
            <td>الشطر 3</td>
            </tr>";
        }
        elseif($Consommation<=310){
            $MontantHT = $Consommation * $Tarif4;
            $MontantTaxes = $MontantHT * $TauxTVA;
            $SousTotal = $MontantHT;

            echo "<tr> 
            <td> TRANCHE 4</td>
            <td>$Consommation</td>
            <td>$Tarif4</td>
            <td>$MontantHT</td>
            <td>14%</td>
            <td>$MontantTaxes</td>
            <td>الشطر 4</td>
            </tr>";

        }
        elseif($Consommation<=510){
            $MontantHT = $Consommation * $Tarif5;
            $MontantTaxes = $MontantHT * $TauxTVA;
            $SousTotal = $MontantHT;
            echo "<tr> 
            <td> TRANCHE 5</td>
            <td>$Consommation</td>
            <td>$Tarif5</td>
            <td>$MontantHT</td>
            <td>14%</td>
            <td>$MontantTaxes</td>
            <td>الشطر 5</td>
            </tr>";

        }
        else{
            $MontantHT = $Consommation * $Tarif6;
            $MontantTaxes = $MontantHT * $TauxTVA;
            $SousTotal = $MontantHT;
            echo "<tr> 
            <td> TRANCHE 6</td>
            <td>$Consommation</td>
            <td>$Tarif6</td>
            <td>$MontantHT</td>
            <td>14%</td>
            <td>$MontantTaxes</td>
            <td>الشطر 6</td>
            </tr>";
        }
        
        
        
        
    }
    //type de calibre


    
?>

<?php
    
    if($Calibre =="5-10"){
        $Tarif = 22.65;
    }
    elseif($Calibre == "15-20"){
        $Tarif = 37.05;
    }
    else{
        $Tarif = 46.20;
    }
    $MontantTVA = $Tarif * $TauxTVA;
?>
    <tr></tr>
    <tr>
    <td><b>REDEVANCE FIXE ELECTRICITE</b></td>
    <td></td>
    <td></td>
    <td><?php echo$Tarif;?></td>
    <td>14%</td>
    <td><?php echo $MontantTVA ;?></td>
    <td><b>  إثاوة ثابتة الكھرباء</b></td>
    </tr>

    <tr>
        <td><b>TAXES POUR LE COMPTE DE L'ETAT</b></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><b>الرسوم المؤداة لفائدة الدولة</b></td>
    </tr>
    <tr>
        <td>Total TVA</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $TootalTva=  $TotalTVA + $MontantTVA;?></td>
        <td>مجموع ض.ق.م</td>
    </tr>
    <tr>
        <td>TIMBRE</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>0.45</td>
        <td> الطابع</td>
    </tr>
    <tr>
        <td>Sous-Total</td>
        <td></td>
        <td></td>
        <td><?php echo $SOOSTOTAL = $SousTotal +$Tarif ;?></td>
        <td></td>
        <td><?php echo $SousTotal2 = $TootalTva + 0.45;?></td>
    </tr>
    <tr>
        <td><b>TOTAL ÉLECTRICITÉ<b></td>
        <td></td>
        <td></td>
        <td><?php echo $TotalElectricite = $SOOSTOTAL + $SousTotal2;?></td>
    </tr>
    



