<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</body>
</html>
    <title>Atividade avaliativa</title>
    <style>
        /* Estilos CSS */
    
        body {

            font-family: Arial, sans-serif;
            margin: 20px;

        }
        h1 {
            text-align: center;

        }
        form {

            margin-bottom: 20px;

        }
        table {

            width: 100%;

            border-collapse: collapse;

        }
        th, td {

            padding: 8px;
            border-bottom: 1px solid #DB7093;
            text-align: left;

        }
        th {

            background-color: #DB7093;
        }

    </style>
</head>
<body>

    <h1>Fórmulario</h1>
    <form id="myForm">

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" required></textarea><br>


        <input type="submit" value="Enviar">

    </form>
    <table id="data-table">

        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Mensagem</th>

        </tr>
    </table>
    <script>

        // Função para exibir os dados na tabela

        function displayData() {

            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            var table = document.getElementById("data-table");
            var newRow = table.insertRow(-1);
            var nameCell = newRow.insertCell(0);
            var emailCell = newRow.insertCell(1);
            var messageCell = newRow.insertCell(2);


            nameCell.innerHTML = name;

            emailCell.innerHTML = email;

            messageCell.innerHTML = message;

        }


        // Manipulador de evento para o envio do formulário

        document.getElementById("myForm").addEventListener("submit", function(event) {

            event.preventDefault(); // Impede o envio do formulário

            displayData(); // Chama a função para exibir os dados


            // Limpa os campos do formulário

            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";

        });

    </script>

</body>
</html>

