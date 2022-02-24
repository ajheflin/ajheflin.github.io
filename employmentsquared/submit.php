<?php
  //this code doesn't actually do anything with the submitted data, just receives it and then returns the user to the page
  //to email the responses would be pointless
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];
  //return the user to the page
  echo "<script>document.location.href = 'contact.php?submitted=1'</script>";
  //end php
?>
