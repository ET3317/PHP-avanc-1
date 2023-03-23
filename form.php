<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="lastName">Last Name :</label>
        <input type="text" id="lastName" name="last_name">
    </div>
    <div>
        <label for="firstName">First Name :</label>
        <input type="text" id="firstName" name="first_name">
    </div>
    <div>
        <label for="message">Mail :</label>
        <label for="courriel"><input type ="email" id="courriel" name="user_email"></label>
    </div>
    <div>
        <label for="phone">Phone :</label>
        <input type ="text" id="phone" name="number">
    </div>
        <label for="subject">Choose a subject:</label>
        <select id ="subject" name="subject">
            <option value="sujet1">Swimming Pool</option>
            <option value="sujet2">Gym</option>
            <option value="sujet3">Team sport</option>
        </select>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type ="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>
