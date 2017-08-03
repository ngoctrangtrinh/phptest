{extends file='layout/layout.tpl'}
{block name='content'}
    <h3><a href="{$path}/impression.php?type=add&book_id={$bookId}" class="btn btn-primary">Add new impression for this book</a></h3>
    {if isset($msg)}
        <h3>{$msg}</h3>
    {/if}
    {if isset($impressionList)}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Comment</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            {foreach $impressionList as $i}
                <tr>
                    <td>{$i['id']}</td>
                    <td>{$i['name']}</td>
                    <td>
                        <a href="{$path}/impression.php?type=edit&id={$i['id']}" class="btn btn-primary">Edit</a>
                        <a href="{$path}/impression.php?type=delete&id={$i['id']}" class="btn btn-primary" id="book_delete">Delete</a>
                    </td>
                </tr>

            {/foreach}
            {*{if $link_pager}*}
            {*<tr><td colspan="6" align="center">{$link_pager}</td></tr>*}
            {*{/if}*}
            </tbody>

        </table>
        {else}
        <h3>There is no impression for this book</h3>
    {/if}
{/block}