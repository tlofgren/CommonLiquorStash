<?php
/* check_in_items.php
 * CLS
 */

/**TODO
require library of php functions
check POST array for vars
call functions to check in items
*/

require_once('Queries.php');

if (isset($_POST['itemId']))
{
  $result = get_mediaitem_by_barcode($_POST['itemId']);
  echo json_encode($result);
}
// print_r($_POST);
?>
