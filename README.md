Acessando os valores de checkboxes.

Como fiz:

Para acessar os valores das checkboxes deste código, primeiro coloquei elas dentro de um form de método post e as associei a um input do tipo submit.

Quando o fomulário for enviado, utilizo a variável global $_POST para acessar os valores do form.

Então, utilizo o filter_input para acessar o valor de cada checkbox, nomeadas ckUsuarios.

Foi necessário nomeá-las já como arrays, usando os colchetes [], para que os valores pudessem ser iterados pelo laço foreach, passando eles para o arrayIds[].

Também foi necessário o uso da flag FILTER_REQUIRE_ARRAY para indicar que os valores seriam recebidos dentro de um array.

Por fim, o arrayIds foi iterado, exibindo apenas o valor de cada checkbox selecionada e enviada via post.

Finalidade:

Acessando os valores atribuídos a checkboxes, podemos, por exemplo, enviá-las ou exclui-las.