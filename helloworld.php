<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
// [START user]
# Looks for current Google account session
$user = UserService::getCurrentUser();
// [END user]
// [START ifuser]
if ($user) {
    echo 'Hello, again!' . htmlspecialchars($user->getNickname());
}
// [END ifuser]
// [START elseuser]
else {
    header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
}
// [END elseuser]
// [START formprocessing]
if (array_key_exists('content', $_POST)) {
    echo "You wrote:<pre>\n";
    echo htmlspecialchars($_POST['content']);
    echo "\n</pre>";
        }
// [END formprocessing]
    ?>
        <form action="/sign" method="post">
              <div><textarea name="content" rows="3" cols="60"></textarea></div>
                    <div><input type="submit" value="Sign Guestbook"></div>
                        </form>
