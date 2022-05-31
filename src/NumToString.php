<?php
/**
 * Libreria de NumTostringsion de numeros
 */
namespace Reddatasrd\NumTostring;

class NumTostring
{
    /**
     * Cententenas
     * input $VCentena
     * return $Numeros
     */
    private static  function Centenas($VCentena)
    {
        $Numeros[0] = "Cero";
        $Numeros[1] = "Uno";
        $Numeros[2] = "Dos";
        $Numeros[3] = "Tres";
        $Numeros[4] = "Cuatro";
        $Numeros[5] = "Cinco";
        $Numeros[6] = "Seis";
        $Numeros[7] = "Siete";
        $Numeros[8] = "Ocho";
        $Numeros[9] = "Nueve";
        $Numeros[10] = "Diez";
        $Numeros[11] = "once";
        $Numeros[12] = "Doce";
        $Numeros[13] = "Trece";
        $Numeros[14] = "Catorce";
        $Numeros[15] = "Quince";
        $Numeros[20] = "Veinte";
        $Numeros[30] = "Treinta";
        $Numeros[40] = "Cuarenta";
        $Numeros[50] = "Cincuenta";
        $Numeros[60] = "Sesenta";
        $Numeros[70] = "Setenta";
        $Numeros[80] = "Ochenta";
        $Numeros[90] = "Noventa";
        $Numeros[100] = "Ciento";
        $Numeros[101] = "Quinientos";
        $Numeros[102] = "Setecientos";
        $Numeros[103] = "Novecientos";
        if ($VCentena == 1) {
            return $Numeros[100];
        } else if ($VCentena == 5) {
            return $Numeros[101];
        } else if ($VCentena == 7) {
            return ($Numeros[102]);
        } else if ($VCentena == 9) {
            return ($Numeros[103]);
        } else {
            return $Numeros[$VCentena];
        }
    }
    /**
     * unidad
     * $VUnidad
     * return $tempo
     */
    private static  function Unidades($VUnidad)
    {
        $Numeros[0] = "Cero";
        $Numeros[1] = "Uno";
        $Numeros[2] = "Dos";
        $Numeros[3] = "Tres";
        $Numeros[4] = "Cuatro";
        $Numeros[5] = "Cinco";
        $Numeros[6] = "Seis";
        $Numeros[7] = "Siete";
        $Numeros[8] = "Ocho";
        $Numeros[9] = "Nueve";
        $Numeros[10] = "Diez";
        $Numeros[11] = "once";
        $Numeros[12] = "doce";
        $Numeros[13] = "Trece";
        $Numeros[14] = "Catorce";
        $Numeros[15] = "Quince";
        $Numeros[20] = "Veinte";
        $Numeros[30] = "Treinta";
        $Numeros[40] = "Cuarenta";
        $Numeros[50] = "Cincuenta";
        $Numeros[60] = "Sesenta";
        $Numeros[70] = "Setenta";
        $Numeros[80] = "Ochenta";
        $Numeros[90] = "Noventa";
        $Numeros[100] = "Ciento";
        $Numeros[101] = "Quinientos";
        $Numeros[102] = "Setecientos";
        $Numeros[103] = "Novecientos";

        $tempo = $Numeros[$VUnidad];
        return $tempo;
    }

    private static  function Decenas($VDecena)
    {
        $Numeros[0] = "Cero";
        $Numeros[1] = "Uno";
        $Numeros[2] = "Dos";
        $Numeros[3] = "Tres";
        $Numeros[4] = "Cuatro";
        $Numeros[5] = "Cinco";
        $Numeros[6] = "Seis";
        $Numeros[7] = "Siete";
        $Numeros[8] = "Ocho";
        $Numeros[9] = "Nueve";
        $Numeros[10] = "Diez";
        $Numeros[11] = "Once";
        $Numeros[12] = "Doce";
        $Numeros[13] = "Trece";
        $Numeros[14] = "Catorce";
        $Numeros[15] = "Quince";
        $Numeros[20] = "Veinte";
        $Numeros[30] = "Treinta";
        $Numeros[40] = "Cuarenta";
        $Numeros[50] = "Cincuenta";
        $Numeros[60] = "Sesenta";
        $Numeros[70] = "Setenta";
        $Numeros[80] = "Ochenta";
        $Numeros[90] = "Noventa";
        $Numeros[100] = "Ciento";
        $Numeros[101] = "Quinientos";
        $Numeros[102] = "Setecientos";
        $Numeros[103] = "Novecientos";
        $tempo = ($Numeros[$VDecena]);
        return $tempo;
    }

    private static  function NumerosALetras($Numero)
    {


        $Decimales = 0;
        //$Numero = intval($Numero);
        $letras = "";

        while ($Numero != 0) {

            // '*---> Validación si se pasa de 100 millones

            if ($Numero >= 1000000000) {
                $letras = "Error en NumTostringsión a Letras";
                $Numero = 0;
                $Decimales = 0;
            }

            // '*---> Centenas de Millón
            if (($Numero < 1000000000) and ($Numero >= 100000000)) {
                if ((Intval($Numero / 100000000) == 1) and (($Numero - (Intval($Numero / 100000000) * 100000000)) < 1000000)) {
                    $letras .= (string)"Cien Millones ";
                } else {
                    $letras = $letras & self::Centenas(Intval($Numero / 100000000));
                    if ((Intval($Numero / 100000000) <> 1) and (Intval($Numero / 100000000) <> 5) and (Intval($Numero / 100000000) <> 7) and (Intval($Numero / 100000000) <> 9)) {
                        $letras .= (string)"Cientos ";
                    } else {
                        $letras .= (string)" ";
                    }
                }
                $Numero = $Numero - (Intval($Numero / 100000000) * 100000000);
            }

            // '*---> Decenas de Millón
            if (($Numero < 100000000) and ($Numero >= 10000000)) {
                if (Intval($Numero / 1000000) < 16) {
                    $tempo = self::Decenas(Intval($Numero / 1000000));
                    $letras .= (string)$tempo;
                    $letras .= (string)" Millones ";
                    $Numero = $Numero - (Intval($Numero / 1000000) * 1000000);
                } else {
                    $letras = $letras & self::Decenas(Intval($Numero / 10000000) * 10);
                    $Numero = $Numero - (Intval($Numero / 10000000) * 10000000);
                    if ($Numero > 1000000) {
                        $letras .= $letras & " y ";
                    }
                }
            }

            // '*---> Unidades de Millón
            if (($Numero < 10000000) and ($Numero >= 1000000)) {
                $tempo = (Intval($Numero / 1000000));
                if ($tempo == 1) {
                    $letras .= (string)" Un Millón ";
                } else {
                    $tempo = self::Unidades(Intval($Numero / 1000000));
                    $letras .= (string)$tempo;
                    $letras .= (string)" Millones ";
                }
                $Numero = $Numero - (Intval($Numero / 1000000) * 1000000);
            }

            // '*---> Centenas de Millar
            if (($Numero < 1000000) and ($Numero >= 100000)) {
                $tempo = (Intval($Numero / 100000));
                $tempo2 = ($Numero - ($tempo * 100000));
                if (($tempo == 1) and ($tempo2 < 1000)) {
                    $letras .= (string)"Cien Mil ";
                } else {
                    $tempo = self::Centenas(Intval($Numero / 100000));
                    $letras .= (string)$tempo;
                    $tempo = (Intval($Numero / 100000));
                    if (($tempo <> 1) and ($tempo <> 5) and ($tempo <> 7) and ($tempo <> 9)) {
                        $letras .= (string)"Cientos ";
                    } else {
                        $letras .= (string)" ";
                    }
                }
                $Numero = $Numero - (Intval($Numero / 100000) * 100000);
            }

            // '*---> Decenas de Millar
            if (($Numero < 100000) and ($Numero >= 10000)) {
                $tempo = (Intval($Numero / 1000));
                if ($tempo < 16) {
                    $tempo = self::Decenas(Intval($Numero / 1000));
                    $letras .= (string)$tempo;
                    $letras .= (string)" Mil ";
                    $Numero = $Numero - (Intval($Numero / 1000) * 1000);
                } else {
                    $tempo = self::Decenas(Intval($Numero / 10000) * 10);
                    $letras .= (string)$tempo;
                    $Numero = $Numero - (Intval(($Numero / 10000)) * 10000);
                    if ($Numero > 1000) {
                        $letras .= (string)" y ";
                    } else {
                        $letras .= (string)" Mil ";
                    }
                }
            }


            // '*---> Unidades de Millar
            if (($Numero < 10000) and ($Numero >= 1000)) {
                $tempo = (Intval($Numero / 1000));
                if ($tempo == 1) {
                    //$letras .= (string) "un";
                } else {
                    $tempo = self::Unidades(Intval($Numero / 1000));
                    $letras .= (string)$tempo;
                }
                $letras .= (string)" Mil ";
                $Numero = $Numero - (Intval($Numero / 1000) * 1000);
            }

            // '*---> Centenas
            if (($Numero < 1000) and ($Numero > 99)) {
                if ((Intval($Numero / 100) == 1) and (($Numero - (Intval($Numero / 100) * 100)) < 1)) {
                    $letras = $letras & "Cien ";
                } else {
                    $temp = (Intval($Numero / 100));
                    $l2 = self::Centenas($temp);
                    $letras .= (string)$l2;
                    if ((Intval($Numero / 100) <> 1) and (Intval($Numero / 100) <> 5) and (Intval($Numero / 100) <> 7) and (Intval($Numero / 100) <> 9)) {
                        $letras .= "Cientos ";
                    } else {
                        $letras .= (string)" ";
                    }
                }

                $Numero = $Numero - (Intval($Numero / 100) * 100);
            }

            // '*---> Decenas
            if (($Numero < 100) and ($Numero > 9)) {
                if ($Numero < 16) {
                    $tempo = self::Decenas(Intval($Numero));
                    $letras .= $tempo;
                    $Numero = $Numero - Intval($Numero);
                } else {
                    $tempo = self::Decenas(Intval(($Numero / 10)) * 10);
                    $letras .= (string)$tempo;
                    $Numero = $Numero - (Intval(($Numero / 10)) * 10);
                    if ($Numero > 0.99) {
                        $letras .= (string)" y ";
                    }
                }
            }

            // '*---> Unidades
            if (($Numero < 10) and ($Numero > 0.99)) {
                $tempo = self::Unidades(Intval($Numero));
                $letras .= (string)$tempo;

                $Numero = $Numero - Intval($Numero);
            }


            // '*---> Decimales
            if ($Decimales > 0) {

                // $letras .=(string) " con ";
                // $Decimales= $Decimales*100;
                // echo ("*");
                // $Decimales = number_format($Decimales, 2);
                // echo ($Decimales);
                // $tempo = self::Decenas(Intval($Decimales));
                // $letras .= (string) $tempo;
                // $letras .= (string) "centavos";
            } else {
                if (($letras <> "Error en NumTostringsión a Letras") and (strlen(Trim($letras)) > 0)) {
                    $letras .= (string)" ";
                }
            }
            return $letras;
        }
    }
    private static  function decimal($x, $Numero){
        $resultado=$x;
        $Decimales = explode('.',$Numero);
        $x = self::NumerosALetras($Decimales[1]);
        $resultado=str_replace(" .",' con ',$resultado.'.'.$x);

        return $resultado;
    }

    /**
     * favor de teclear a mano la cantidad numerica a NumTostringtir y asignarla a $tt
     */
    public static function string($n)
    {
        $tt = $n;

        //$tt = $tt+0.009;
        $Numero = intval($tt);
        $Decimales = $tt - Intval($tt);
        $Decimales = $Decimales * 100;
        $Decimales = Intval($Decimales);
        $x = self::NumerosALetras($Numero);
        $x = self::decimal($x, $n);

        if ($n == 1) {
            $x = 'Uno';
        }
        return $x;
    }
}