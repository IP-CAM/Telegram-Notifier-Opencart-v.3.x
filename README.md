<h2>Overview</h2>
<p>Opencart Telegram Notifier is a program code which can help to configure notifications in CMS Opencart (3.X version) by using Telegram messenger bot</p>
<h2>How to install</h2>
<ol>
  <li>Put file <code>telegram.php</code> to the folder <code>catalog/model/tool</code>.</li>
  <li>Write code to whatever place you need to send message to Telegram bot:
    <br>
    <code>$this->load->model('tool/telegram');</code>
    <br>
    <code>$this->model_tool_telegram->sendMessage($this->config->get('config_telegram_bot_id'), $this->config->get('config_telegram_chat_id'), $text);</code>
    <br><br>
    Parameters:
    <ul>
      <li><code>config_telegram_bot_id</code> is your bot id;</li>
      <li><code>config_telegram_chat_id</code> is your chat id which you can get by using <code>getUpdates</code> method;</li>
      <li><code>$text</code> is your message which you want to send to Telegram.</li>
    </ul>
  </li>
<ol>
