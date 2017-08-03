{extends file='layout/layout.tpl'}
{block name='content'}
    {if isset($msg)}
        <h3>{$msg}</h3>
    {/if}
    <h3><a href="{$path}/book.php?type=add" class="btn btn-primary">Add new book</a></h3>
    {if isset($bookList)}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Publisher</th>
                <th>Page</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            {foreach $bookList as $b}
                <tr>
                    <td>{$b['id']}</td>
                    <td>{$b['name']}</td>
                    <td>{$b['publisher']}</td>
                    <td>{$b['page']}</td>
                    <td>
                        <a href="{$path}/book.php?type=edit&book_id={$b['id']}" class="btn btn-primary">Edit</a>
                        <a href="{$path}/book.php?type=delete&book_id={$b['id']}" class="btn btn-primary" id="book_delete">Delete</a>
                        <a href="{$path}/impression.php?type=list&book_id={$b['id']}" class="btn btn-primary">View Impressions</a>
                    </td>
                </tr>

            {/foreach}
            {*{if $link_pager}*}
                {*<tr><td colspan="6" align="center">{$link_pager}</td></tr>*}
            {*{/if}*}
            </tbody>

        </table>
        {else}
        <h3>There is no book.</h3>
    {/if}

{/block}