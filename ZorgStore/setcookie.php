<?php include 'navigation.php';?>
<?php include ‘product.php';?

/* name is the name of cookie
/* value is the actual content of the cookie name
/* expire pretty straightforward says when the cookie expires
/* path is the directory for which the cookies is valid ( I am assuming 
that this means the directory of the device to which the cookie will be stored idk.
/* domain is the website
/* 1 says cookie should be sent by secure transmission. 0 means it can be sent by regular HTTP

setcookie(name, value, name, value expire, path, domain, security);

setcookie(“Product”, $row["title”], “Price”, $row["price”], time()+3600, "/","", 0);






