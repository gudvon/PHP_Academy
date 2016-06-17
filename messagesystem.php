<?PHP

function getMessages()
{
    if (is_readable("messages.db"))
    {
        $messages = file_get_contents("messages.db");
        $messages=unserialize($messages);
        return $messages;
    }
}

function addMessage($messages)
{
    if(isset($_POST["submit"]))
    {
        //......... htmlspecialchars() - защита от скриптов
        $newPost["userName"]=htmlspecialchars($_POST["userName"]);
        $newPost["userMessage"]=htmlspecialchars($_POST["userMessage"]);
        $messages[]=$newPost;
        $messagesDB=serialize($messages);
        file_put_contents("messages.db",$messagesDB);
    }
    return $messages;
}

function showMessages($messages)
{
    $cens=["bad","worse","verybad"];
    if (isset($messages))
    {
        $messages=array_reverse($messages);
        foreach($messages as $key=>$post) //.......... фильтр плохих слов
        {
            foreach ($cens as $word)
            {
                $messages["key"]=str_replace("$word","CENSORED",$messages["$key"]);
            }
        }
        foreach ($messages as $post)
        {
            $post['userName']=htmlspecialchars($post['userName']);
            $post['userMessage']=htmlspecialchars($post['userMessage']);
            echo "<p>User {$post['userName']} is writting...</p>";
            echo "<p>{$post['userMessage']}</p>";
            echo "<br>";
        }
    }
}

//добавлять время сообщения, стили коментария (как в телефоне(четные не четные, заливка))

