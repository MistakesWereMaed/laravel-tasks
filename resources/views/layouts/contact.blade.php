<!DOCTYPE html>
<html id="contact_html">
    <head id="contact_head">
        <link id="contact_css" href="./mystyle.css" type="text/css" rel="stylesheet"/>
        <title id="contact_title">Benjamin Samuel - Lab 3</title>
    </head>
    <body id="contact_body">
        <form id="contact_formContact" action="./save_contact.php" method="get">
            <table id="contact_tableContact">
                <tbody id="contact_tbodyContact">
                    <tr id="contact_rowName">
                        <th id="contact_rowName-head" scope="row">
                            <label id="contact_rowName-label" for="name">Full Name:</label>
                        </th>
                        <td id="contact_rowName-row">
                            <input id="contact_rowName-input" type="text" id="name" placeholder="John Doe"/>
                        </td>
                    </tr>
                    <tr id="contact_rowNumber">
                        <th id="contact_rowNumber-head" scope="row">
                            <label id="contact_rowNumber-label" for="number">Phone Number:</label>
                        </th>
                        <td id="contact_rowNumber-row">
                            <input id="contact_rowNumber-input" type="text" id="number" placeholder="+1 000-000-0000"/>
                        </td>
                    </tr>
                    <tr id="contact_rowEmail">
                        <th id="contact_rowEmail-head" scope="row">
                            <label id="contact_rowEmail-label" for="email">Email Address:</label>
                        </th>
                        <td id="contact_rowEmail-row">
                            <input id="contact_rowEmail-input" type="email" id="email" placeholder="example@gmail.com"/>
                        </td>
                    </tr>
                    <tr id="contact_rowRelation">
                        <th id="contact_rowRelation-head" scope="row">
                            <label id="contact_rowRelation-label" for="relationship">Relationship:</label>
                        </th>
                        <td id="contact_rowRelation-row">
                            <select id="contact_rowRelation-input" id="relationship">
                                <option id="contact_rowRelation-family" value="family">Family Member</option>
                                <option id="contact_rowRelation-SO" value="significant other">Significant Other</option>
                                <option id="contact_rowRelation-friend" value="friend">Friend</option>
                                <option id="contact_rowRelation-collegue" value="colleague">Colleague</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
                <tfoot id="contact_tfootContact">
                    <tr id="contact_rowSubmit">
                        <td id="contact_rowSubmit-rowEmpty"></td>
                        <td id="contact_rowSubmit-rowSubmit">
                            <input id="contact_rowSubmit-input" type="submit" value="Submit Contact">
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>