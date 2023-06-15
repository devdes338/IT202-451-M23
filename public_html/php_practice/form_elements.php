<form>
    <select name = "mySelection">
        <option value = "1">User sees as one</option>
        <option value = "2">User sees as two</option>
        <option value = "3">User sees as three</option>
    </select>
    <textarea name = "ta">This is prefilled</textarea>
    <input type = "submit"/>
</form>
<?php
if (count($_POST) > 0) {
    echo "POST <pre>" . var_export($_POST, true) . "</pre>";
}

if (count($_GET) > 0) {
    echo "GET <pre>" . var_export($_GET, true) . "</pre>";
}

if (count($_REQUEST) > 0) {
    echo "REQUEST <pre>" . var_export($_REQUEST, true) . "</pre>";
}