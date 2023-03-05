<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Discord Whois</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Audiowide\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.12.0/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/fonts/fontawesome5-overrides.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/whoiscolumn.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/whoisfooter.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/whoisnav.css\">
</head>

<body>
    <nav class=\"navbar navbar-light navbar-expand-md navigation-clean\" style=\"background: #ffffff;\">
        <div class=\"container-fluid\"><a class=\"navbar-brand\" href=\"/\" style=\"font-family: Audiowide, cursive;\">Discord Whois</a><button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div
                class=\"collapse navbar-collapse\" id=\"navcol-1\" style=\"font-family: Audiowide, cursive;\">
                <ul class=\"nav navbar-nav ml-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Whois Search</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#abuse\" href=\"\">Report Abuse</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#rmd\">Remove My Identity</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class=\"highlight-clean\" style=\"background: #2c2f33;color: white;\">
        <div class=\"container\">
            <div class=\"intro\">
                <h2 class=\"text-center\">Whois Search</h2><input id=\"searchduid\" type=\"number\" style=\"background: #23272a;color: white;border-style: none;width: 498px;height: 53px;font-size: 24px;padding-left: 22px;\" placeholder=\"Enter Discord ID (ex. 561960121052430370))\" name=\"searchduid\" required=\"\"
                    pattern=\"\\D+\\#+[0-9][0-9][0-9][0-9]\" maxlength=\"64\"><input type=\"text\" style=\"background: #23272a;color: white;border-style: none;width: 263px;height: 28px;font-size: 12px;padding-left: 22px;\" placeholder=\"(Optional API Key)\" name=\"input-ak\"
                    disabled=\"\"><i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-bs-tooltip=\"\" data-placement=\"right\" style=\"margin-left: 4px;\" title=\"API Key used for unlimited whois searches. (Currently Disabled)\"></i>
                <p class=\"text-center\">Search for a discord user, input a valid discord username and tag, our server interacts with the discord api, providing realtime updates, please not, the \"check user flags\" option is soley based on user reports on our service, to report
                    a user, login and search a user and select a report option and reason.</p>
            </div>
            <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" id=\"lookup-true\" onclick=\"searchduid()\">Lookup</a><button class=\"btn btn-light\" type=\"button\" title=\"Check flags listed on user account.\" disabled>CHECK USER FLAGS<i class=\"fa fa-question-circle-o\" data-toggle=\"tooltip\" data-bs-tooltip=\"\" style=\"margin-left: 6px;\" title=\"Check flags on discord account.\"></i></button></div>
        </div>
    </div>
    <div class=\"footer-basic\">
        <footer>
            <div class=\"social\"><a href=\"https://discord.gg/4NTzP4WAke\" target=\"_blank\"><i class=\"fab fa-discord\"></i></a></div>
            <ul class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"/\">Home</a></li>
                <li class=\"list-inline-item\"><a href=\"#\">Whois Search</a></li>
                <li class=\"list-inline-item\"><a href=\"#\">About</a></li>
                <li class=\"list-inline-item\"><a href=\"#\">Terms</a></li>
                <li class=\"list-inline-item\"><a href=\"#\">Privacy Policy</a></li>
            </ul>
            <p class=\"copyright\">Discord Whois Service © 2021</p>
        </footer>
    </div>
    <div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"abuse\" style=\"font-family: Audiowide, cursive;\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Report Abuse</h4><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" hidden=\"\"><span aria-hidden=\"true\">×</span></button></div>
                <div class=\"modal-body\">
                    <p>If you believe someone is abusing our platform/service, email us at <strong>lewis.lt27@gmail.com.</strong></p>
                </div>
                <div class=\"modal-footer\"><button class=\"btn btn-light\" type=\"button\" data-dismiss=\"modal\">Cancel</button><button class=\"btn btn-danger\" type=\"button\" onclick=\"location.href = "mailto:lewis.lt27@gmail.com?subject=Report Abuse at Discord Whois Service";\">Report Abuse</button></div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"rmd\" style=\"font-family: Audiowide, cursive;\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Remove my Data</h4><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" hidden=\"\"><span aria-hidden=\"true\">×</span></button></div>
                <div class=\"modal-body\">
                    <p>Only use this if you are actually the discord account holder, we take steps to verify you are who you say you are, you will be redirected to our discord server where you will Direct Message Cathy and ask for data deletion, please give
                        her your discord id (<@00000000000>).</p>
                </div>
                <div class=\"modal-footer\"><button class=\"btn btn-light\" type=\"button\" data-dismiss=\"modal\">Cancel</button><button class=\"btn btn-danger\" type=\"button\" onclick=\"location.href = "https://discord.gg/4NTzP4WAke";\">Remove my data!</button></div>
            </div>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/assets/js/bs-init.js\"></script>
    <script src=\"/assets/js/interact-api.js\"></script>
</body>

</html>
