{extends file='layout/layout.tpl'}
{block name='content'}
    <h3>Add new impression for this book</h3>
    <form id="register_form" action="impression.php?type=edit&i_id={$impressionInfo['id']}&b_id={$impressionInfo['book_id']}" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="comment">Comment:</label>
                </td>
                <td>
                    <input type="text" id="comment" name="comment" required="true" value="{$impressionInfo['name']}">
                </td>
            </tr>
        </table>

        <div class="center">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel" name="cancel">
        </div>
    </form>
{/block}