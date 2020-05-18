<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* restaurant.html.twig */
class __TwigTemplate_18d6a4833e80b4e06d99bf25a8a45570b1556ba3f0d66a6daf0d68a54a713401 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'users_active' => [$this, 'block_users_active'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <meta name=\"description\" content=\"Neon Admin Panel\"/>
    <meta name=\"author\" content=\"Laborator.co\"/>
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "assets/images/favicon.ico\">
    <title>LA-PIZZA | ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css\" id=\"style-resource-1\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/font-icons/entypo/css/entypo.css\" id=\"style-resource-2\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic\" id=\"style-resource-3\">


    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/font-icons/font-awesome/css/font-awesome.min.css\" id=\"style-resource-4\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/bootstrap.css\" id=\"style-resource-4\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/neon-core.css\" id=\"style-resource-5\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/neon-theme.css\" id=\"style-resource-6\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/neon-forms.css\" id=\"style-resource-7\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/custom.css\" id=\"style-resource-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/skins/purple.css\" id=\"style-resource-8\">

    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery-1.11.3.min.js\"></script>
    <script src=\"https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->



<body class=\"page-body page-fade\" data-url=\"https://demo.neontheme.com\">
<div class=\"page-container\">
    <div class=\"sidebar-menu\">
        <div class=\"sidebar-menu-inner\">
            <header class=\"logo-env\"> <!-- logo -->
                <div class=\"logo\"><a href=\"\" style=\"font-size: 22px;\"> LA-PIZZA AP </a></div> <!-- logo collapse icon -->
                <div class=\"sidebar-collapse\"><a href=\"#\" class=\"sidebar-collapse-icon\">
                        <!-- add class \"with-animation\" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class=\"entypo-menu\"></i> </a></div>
                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class=\"sidebar-mobile-menu visible-xs\"><a href=\"#\" class=\"with-animation\">
                        <!-- add class \"with-animation\" to support animation --> <i class=\"entypo-menu\"></i> </a></div>
            </header>
            
            <ul id=\"main-menu\" class=\"main-menu\">
                <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_restaurant");
        echo "\"><i class=\"entypo-gauge\"></i><span
                                class=\"title\">Tableau de bord</span></a>
                </li>
                <li class=\"has-sub\"><a href=\"\"><i class=\"entypo-layout\"></i><span class=\"title\">Restaurants</span></a>
                    <ul>
                        <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_restaurants");
        echo "\"><span class=\"title\">Voir mes restaurants</span></a></li>
                        <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurants_new");
        echo "\"><span class=\"title\">Ajouter des restaurants</span></a></li>
                    </ul>
                </li>
                <li class=\"has-sub\"><a href=\"\"><i class=\"entypo-list-add\"></i><span class=\"title\">Vaisselle</span></a>
                    <ul>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_plats_restaurants");
        echo "\"><span class=\"title\">Voir les plats</span></a></li>
                        <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plats_new");
        echo "\"><span class=\"title\">Ajouter des plats</span></a></li>
                    </ul>
                </li>
                <li class=\"\"><a href=\"\"><i class=\"entypo-lock\"></i><span class=\"title\">Changer le mot de passe</span></a></li>
                <li class=\"";
        // line 65
        $this->displayBlock('users_active', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"><i class=\"entypo-logout\"></i><span class=\"title\">Déconnexion</span></a></li>
            </ul>
        </div>
    </div>
    <div class=\"main-content\">
        <!-- TS15383785128609: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div class=\"row\"> <!-- Profile Info and Notifications -->
            <div class=\"col-md-6 col-sm-8 clearfix\">
                <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_restaurant");
        echo "\" target=\"_blank\">
                    <h4 style=\"padding-top: 7px; font-family: 'Raleway Medium'\">Visitez le site Web</h4>
                </a>
            </div> <!-- Raw Links -->
            <div class=\"col-md-6 col-sm-4 clearfix hidden-xs\">
                <ul class=\"list-inline links-list pull-right\">
                ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79)) {
            // line 80
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
                            Déconnexion
                            <i class=\"entypo-logout right\"></i> </a>
                    </li>
                 ";
        }
        // line 84
        echo "   
                </ul>
            </div>
        </div>
        <hr/>
        <br/>
        ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "

        <!-- Footer -->
        <footer class=\"main\">

            &copy; 2020 <strong>LA-PIZZA</strong> PANNEAU D'ADMINISTRATION Restaurants</footer>
    </div>
    <!-- TS153837851214942: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <div id=\"chat\" class=\"fixed\" data-current-user=\"Art Ramadani\" data-order-by-status=\"1\" data-max-chat-history=\"25\">
        <div class=\"chat-inner\"><h2 class=\"chat-header\"><a href=\"#\" class=\"chat-close\"><i class=\"entypo-cancel\"></i></a>
                <i class=\"entypo-users\"></i>
                Chat
                <span class=\"badge badge-success is-hidden\">0</span></h2>
            <div class=\"chat-group\" id=\"group-1\"><strong>Favorites</strong> <a href=\"#\" id=\"sample-user-123\"
                                                                               data-conversation-history=\"#sample_history\"><span
                            class=\"user-status is-online\"></span> <em>Catherine J. Watkins</em></a> <a href=\"#\"><span
                            class=\"user-status is-online\"></span> <em>Nicholas R. Walker</em></a> <a href=\"#\"><span
                            class=\"user-status is-busy\"></span> <em>Susan J. Best</em></a> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Brandon S. Young</em></a> <a href=\"#\"><span
                            class=\"user-status is-idle\"></span> <em>Fernando G. Olson</em></a></div>
            <div class=\"chat-group\" id=\"group-2\"><strong>Work</strong> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Robert J. Garcia</em></a> <a href=\"#\"
                                                                                                    data-conversation-history=\"#sample_history_2\"><span
                            class=\"user-status is-offline\"></span> <em>Daniel A. Pena</em></a> <a href=\"#\"><span
                            class=\"user-status is-busy\"></span> <em>Rodrigo E. Lozano</em></a></div>
            <div class=\"chat-group\" id=\"group-3\"><strong>Social</strong> <a href=\"#\"><span
                            class=\"user-status is-busy\"></span> <em>Velma G. Pearson</em></a> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Margaret R. Dedmon</em></a> <a href=\"#\"><span
                            class=\"user-status is-online\"></span> <em>Kathleen M. Canales</em></a> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Tracy J. Rodriguez</em></a></div>
        </div> <!-- conversation template -->
        <div class=\"chat-conversation\">
            <div class=\"conversation-header\"><a href=\"#\" class=\"conversation-close\"><i class=\"entypo-cancel\"></i></a>
                <span class=\"user-status\"></span> <span class=\"display-name\"></span>
                <small></small>
            </div>
            <ul class=\"conversation-body\"></ul>
            <div class=\"chat-textarea\"><textarea class=\"form-control autogrow\"
                                                 placeholder=\"Type your message\"></textarea></div>
        </div>
    </div> <!-- Chat Histories -->
    <ul class=\"chat-history\" id=\"sample_history\">
        <li><span class=\"user\">Art Ramadani</span>
            <p>Are you here?</p> <span class=\"time\">09:00</span></li>
        <li class=\"opponent\"><span class=\"user\">Catherine J. Watkins</span>
            <p>This message is pre-queued.</p> <span class=\"time\">09:25</span></li>
        <li class=\"opponent\"><span class=\"user\">Catherine J. Watkins</span>
            <p>Whohoo!</p> <span class=\"time\">09:26</span></li>
        <li class=\"opponent unread\"><span class=\"user\">Catherine J. Watkins</span>
            <p>Do you like it?</p> <span class=\"time\">09:27</span></li>
    </ul> <!-- Chat Histories -->
    <ul class=\"chat-history\" id=\"sample_history_2\">
        <li class=\"opponent unread\"><span class=\"user\">Daniel A. Pena</span>
            <p>I am going out.</p> <span class=\"time\">08:21</span></li>
        <li class=\"opponent unread\"><span class=\"user\">Daniel A. Pena</span>
            <p>Call me when you see this message.</p> <span class=\"time\">08:27</span></li>
    </ul>
</div>
<!-- Sample Modal (Default skin) -->
<div class=\"modal fade\" id=\"sample-modal-dialog-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Widget Options - Default Modal</h4></div>
            <div class=\"modal-body\"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are
                    most gave hope. Secure active living depend son repair day ladies now.</p></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin inverted) -->
<div class=\"modal invert fade\" id=\"sample-modal-dialog-2\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Widget Options - Inverted Skin Modal</h4></div>
            <div class=\"modal-body\"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are
                    most gave hope. Secure active living depend son repair day ladies now.</p></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin gray) -->
<div class=\"modal gray fade\" id=\"sample-modal-dialog-3\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Widget Options - Gray Skin Modal</h4></div>
            <div class=\"modal-body\"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are
                    most gave hope. Secure active living depend son repair day ladies now.</p></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Imported styles on this page -->
<link rel=\"stylesheet\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/datatables/datatables.css\" id=\"style-resource-1\">

<link rel=\"stylesheet\" href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/select2/select2-bootstrap.css\" id=\"style-resource-2\">
<link rel=\"stylesheet\" href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/select2/select2.css\" id=\"style-resource-3\">
<link rel=\"stylesheet\" href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jvectormap/jquery-jvectormap-1.2.2.css\" id=\"style-resource-1\">
<link rel=\"stylesheet\" href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/rickshaw/rickshaw.min.css\" id=\"style-resource-2\">
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/gsap/TweenMax.min.js\" id=\"script-resource-1\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js\" id=\"script-resource-2\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/bootstrap.js\" id=\"script-resource-3\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/joinable.js\" id=\"script-resource-4\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/resizeable.js\" id=\"script-resource-5\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-api.js\" id=\"script-resource-6\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/cookies.min.js\" id=\"script-resource-7\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/bootstrap-switch.min.js\" id=\"script-resource-8\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js\" id=\"script-resource-8\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js\" id=\"script-resource-9\"></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery.sparkline.min.js\" id=\"script-resource-10\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/rickshaw/vendor/d3.v3.js\" id=\"script-resource-11\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/rickshaw/rickshaw.min.js\" id=\"script-resource-12\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/raphael-min.js\" id=\"script-resource-13\"></script>
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/morris.min.js\" id=\"script-resource-14\"></script>
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/toastr.js\" id=\"script-resource-15\"></script>
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-chat.js\" id=\"script-resource-16\"></script>

<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/datatables/datatables.js\" id=\"script-resource-8\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/select2/select2.min.js\" id=\"script-resource-9\"></script>
<!-- JavaScripts initializations and stuff -->
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-custom.js\" id=\"script-resource-17\"></script> <!-- Demo Settings -->
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-demo.js\" id=\"script-resource-18\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-skins.js\" id=\"script-resource-19\"></script>

<script type=\"text/javascript\">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28991003-7']);
    _gaq.push(['_setDomainName', 'demo.neontheme.com']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AP";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_users_active($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "users_active"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "users_active"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 91,  491 => 90,  473 => 65,  454 => 12,  425 => 231,  421 => 230,  417 => 229,  412 => 227,  408 => 226,  403 => 224,  399 => 223,  395 => 222,  391 => 221,  387 => 220,  383 => 219,  379 => 218,  375 => 217,  371 => 216,  367 => 215,  363 => 214,  359 => 213,  355 => 212,  351 => 211,  347 => 210,  343 => 209,  339 => 208,  335 => 207,  331 => 206,  327 => 205,  323 => 204,  318 => 202,  206 => 92,  204 => 90,  196 => 84,  187 => 80,  185 => 79,  176 => 73,  163 => 65,  156 => 61,  152 => 60,  144 => 55,  140 => 54,  132 => 49,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  71 => 15,  67 => 14,  62 => 12,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <meta name=\"description\" content=\"Neon Admin Panel\"/>
    <meta name=\"author\" content=\"Laborator.co\"/>
    <link rel=\"icon\" href=\"{{ asset('') }}assets/images/favicon.ico\">
    <title>LA-PIZZA | {% block title %}AP{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css\" id=\"style-resource-1\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/font-icons/entypo/css/entypo.css\" id=\"style-resource-2\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic\" id=\"style-resource-3\">


    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/font-icons/font-awesome/css/font-awesome.min.css\" id=\"style-resource-4\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/bootstrap.css\" id=\"style-resource-4\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/neon-core.css\" id=\"style-resource-5\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/neon-theme.css\" id=\"style-resource-6\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/neon-forms.css\" id=\"style-resource-7\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/custom.css\" id=\"style-resource-8\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/skins/purple.css\" id=\"style-resource-8\">

    <script src=\"{{ asset('content/') }}assets/js/jquery-1.11.3.min.js\"></script>
    <script src=\"https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->



<body class=\"page-body page-fade\" data-url=\"https://demo.neontheme.com\">
<div class=\"page-container\">
    <div class=\"sidebar-menu\">
        <div class=\"sidebar-menu-inner\">
            <header class=\"logo-env\"> <!-- logo -->
                <div class=\"logo\"><a href=\"\" style=\"font-size: 22px;\"> LA-PIZZA AP </a></div> <!-- logo collapse icon -->
                <div class=\"sidebar-collapse\"><a href=\"#\" class=\"sidebar-collapse-icon\">
                        <!-- add class \"with-animation\" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class=\"entypo-menu\"></i> </a></div>
                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class=\"sidebar-mobile-menu visible-xs\"><a href=\"#\" class=\"with-animation\">
                        <!-- add class \"with-animation\" to support animation --> <i class=\"entypo-menu\"></i> </a></div>
            </header>
            
            <ul id=\"main-menu\" class=\"main-menu\">
                <li><a href=\"{{ path('espace_restaurant') }}\"><i class=\"entypo-gauge\"></i><span
                                class=\"title\">Tableau de bord</span></a>
                </li>
                <li class=\"has-sub\"><a href=\"\"><i class=\"entypo-layout\"></i><span class=\"title\">Restaurants</span></a>
                    <ul>
                        <li><a href=\"{{ path('mes_restaurants') }}\"><span class=\"title\">Voir mes restaurants</span></a></li>
                        <li><a href=\"{{ path('restaurants_new') }}\"><span class=\"title\">Ajouter des restaurants</span></a></li>
                    </ul>
                </li>
                <li class=\"has-sub\"><a href=\"\"><i class=\"entypo-list-add\"></i><span class=\"title\">Vaisselle</span></a>
                    <ul>
                        <li><a href=\"{{path('mes_plats_restaurants')}}\"><span class=\"title\">Voir les plats</span></a></li>
                        <li><a href=\"{{path('plats_new')}}\"><span class=\"title\">Ajouter des plats</span></a></li>
                    </ul>
                </li>
                <li class=\"\"><a href=\"\"><i class=\"entypo-lock\"></i><span class=\"title\">Changer le mot de passe</span></a></li>
                <li class=\"{% block users_active %}{% endblock %}\"><a href=\"{{ path('logout') }}\"><i class=\"entypo-logout\"></i><span class=\"title\">Déconnexion</span></a></li>
            </ul>
        </div>
    </div>
    <div class=\"main-content\">
        <!-- TS15383785128609: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div class=\"row\"> <!-- Profile Info and Notifications -->
            <div class=\"col-md-6 col-sm-8 clearfix\">
                <a href=\"{{ path('espace_restaurant') }}\" target=\"_blank\">
                    <h4 style=\"padding-top: 7px; font-family: 'Raleway Medium'\">Visitez le site Web</h4>
                </a>
            </div> <!-- Raw Links -->
            <div class=\"col-md-6 col-sm-4 clearfix hidden-xs\">
                <ul class=\"list-inline links-list pull-right\">
                {% if app.user%}
                    <li><a href=\"{{ path('logout') }}\">
                            Déconnexion
                            <i class=\"entypo-logout right\"></i> </a>
                    </li>
                 {% endif %}   
                </ul>
            </div>
        </div>
        <hr/>
        <br/>
        {% block body %}
        {% endblock %}


        <!-- Footer -->
        <footer class=\"main\">

            &copy; 2020 <strong>LA-PIZZA</strong> PANNEAU D'ADMINISTRATION Restaurants</footer>
    </div>
    <!-- TS153837851214942: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <div id=\"chat\" class=\"fixed\" data-current-user=\"Art Ramadani\" data-order-by-status=\"1\" data-max-chat-history=\"25\">
        <div class=\"chat-inner\"><h2 class=\"chat-header\"><a href=\"#\" class=\"chat-close\"><i class=\"entypo-cancel\"></i></a>
                <i class=\"entypo-users\"></i>
                Chat
                <span class=\"badge badge-success is-hidden\">0</span></h2>
            <div class=\"chat-group\" id=\"group-1\"><strong>Favorites</strong> <a href=\"#\" id=\"sample-user-123\"
                                                                               data-conversation-history=\"#sample_history\"><span
                            class=\"user-status is-online\"></span> <em>Catherine J. Watkins</em></a> <a href=\"#\"><span
                            class=\"user-status is-online\"></span> <em>Nicholas R. Walker</em></a> <a href=\"#\"><span
                            class=\"user-status is-busy\"></span> <em>Susan J. Best</em></a> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Brandon S. Young</em></a> <a href=\"#\"><span
                            class=\"user-status is-idle\"></span> <em>Fernando G. Olson</em></a></div>
            <div class=\"chat-group\" id=\"group-2\"><strong>Work</strong> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Robert J. Garcia</em></a> <a href=\"#\"
                                                                                                    data-conversation-history=\"#sample_history_2\"><span
                            class=\"user-status is-offline\"></span> <em>Daniel A. Pena</em></a> <a href=\"#\"><span
                            class=\"user-status is-busy\"></span> <em>Rodrigo E. Lozano</em></a></div>
            <div class=\"chat-group\" id=\"group-3\"><strong>Social</strong> <a href=\"#\"><span
                            class=\"user-status is-busy\"></span> <em>Velma G. Pearson</em></a> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Margaret R. Dedmon</em></a> <a href=\"#\"><span
                            class=\"user-status is-online\"></span> <em>Kathleen M. Canales</em></a> <a href=\"#\"><span
                            class=\"user-status is-offline\"></span> <em>Tracy J. Rodriguez</em></a></div>
        </div> <!-- conversation template -->
        <div class=\"chat-conversation\">
            <div class=\"conversation-header\"><a href=\"#\" class=\"conversation-close\"><i class=\"entypo-cancel\"></i></a>
                <span class=\"user-status\"></span> <span class=\"display-name\"></span>
                <small></small>
            </div>
            <ul class=\"conversation-body\"></ul>
            <div class=\"chat-textarea\"><textarea class=\"form-control autogrow\"
                                                 placeholder=\"Type your message\"></textarea></div>
        </div>
    </div> <!-- Chat Histories -->
    <ul class=\"chat-history\" id=\"sample_history\">
        <li><span class=\"user\">Art Ramadani</span>
            <p>Are you here?</p> <span class=\"time\">09:00</span></li>
        <li class=\"opponent\"><span class=\"user\">Catherine J. Watkins</span>
            <p>This message is pre-queued.</p> <span class=\"time\">09:25</span></li>
        <li class=\"opponent\"><span class=\"user\">Catherine J. Watkins</span>
            <p>Whohoo!</p> <span class=\"time\">09:26</span></li>
        <li class=\"opponent unread\"><span class=\"user\">Catherine J. Watkins</span>
            <p>Do you like it?</p> <span class=\"time\">09:27</span></li>
    </ul> <!-- Chat Histories -->
    <ul class=\"chat-history\" id=\"sample_history_2\">
        <li class=\"opponent unread\"><span class=\"user\">Daniel A. Pena</span>
            <p>I am going out.</p> <span class=\"time\">08:21</span></li>
        <li class=\"opponent unread\"><span class=\"user\">Daniel A. Pena</span>
            <p>Call me when you see this message.</p> <span class=\"time\">08:27</span></li>
    </ul>
</div>
<!-- Sample Modal (Default skin) -->
<div class=\"modal fade\" id=\"sample-modal-dialog-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Widget Options - Default Modal</h4></div>
            <div class=\"modal-body\"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are
                    most gave hope. Secure active living depend son repair day ladies now.</p></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin inverted) -->
<div class=\"modal invert fade\" id=\"sample-modal-dialog-2\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Widget Options - Inverted Skin Modal</h4></div>
            <div class=\"modal-body\"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are
                    most gave hope. Secure active living depend son repair day ladies now.</p></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin gray) -->
<div class=\"modal gray fade\" id=\"sample-modal-dialog-3\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Widget Options - Gray Skin Modal</h4></div>
            <div class=\"modal-body\"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are
                    most gave hope. Secure active living depend son repair day ladies now.</p></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Imported styles on this page -->
<link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/datatables/datatables.css\" id=\"style-resource-1\">

<link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/select2/select2-bootstrap.css\" id=\"style-resource-2\">
<link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/select2/select2.css\" id=\"style-resource-3\">
<link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/jvectormap/jquery-jvectormap-1.2.2.css\" id=\"style-resource-1\">
<link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/rickshaw/rickshaw.min.css\" id=\"style-resource-2\">
<script src=\"{{ asset('content/') }}assets/js/gsap/TweenMax.min.js\" id=\"script-resource-1\"></script>
<script src=\"{{ asset('content/') }}assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js\" id=\"script-resource-2\"></script>
<script src=\"{{ asset('content/') }}assets/js/bootstrap.js\" id=\"script-resource-3\"></script>
<script src=\"{{ asset('content/') }}assets/js/joinable.js\" id=\"script-resource-4\"></script>
<script src=\"{{ asset('content/') }}assets/js/resizeable.js\" id=\"script-resource-5\"></script>
<script src=\"{{ asset('content/') }}assets/js/neon-api.js\" id=\"script-resource-6\"></script>
<script src=\"{{ asset('content/') }}assets/js/cookies.min.js\" id=\"script-resource-7\"></script>
<script src=\"{{ asset('content/') }}assets/js/bootstrap-switch.min.js\" id=\"script-resource-8\"></script>
<script src=\"{{ asset('content/') }}assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js\" id=\"script-resource-8\"></script>
<script src=\"{{ asset('content/') }}assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js\" id=\"script-resource-9\"></script>
<script src=\"{{ asset('content/') }}assets/js/jquery.sparkline.min.js\" id=\"script-resource-10\"></script>
<script src=\"{{ asset('content/') }}assets/js/rickshaw/vendor/d3.v3.js\" id=\"script-resource-11\"></script>
<script src=\"{{ asset('content/') }}assets/js/rickshaw/rickshaw.min.js\" id=\"script-resource-12\"></script>
<script src=\"{{ asset('content/') }}assets/js/raphael-min.js\" id=\"script-resource-13\"></script>
<script src=\"{{ asset('content/') }}assets/js/morris.min.js\" id=\"script-resource-14\"></script>
<script src=\"{{ asset('content/') }}assets/js/toastr.js\" id=\"script-resource-15\"></script>
<script src=\"{{ asset('content/') }}assets/js/neon-chat.js\" id=\"script-resource-16\"></script>

<script src=\"{{ asset('content/') }}assets/js/datatables/datatables.js\" id=\"script-resource-8\"></script>
<script src=\"{{ asset('content/') }}assets/js/select2/select2.min.js\" id=\"script-resource-9\"></script>
<!-- JavaScripts initializations and stuff -->
<script src=\"{{ asset('content/') }}assets/js/neon-custom.js\" id=\"script-resource-17\"></script> <!-- Demo Settings -->
<script src=\"{{ asset('content/') }}assets/js/neon-demo.js\" id=\"script-resource-18\"></script>
<script src=\"{{ asset('content/') }}assets/js/neon-skins.js\" id=\"script-resource-19\"></script>

<script type=\"text/javascript\">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28991003-7']);
    _gaq.push(['_setDomainName', 'demo.neontheme.com']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

</body>
</html>", "restaurant.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/restaurant.html.twig");
    }
}
