<?php
$connection = pg_connect ("host=ec2-79-125-26-232.eu-west-1.compute.amazonaws.com dbname=da5ra37bdrqbo5 user=cloqhtjxzygxxn password=ed2f479dd21985a83d9d022d7c986bc77bac577343e2eafd4ad51b8051f6c487");
if($connection) {
echo 'connected';
}
else {
echo 'there has been an error connecting';
} 

?>