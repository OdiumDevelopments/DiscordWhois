<?php
define('BOT_TOKEN', 'your discord bot token');

// Check if results are cached
$cache_key = 'discord_user_' . $_GET['duid'];
$discord_results = apc_fetch($cache_key);

if ($discord_results === false) {
    // Results not in cache, fetch from API
    $opts = array(
        'http' => array(
            'method' => 'GET',
            'header' => 'Accept-language: en\r\n' .
                'Cookie: foo=bar\r\n' .
                'Authorization: Bot ' . BOT_TOKEN
        )
    );

    $context = stream_context_create($opts);

    $file = file_get_contents('https://discord.com/api/users/' . $_GET['duid'], false, $context);
    $discord_results = json_decode($file);

    // Cache results for future use
    apc_store($cache_key, $discord_results, 3600); // 1 hour cache lifetime
}


echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "\n";
echo "<head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">\n";
echo "    <title>Discord Whois</title>\n";
echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Audiowide\">\n";
echo "    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.12.0/css/all.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/fonts/fontawesome5-overrides.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/whoiscolumn.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/whoisfooter.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/whoisnav.css\">\n";
echo "</head>\n";
echo "\n";
echo "<body>\n";
echo "    <nav class=\"navbar navbar-light navbar-expand-md navigation-clean\" style=\"background: #ffffff;\">\n";
echo "        <div class=\"container-fluid\"><a class=\"navbar-brand\" href=\"/\" style=\"font-family: Audiowide, cursive;\">Discord Whois</a><button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>\n";
echo "            <div\n";
echo "                class=\"collapse navbar-collapse\" id=\"navcol-1\" style=\"font-family: Audiowide, cursive;\">\n";
echo "                <ul class=\"nav navbar-nav ml-auto\">\n";
echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Whois Search</a></li>\n";
echo "                    <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#abuse\" href=\"\">Report Abuse</a></li>\n";
echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#rmd\">Remove My Identity</a></li>\n";
echo "                </ul>\n";
echo "        </div>\n";
echo "        </div>\n";
echo "    </nav>\n";
echo "    <div class=\"highlight-clean\" style=\"background: #2c2f33;color: white;\">\n";
echo "        <div class=\"container\">\n";
echo "            <div class=\"intro\">\n";
echo "                <h2 class=\"text-center\">Whois Results</h2>\n";
echo "            </div>\n";
echo "            <div class=\"buttons\"></div>\n";
echo "        </div>\n";
echo "        <div class=\"table-responsive text-white\" style=\"width: 793px;color: white;background: #23272a;margin-right: auto;margin-left: auto;\">\n";
echo "            <table class=\"table table-hover\">\n";
echo "                <thead style=\"color: white;\">\n";
echo "                    <tr style=\"color: white;\">\n";
echo "                        <th style=\"width: 279px;border-style: none;border-bottom-style: solid;border-bottom-color: #7289da;\">User Info</th>\n";
echo "                        <th style=\"border-style: none;border-bottom-style: solid;border-bottom-color: #7289da;\">Value</th>\n";
echo "                    </tr>\n";
echo "                </thead>\n";
echo "                <tbody>\n";
echo "                    <tr>\n";
echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;\">ID</td>\n";
echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;border-left-style: solid;border-left-color: #2c2f33;\">". $discord_results->id ."</td>\n";
echo "                    </tr>\n";
echo "                    <tr>\n";
echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;\">Username</td>\n";
echo "                        <td style=\"color: white;border-style: none;border-bottom-style: solid;border-bottom-color: #2c2f33;border-left-style: solid;border-left-color: #2c2f33;\">". $discord_results->username ."</td>\n";
echo "                    </tr>\n";
echo "                    <tr>\n";
echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;\">Discriminator</td>\n";
echo "                        <td style=\"color: white;border-style: none;border-bottom-style: solid;border-bottom-color: #2c2f33;border-left-style: solid;border-left-color: #2c2f33;\">". $discord_results->discriminator ."</td>\n";
echo "                    </tr>\n";
echo "                    <tr style=\"height: 196px;\">\n";
echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;\">Avatar</td>\n";
echo "                        <td style=\"color: white;border-style: none;border-bottom-style: solid;border-bottom-color: #2c2f33;border-left-style: solid;border-left-color: #2c2f33;\">\n";
echo "                            <picture><img class=\"rounded-circle\" style=\"width: 124px;height: 124px;margin-top: 20px;border-style: solid;border-color: #7289da;\" src=\"https://cdn.discordapp.com/avatars/". $discord_results->id . "/" . $discord_results->avatar . ".png\" width=\"124\" height=\"124\"></picture>\n";
echo "                        </td>\n";
echo "                    </tr>\n";
echo "                    <tr>\n";
echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;\">Flags</td>\n";
echo "                        <td style=\"color: white;border-style: none;border-bottom-style: solid;border-bottom-color: #2c2f33;border-left-style: solid;border-left-color: #2c2f33;\">". $discord_results->public_flags ."</td>\n";
echo "                    </tr>\n";
if($discord_results->bot == "true"){
    echo "                    <tr>\n";
    echo "                        <td style=\"color: white;border-bottom-style: solid;border-bottom-color: #2c2f33;\">Bot</td>\n";
    echo "                        <td style=\"color: white;border-style: none;border-bottom-style: solid;border-bottom-color: #2c2f33;border-left-style: solid;border-left-color: #2c2f33;\">True</td>\n";
    echo "                    </tr>\n";
}


echo "                </tbody>\n";
echo "            </table>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "    <div class=\"footer-basic\">\n";
echo "        <footer>\n";
echo "            <div class=\"social\"><a href=\"https://discord.gg/4NTzP4WAke\" target=\"_blank\"><i class=\"fab fa-discord\"></i></a></div>\n";
echo "            <ul class=\"list-inline\">\n";
echo "                <li class=\"list-inline-item\"><a href=\"/\">Home</a></li>\n";
echo "                <li class=\"list-inline-item\"><a href=\"#\">Whois Search</a></li>\n";
echo "                <li class=\"list-inline-item\"><a href=\"#\">About</a></li>\n";
echo "                <li class=\"list-inline-item\"><a href=\"#\">Terms</a></li>\n";
echo "                <li class=\"list-inline-item\"><a href=\"#\">Privacy Policy</a></li>\n";
echo "            </ul>\n";
echo "            <p class=\"copyright\">Discord Whois Service © 2021</p>\n";
echo "        </footer>\n";
echo "    </div>\n";
echo "    <div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"abuse\" style=\"font-family: Audiowide, cursive;\">\n";
echo "        <div class=\"modal-dialog\" role=\"document\">\n";
echo "            <div class=\"modal-content\">\n";
echo "                <div class=\"modal-header\">\n";
echo "                    <h4 class=\"modal-title\">Report Abuse</h4><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" hidden=\"\"><span aria-hidden=\"true\">×</span></button></div>\n";
echo "                <div class=\"modal-body\">\n";
echo "                    <p>If you believe someone is abusing our platform/service, email us at <strong>lewis.lt27@gmail.com.</strong></p>\n";
echo "                </div>\n";
echo "                <div class=\"modal-footer\"><button class=\"btn btn-light\" type=\"button\" data-dismiss=\"modal\">Cancel</button><button class=\"btn btn-danger\" type=\"button\" onclick=\"location.href = &quot;mailto:lewis.lt27@gmail.com?subject=Report Abuse at Discord Whois Service&quot;;\">Report Abuse</button></div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "    <div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"rmd\" style=\"font-family: Audiowide, cursive;\">\n";
echo "        <div class=\"modal-dialog\" role=\"document\">\n";
echo "            <div class=\"modal-content\">\n";
echo "                <div class=\"modal-header\">\n";
echo "                    <h4 class=\"modal-title\">Remove my Data</h4><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" hidden=\"\"><span aria-hidden=\"true\">×</span></button></div>\n";
echo "                <div class=\"modal-body\">\n";
echo "                    <p>Only use this if you are actually the discord account holder, we take steps to verify you are who you say you are, you will be redirected to our discord server where you will Direct Message Cathy and ask for data deletion, please give\n";
echo "                        her your discord id (&lt;@00000000000&gt;).</p>\n";
echo "                </div>\n";
echo "                <div class=\"modal-footer\"><button class=\"btn btn-light\" type=\"button\" data-dismiss=\"modal\">Cancel</button><button class=\"btn btn-danger\" type=\"button\" onclick=\"location.href = &quot;https://discord.gg/4NTzP4WAke&quot;;\">Remove my data!</button></div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>\n";
echo "    <script src=\"/assets/js/bs-init.js\"></script>\n";
echo "    <script src=\"/assets/js/interact-api.js\"></script>\n";
echo "</body>\n";
echo "\n";
echo "</html>"; ?>
