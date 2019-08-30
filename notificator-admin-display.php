<?php
/**
 * Admin Pages
 */
?>

<h1>iOS Notificator</h1>

<form>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label for="title">Message Title</label></th>
                <td>
                    <input name="title" type="text" class="regular-text code" />
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="message">Message Body</label></th>
                <td>
                    <textarea name="message" class="large-text code" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="token[]">Recipients</label></th>
                <td>
                    <a href='#' id='select-all'>select all</a> |
                    <a href='#' id='deselect-all'>deselect all</a>
                    <select multiple name="token[]" class="multi-select">
                        <option id="1">1</option>
                        <option id="2">2</option>
                        <option id="3">3</option>
                        <option id="4">4</option>
                        <option id="5">5</option>
                        <option id="6">6</option>
                        <option id="7">7</option>
                        <option id="8">8</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="submit">
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Send">
    </p>
</form>