<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Cadastro de Parceiro</h1>

        <form method="post" action="" enctype="multipart/form-data" >
            <table>
                <tr>
                    <td>
                        <input type="text" name="cnpj" placeholder="cnpj" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nome_empresa" placeholder="nome_empresa" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email_admin" placeholder="email_admin" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="senha" placeholder="senha" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="nivel">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" name="ativo" />
                            Ativar/Desativar
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="send" value="Cadastrar" />
                    </td>
                </tr>
            </table>
        </form>


    </body>
</html>