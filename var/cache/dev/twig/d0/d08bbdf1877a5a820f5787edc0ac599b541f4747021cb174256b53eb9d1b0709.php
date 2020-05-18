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

/* front/show.html.twig */
class __TwigTemplate_9b4e08d2ecb08b8762c1e2face98b376c72d975f09318ad14b08b714837843fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "\t
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-lg-6\">

            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 10, $this->source); })()), "filename", [], "any", false, false, false, 10)) {
            // line 11
            echo "\t\t\t\t<img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 11, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\">
            ";
        } else {
            // line 13
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/restaurants/empty.png", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">


                ";
        }
        // line 17
        echo "            </div>
            <div class=\"col-sm-6\"><h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                <p class=\"margin-top:0px\">Description: ";
        // line 19
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true));
        echo "</p>
                <p  style=\"margin-top:0px;\">Adresse: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
            </div>
        
        </div>
\t\t<div class=\"row\">
        <table class=\"table tab-stripedble\">
        <h1>Plats </h1>
            <thead>
                <tr>
                <th>Libele</th>
                <th>Description</th>
                <th>Prix</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 36, $this->source); })()), "plats", [], "any", false, false, false, 36));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libele", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 39), "html", null, true));
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commander", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-primary \"> Commander</a></td>
               
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr>
                <td colspan=\"5\">aucun plat trouve</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
\t\t\t
\t\t</div>
    </div>

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 49,  169 => 45,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  145 => 37,  140 => 36,  121 => 20,  117 => 19,  113 => 18,  110 => 17,  102 => 13,  96 => 11,  94 => 10,  78 => 5,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block title restaurant.name %}

{% block body %}\t
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-lg-6\">

            {% if restaurant.filename %}
\t\t\t\t<img class=\"img-fluid\" src=\"{{ vich_uploader_asset(restaurant,'imageFile') | imagine_filter('medium') }}\" alt=\"card-img-top\">
            {% else %}
\t\t\t\t<img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">


                {% endif %}
            </div>
            <div class=\"col-sm-6\"><h1>{{restaurant.name}}</h1>
                <p class=\"margin-top:0px\">Description: {{restaurant.description | nl2br}}</p>
                <p  style=\"margin-top:0px;\">Adresse: {{restaurant.adresse}}</p>
            </div>
        
        </div>
\t\t<div class=\"row\">
        <table class=\"table tab-stripedble\">
        <h1>Plats </h1>
            <thead>
                <tr>
                <th>Libele</th>
                <th>Description</th>
                <th>Prix</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for plat in restaurant.plats %}
            <tr>
                <td>{{ plat.libele }}</td>
                <td>{{ plat.description  | nl2br}}</td>
                <td>{{ plat.prix }}</td>
                <td><a href=\"{{ path('commander', {'id': plat.id}) }}\" class=\"btn btn-primary \"> Commander</a></td>
               
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">aucun plat trouve</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
\t\t\t
\t\t</div>
    </div>

  
{% endblock %}
", "front/show.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/front/show.html.twig");
    }
}
