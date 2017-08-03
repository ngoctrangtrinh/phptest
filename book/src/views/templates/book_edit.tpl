{extends file='layout/layout.tpl'}
{block name='content'}
    <h3>Edit your book</h3>
    <form id="register_form" action="book.php?type=edit&bookId={$bookInfo['id']}" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="name">Book's name:</label>
                </td>
                <td>
                    <input type="text" id="name" name="name" required="true" value="{$bookInfo['name']}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="publisher">Publisher:</label>
                </td>
                <td>
                    <input type="text" id="publisher" name="publisher" required="true" value="{$bookInfo['publisher']}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="page">Page(number)</label>
                </td>
                <td>
                    <input type="number" id="page" name="page" required="true" value="{$bookInfo['page']}">
                </td>
            </tr>
        </table>
        <div class="center">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
{/block}