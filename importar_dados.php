<?php
include('conexao.php');

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
    if ($fileType == 'csv') {
        $tmpName = $file['tmp_name'];

        if (($handle = fopen($tmpName, 'r')) !== false) {
            fgetcsv($handle); 

            while (($line = fgetcsv($handle)) !== false) {
                if (count($line) >= 6) {
                    $latitude = str_replace(',', '.', $line[4]);
                    $longitude = str_replace(',', '.', $line[5]);

                    $values = "'" . implode("', '", array_slice($line, 0, 4)) . "', '$latitude', '$longitude', '" . implode("', '", array_slice($line, 6)) . "'";

                    $sql = "INSERT INTO dados_chuva (municipio, codEstacao, uf, nomeEstacao, latitude, longitude, dataHora, valorMedida) VALUES ($values)";
                    echo($sql);
                    if ($conn->query($sql) !== true) {
                        echo "Erro na inserção: " . $conn->error;
                        break;
                    }
                } else {
                    echo "Número incorreto de campos no arquivo CSV.";
                    break;
                }
               
                //var_dump($line);            
            }

            fclose($handle);

            echo "Importação concluída com sucesso!";
        } else {
            echo "Erro ao ler o arquivo CSV.";
        }
    } else {
        echo "Por favor, selecione um arquivo CSV válido.";
    }
}

$conn->close();
?>
