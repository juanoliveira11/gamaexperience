<?php 
 	include_once('conexao.php');

    //Consulta os leads no BD
 	$query = "SELECT Stack FROM leads WHERE 1";
    $result = mysqli_query($conn, $query);

    //Conta os leads
    $total_leads = 0;
    for ($i = 0; $i < 5; $i++) $stacks[i] = 0;

    if ($result->num_rows > 0) {
        while ($lead = $result->fetch_assoc()) {
            $total_leads++;
            
            switch ($lead['Stack']) {
                case 'Hustler':
                    $stacks[0]++;
                    break;
                case 'Hipster':
                    $stacks[1]++;
                    break;
                case 'Hyper':
                    $stacks[2]++;
                    break;
                case 'Hacker':
                    $stacks[3]++;
                    break;                
                default:
                    $stacks[4]++;
                    break;
            }
        }
    }   

    //Consulta os leads sem repetição no BD
    $query = "SELECT distinct Email FROM leads WHERE 1";
    $result = mysqli_query($conn, $query);
    $total_leads_unicos = $result->num_rows;
    
    //Imprime o resultado
    echo " ---------------------------- LEADS ACUMULADOS ATÉ O MOMENTO ----------------------------<br/><br/>";
    echo "TOTAL DE LEADS: $total_leads<br/>";
    echo "HUSTLERS: $stacks[0]<br/>";
    echo "HIPSTERS: $stacks[1]<br/>";
    echo "HYPERS: $stacks[2]<br/>";
    echo "HACKERS: $stacks[3]<br/>";
    echo "SEM STACK: $stacks[4]<br/><br/>";
    echo "TOTAL SEM EMAILS REPETIDOS: $total_leads_unicos <br/><br/><br/>";

    echo " ---------------------------- BORA PASSAR DESSES 1000 GAMATICOS!!!! ----------------------------<br/><br/>";

?>

