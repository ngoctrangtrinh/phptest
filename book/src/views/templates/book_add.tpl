{extends file='layout/layout.tpl'}
{block name='content'}
    <h3>Add new book</h3>
    <form id="register_form" action="book.php?type=add" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="name">Book's name:</label>
                </td>
                <td>
                    <input type="text" id="name" name="name" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="publisher">Publisher:</label>
                </td>
                <td>
                    <input type="text" id="publisher" name="publisher" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="page">Page(number)</label>
                </td>
                <td>
                    <input type="number" id="page" name="page" required="true">
                </td>
            </tr>
        </table>

        <div class="center">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel" name="cancel">
        </div>
    </form>
{/block}