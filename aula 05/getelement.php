<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo do GetElement</title>
            <script>
                function novaCor(novaCor) {
                    const elem = document.getElementById("paragrafo");
                    elem.style.color = novaCor;
                }
            </script>
    </head>

    <body>
        <p id="paragrafo">O MATHEUS É LEGAL</p>
        <button onclick="novaCor('blue');">azul</button> 
        <button onclick="novaCor('red');">vermelho</button>
        <button onclick="novaCor('green');">verde</button>
        <button onclick="novaCor('pink');">rosa</button>
        <button onclick="novaCor('yellow');">amarelo</button>
        <button onclick="novaCor('black');">preto</button>
        <button onclick="novaCor('white');">branco</button>
        <button onclick="novaCor('orange');">laranja</button>
        <button onclick="novaCor('brown');">marrom</button>
        <button onclick="novaCor('purple');">roxo</button>
        <button onclick="novaCor('cyan');">ciano</button>
        <button onclick="novaCor('violet');">violeta</button>
        <button onclick="novaCor('gray');">cinza</button>
    </body>
</html>