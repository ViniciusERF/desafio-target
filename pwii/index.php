<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Questões</title>
    
</head>

    <body>

        <header>
            <h1>Estágio Ribeirão Preto - 2024</h1>
        </header><br><br>   


        <main>
            <section class="lightblue">
                <!-- Questão 1 -->
                    <?php 
                        $indice = 13;
                        $soma = 0;
                        $k = 0;

                        while($k < $indice){
                            $k = $k +1;
                            $soma = $soma + $k;
                        }
                        echo"<h4>Questão 1 - $soma</h4>"
                    ?>
            </section><br><br>

            <section class="lightblue">
                <!-- Questão 2 -->
                <form action="index.php" method="POST">
                    <h4>Questão 2 - A sequência de Fibonacci é uma sequência numérica infinita em que cada termo a partir do terceiro é a soma dos dois termos anteriores.</h4><br>
                    <p>Digite o número de sequências desejadas:</p>
                    <input type="number" name="seq"><br><br>
                    <p>Agora digite o número para verificar se há na sequencia Fibonnaci:</p>
                    <input type="number" name="n1"><br><br>
                    <input type="submit" value="Enviar">
                </form>

                <?php 

                    if(isset($_POST["n1"])){
                        $n1 = $_POST["n1"];
                    }else{
                        $n1 = null;
                    }

                    if(isset($_POST["seq"])){
                        $seq = $_POST["seq"];
                    }else{
                        $seq = null;
                    }
                    
                    function verificadorFibonacci($n1, $seq){
                        if($n1 != null && $seq != null){
                            $cont = 0;
                            $anterior = 0;
                            $atual = 1;
                            while($cont < $seq){
                                echo"$anterior   ";
                                $anterior = $atual - $anterior;
                                $atual = $atual + $anterior;
                                $cont = $cont + 1;
                                if($anterior == $n1){
                                    echo"$anterior";
                                    echo"<br><br>O $anterior pertence a família Fibonacci";
                                    break;
                                }
                                elseif($anterior > $n1){
                                    echo"$anterior";
                                    echo"<br><br>O $n1 não pertence a família Fibonacci";
                                    break;
                                }
                                else{
                                    continue;
                                }
                            }
                        }else{
                            echo"<br><p>*Digite os valores nos campos*<p>";
                        }
                        
                    }

                    verificadorFibonacci($n1, $seq)

                ?>
            </section><br><br>

            <section class="lightblue">
                <!-- Questão 3 -->
            <?php
                echo"<h4>Questão 3</h4>";
                //Lógica 1 - somar o anterior com 2
                $number = 1;
                $soma = 2;
                $cont1 = 1;
                echo"A - ";
                while($cont1 <= 5){
                    echo"$number  ";
                    $number = $number + $soma;
                    $cont1++;
                }

                //Lógica 2 - número atual x2
                $number2 = 2;
                $cont2 = 1;
                echo"<br>B - ";
                while($cont2 <= 7){
                    echo"$number2  ";
                    $number2 = $number2 * 2;
                    $cont2 = $cont2 + 1;
                }

                //Lógica 3 - distância impar do próximo número
                $number3 = 1;
                $cont3 = 1;
                $impar = 1;
                echo"<br>C - "; 
                while($cont3 <= 7){
                    echo"$number3  ";
                    $impar = $impar + 2;
                    $number3 = $number3 + $impar;
                    $cont3++;
                }

                //Lógica 4 - primeiro valor (+4 3x), segundo (+4 5x), terceiro (+4 7x), quarto (+4 9x)
                $number4 = 4;
                $cont4 = 1;
                $mudanca = 3;
                $controle = 4;
                echo"<br>D - ";
                while($cont4 <= 5){
                    echo"$number4  ";
                    $total = $mudanca * $controle;
                    $number4 = $total + $number4;
                    $mudanca = $mudanca + 2;
                    $cont4++;
                }

                //Lógica 5 - sequência Fibonacci - numero anterior + numero atual
                $anterior2 = 0;
                $atual2 = 1;
                $cont5 = 1;
                echo"<br>E - ";
                while($cont5 <= 8){
                    echo"$anterior2   ";
                    $anterior2 = $atual2 - $anterior2;
                    $atual2 = $atual2 + $anterior2;
                    $cont5++;

                }

                

            ?>
                <br><p>F - Não entendi a lógica, sinto muito.</p>
            </section><br><br>
            
            <section class="lightblue">
                <!-- Questão 4 -->
            <h4>Questão 4 - Alice in bordeland</h4>
            <p>
                Confesso que conheço esse enigma de uma série chamada "Alice in bordeland". Ela retrata um gamer e dois amigos que são transportados para uma versão paralela de Tóquio, onde precisam participar de diversos jogos mortais caso queiram sobreviver.<strong>No caso eu acionaria dois interruptores A e B deixaria "ligados" por um tempo, depois desligaria apenas o A e faria uma visita, se a lâmpada estiver apagada e quente significa que é interruptor A, se ela estiver acesa é o interruptor B, e se estiver apagada e fria sobra apenas o interruptor C. Após usar minha última visita a uma das salas teria a resposta com base na primeira lâmpada.</strong>
            </p>

            </section><br><br>
            
            <!-- Questão 5 -->

            <section class="lightblue">
                <form action="index.php" method="POST">
                    <h4>Questão 5 - Inversão de palavras</h4><br>
                    <input type="text" name="string" placeholder="Digite uma palavra" style="text-align: center;"><br><br>
                    <input type="submit" value="Inverter">
                </form>
                

                <?php 
                    
                    if(isset($_POST["string"])){
                        $string = $_POST["string"];
                    }else{
                        $string = null;
                    }

                    if($string != null){

                        $tamanho = strlen($string);
                        $stringInvertida1 = "";

                        for($i = $tamanho - 1; $i >=0; $i--){
                            $stringInvertida1 .= $string[$i];
                        }

                        echo"<br>Palavra invertida: $stringInvertida1";

                    }

                ?>

            </section>

        </main>


        <footer>
            <h1>Vinicius Eduardo Reis Ferreira</h1>
        </footer>
    </body>

</html>