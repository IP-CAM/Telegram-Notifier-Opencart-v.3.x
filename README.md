<h2>Overview</h2>
<p>Opencart Telegram Notifier is a program code which can help to configure notifications in CMS Opencart (3.X version) by using Telegram messenger bot</p>
<h2>How to install</h2>
<ol>
  <li>Put file <code>telegram.php</code> to the folder <code>catalog/model/tool</code>.</li>
  <li>Write code to whatever place you need to send message to Telegram bot:
    <br>
    <code>$this->load->model('tool/telegram');</code>
    <br>
    <code>$this->model_tool_telegram->sendMessage($bot_token, $chat_id, $text);</code>
    <br><br>
    Parameters:
    <ul>
      <li><code>$bot_token</code> is a string along the lines of <code>110201543:AAHdqTcvCH1vGWJxfSeofSAs0K5PALDsaw</code> that is required to authorize the bot and send requests to the Bot API. Keep your token secure and store it safely, it can be used by anyone to control your bot;</li>
      <li><code>$chat_id</code> is your chat id which you can get by using <code>getUpdates</code> method;</li>
      <li><code>$text</code> is your message which you want to send.</li>
    </ul>
  </li>
<ol>
