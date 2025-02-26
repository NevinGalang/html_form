<!DOCTYPE html>

    <head>
        <title>HTML FORM</title>
    </head>
        <body>
            <h1> ADD STUDENT </h1>
            <form action="action_page.php" method="POST">
                <table border="1" cellpadding="20" cellspacing="5" width="60%">
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                
                    <tr>
                        <td> Name: </td>
                        <td> <input type="text" name="name"> </td>
                    </tr>
                    <tr>
                        <td> Gender: </td>
                        <td>
                         <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                        </td>
                    </tr>
                    <tr>
                    <td> Country: </td>
                    <td>
                        <select name="country">
                            <option value="select country">SELECT COUNTRY</option>
                            <option value="PH">Philippines</option>
                            <option value="AUS">Australia</option>
                            <option value="US">United States</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                         <input style="padding: 10px; color: blue; q" type="submit" name="save" value="Save Record"/>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
</html>