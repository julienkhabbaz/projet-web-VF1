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

/* base.html.twig */
class __TwigTemplate_7604bb413cd6a2deda86109aeaa37654b4c0ed3088cae366e34e40f68aff94e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/custom.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/bootstrap.min.css"), "html", null, true);
        echo "\">
</head>
<body>
  <header id=\"header mb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-md navbar-light nav\" > <a class=\"navbar-brand\" id=\"logo\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">La pizza</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\" >

                              <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item \"> <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_restaurants");
        echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Restaurants</a> </li>

                              </ul>
                           <ul class=\"navbar-nav ml-auto\" >

                             ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 29
            echo "                                <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Admin</a> </li>
                               <li class=\"nav-item \"> <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                             
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RESTAURANT"))) {
            // line 33
            echo "                             <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_restaurant");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Restaurant</a> </li>
                            <li class=\"nav-item \"> <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 36
            echo "                             <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_client");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Client</a> </li>
                            <li class=\"nav-item \"> <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>  
                             ";
        } else {
            // line 38
            echo "  
                                <li class=\"nav-item \"> <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'identifier </a> / <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_register");
            echo "\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'inscrire</a> </li>
                            ";
        }
        // line 41
        echo "                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>



        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "


<footer class=\"page-footer font-small mdb-color lighten-3 pt-4 footerContent mt-5\">
    <div class=\"container text-center text-md-left\">
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Spécialités</h5>
                <ul  class=\"list-unstyled\">
                    <li><p><a href=\"#\">Pizza</a></p></li>
                    <li><p><a href=\"#\">Japonais</a></p></li>
                    <li><p><a href=\"#\">Indien-Pakistanais</a></p></li>
                    <li><p><a href=\"#\">Chinois</a></p></li>
                    <li><p><a href=\"#\">KFC</a></p></li>
                    <li><p><a href=\"#\">Nos chanies</a></p></li>
                    <li><p><a href=\"#\">Plus de spécialités</a></p></li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Villes</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Paris</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Marseille</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Lyon</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toulouse</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Bordeaux</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Starsbourg</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Montpellier</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toutes les villes</a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">À propos de nous</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Qui sommes-nous ?</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">CGV</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Mentions légales</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Politique de confidentialité</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Cookies</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Suggérez-nous un resto</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Aide - FAQ</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Meilleur Prix Livré</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Rejoignez-nous </a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Le Blog </a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-6 col-lg-6 text-center mx-auto my-4\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Téléchargez L'APP pour se faire livrer</h5>
                <ul class=\"list-unstyled\">
                    <li><p><img class=\"img-fluid\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/images/apple-logo.PNG"), "html", null, true);
        echo "\"></p></li>
                    <li><p><img class=\"img-fluid\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/images/samsung-logo.PNG"), "html", null, true);
        echo "\"></p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright text-center py-3\">© 2020 droits d'auteur:
        <a href=\"#\">La Pizza</a>
    </div>
</footer>
";
        // line 186
        $this->displayBlock('javascripts', $context, $blocks);
        // line 191
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 187
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.slim.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 188,  328 => 187,  318 => 186,  300 => 51,  289 => 191,  287 => 186,  275 => 177,  271 => 176,  145 => 52,  143 => 51,  131 => 41,  124 => 39,  121 => 38,  116 => 37,  111 => 36,  109 => 35,  105 => 34,  100 => 33,  98 => 32,  93 => 30,  88 => 29,  86 => 28,  78 => 23,  70 => 18,  60 => 11,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/css/custom.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/css/bootstrap.min.css') }}\">
</head>
<body>
  <header id=\"header mb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-md navbar-light nav\" > <a class=\"navbar-brand\" id=\"logo\" href=\"{{ path('home') }}\">La pizza</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\" >

                              <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item \"> <a href=\"{{ path('liste_restaurants') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Restaurants</a> </li>

                              </ul>
                           <ul class=\"navbar-nav ml-auto\" >

                             {% if app.user  and is_granted('ROLE_ADMIN')%}
                                <li class=\"nav-item \"> <a href=\"{{ path('admin_dash') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Admin</a> </li>
                               <li class=\"nav-item \"> <a href=\"{{ path('logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                             
                            {%  elseif  app.user  and is_granted('ROLE_RESTAURANT') %}
                             <li class=\"nav-item \"> <a href=\"{{ path('espace_restaurant') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Restaurant</a> </li>
                            <li class=\"nav-item \"> <a href=\"{{ path('logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                            {%  elseif  app.user  and is_granted('ROLE_USER') %}
                             <li class=\"nav-item \"> <a href=\"{{ path('espace_client') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Client</a> </li>
                            <li class=\"nav-item \"> <a href=\"{{ path('logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>  
                             {% else %}  
                                <li class=\"nav-item \"> <a href=\"{{ path('app_login') }}\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'identifier </a> / <a href=\"{{ path('type_register') }}\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'inscrire</a> </li>
                            {% endif %}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>



        {% block body %}{% endblock %}



<footer class=\"page-footer font-small mdb-color lighten-3 pt-4 footerContent mt-5\">
    <div class=\"container text-center text-md-left\">
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Spécialités</h5>
                <ul  class=\"list-unstyled\">
                    <li><p><a href=\"#\">Pizza</a></p></li>
                    <li><p><a href=\"#\">Japonais</a></p></li>
                    <li><p><a href=\"#\">Indien-Pakistanais</a></p></li>
                    <li><p><a href=\"#\">Chinois</a></p></li>
                    <li><p><a href=\"#\">KFC</a></p></li>
                    <li><p><a href=\"#\">Nos chanies</a></p></li>
                    <li><p><a href=\"#\">Plus de spécialités</a></p></li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Villes</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Paris</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Marseille</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Lyon</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toulouse</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Bordeaux</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Starsbourg</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Montpellier</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toutes les villes</a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">À propos de nous</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Qui sommes-nous ?</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">CGV</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Mentions légales</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Politique de confidentialité</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Cookies</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Suggérez-nous un resto</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Aide - FAQ</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Meilleur Prix Livré</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Rejoignez-nous </a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Le Blog </a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-6 col-lg-6 text-center mx-auto my-4\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Téléchargez L'APP pour se faire livrer</h5>
                <ul class=\"list-unstyled\">
                    <li><p><img class=\"img-fluid\" src=\"{{ asset('content/images/apple-logo.PNG') }}\"></p></li>
                    <li><p><img class=\"img-fluid\" src=\"{{ asset('content/images/samsung-logo.PNG') }}\"></p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright text-center py-3\">© 2020 droits d'auteur:
        <a href=\"#\">La Pizza</a>
    </div>
</footer>
{% block javascripts %}
<script src=\"{{ asset('content/js/jquery.slim.min.js') }}\" ></script>
<script src=\"{{ asset('content/js/bootstrap.js') }}\"></script>

{% endblock %}
</body>
</html>", "base.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/base.html.twig");
    }
}
