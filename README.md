<h2>Overview</h2>
<p>Opencart Telegram Notifier is a program code which allows you to configure notifications in CMS Opencart (3.X version) by using Telegram messenger bot. For example, program code can be used to small business as a notification to incoming orders with all included information.</p>
<h2>How to install</h2>
<ol>
  <li>Put file <code>telegram.php</code> to the folder <code>catalog/model/tool</code>.</li>
  <li>Write code to whatever place you need:
    <br>
    <code>$this->load->model('tool/telegram');</code>
    <br>
    <code>$this->model_tool_telegram->sendMessage($bot_token, $chat_id, $text);</code>
    <br><br>
    Parameters:
    <ul>
      <li><code>$bot_token</code> is a string along the lines of <code>123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11</code> that is required to authorize the bot and send requests to the Bot API. Keep your token secure and store it safely, it can be used by anyone to control your bot.</li>
      <li><code>$chat_id</code> is your chat id which you can get by using <code>getUpdates</code> method. Use <code>curl</code> function as in the example below:
      <br>
      <code>curl "https://api.telegram.org/bot123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11/getUpdates"</code>
      </li>
      <li><code>$text</code> is your message.</li>
    </ul>
  </li>
</ol>
<h2>Documentation</h2>
<ul>
  <li><a href="https://www.php.net/manual/en/book.curl.php">PHP CURL Library</a></li>
  <li><a href="https://core.telegram.org/bots/api">Telegram Bot API</a></li>
</ul>
